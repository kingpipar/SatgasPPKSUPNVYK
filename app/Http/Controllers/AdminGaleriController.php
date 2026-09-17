<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\GaleriFoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminGaleriController extends Controller
{

    public function showLoginForm()
    {
        if (session('admin_authenticated')) {
            return redirect()->route('admin.galeri.index');
        }

        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'password' => 'required|string',
        ], [
            'password.required' => 'Kata sandi wajib diisi.',
        ]);

        $adminPassword = config('satgas.admin_password', env('ADMIN_PASSWORD', 'SatgasPPKS#2026'));

        if ($request->input('password') === $adminPassword) {
            session(['admin_authenticated' => true]);
            return redirect()->route('admin.galeri.index')
                ->with('success', 'Berhasil masuk ke panel kelola galeri Satgas PPKS.');
        }

        return back()
            ->withInput()
            ->withErrors(['password' => 'Kata sandi salah. Silakan periksa kembali kata sandi di file .env Anda.']);
    }

    public function logout()
    {
        session()->forget('admin_authenticated');
        return redirect()->route('beranda')
            ->with('info', 'Anda telah keluar dari panel kelola galeri.');
    }

    public function index()
    {
        $galeris = Galeri::withCount('fotos')
            ->orderByDesc('created_at')
            ->paginate(15);

        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_kegiatan'   => 'required|string|max:255',
            'tanggal_kegiatan' => 'required|date',
            'deskripsi_singkat'=> 'required|string|max:1000',
            'foto_utama'       => 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
            'foto_dokumentasi.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ], [
            'judul_kegiatan.required' => 'Judul kegiatan wajib diisi.',
            'tanggal_kegiatan.required' => 'Tanggal kegiatan wajib diisi.',
            'deskripsi_singkat.required' => 'Deskripsi singkat wajib diisi.',
            'foto_utama.required' => 'Foto sampul utama wajib diunggah.',
            'foto_utama.image' => 'File foto utama harus berupa gambar (JPG, PNG, WEBP).',
            'foto_utama.max' => 'Ukuran foto utama maksimal 5 MB.',
            'foto_dokumentasi.*.image' => 'File dokumentasi harus berupa gambar.',
            'foto_dokumentasi.*.max' => 'Ukuran foto dokumentasi maksimal 5 MB per file.',
        ]);

        // Simpan foto utama
        $fotoUtamaPath = $request->file('foto_utama')->store('galeri', 'public');

        // Buat data Galeri
        $galeri = Galeri::create([
            'judul_kegiatan'    => $validated['judul_kegiatan'],
            'tanggal_kegiatan'  => $validated['tanggal_kegiatan'],
            'deskripsi_singkat' => $validated['deskripsi_singkat'],
            'foto_utama'        => $fotoUtamaPath,
        ]);

        // Simpan multiple foto dokumentasi jika ada
        if ($request->hasFile('foto_dokumentasi')) {
            $urutan = 1;
            foreach ($request->file('foto_dokumentasi') as $fotoFile) {
                if ($fotoFile->isValid()) {
                    $path = $fotoFile->store('galeri', 'public');
                    $galeri->fotos()->create([
                        'foto_path' => $path,
                        'urutan'    => $urutan++,
                    ]);
                }
            }
        }

        return redirect()->route('admin.galeri.index')
            ->with('success', "Album kegiatan '{$galeri->judul_kegiatan}' berhasil disimpan!");
    }

    // Form edit album kegiatan
    public function edit(Galeri $galeri)
    {
        $galeri->load('fotos');
        return view('admin.galeri.edit', compact('galeri'));
    }

    // Update album kegiatan
    public function update(Request $request, Galeri $galeri)
    {
        $validated = $request->validate([
            'judul_kegiatan'   => 'required|string|max:255',
            'tanggal_kegiatan' => 'required|date',
            'deskripsi_singkat'=> 'required|string|max:1000',
            'foto_utama'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'foto_dokumentasi.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        // Update foto utama jika ada file baru diunggah
        if ($request->hasFile('foto_utama')) {
            if ($galeri->foto_utama && Storage::disk('public')->exists($galeri->foto_utama)) {
                Storage::disk('public')->delete($galeri->foto_utama);
            }
            $galeri->foto_utama = $request->file('foto_utama')->store('galeri', 'public');
        }

        // Update atribut lainnya
        $galeri->judul_kegiatan = $validated['judul_kegiatan'];
        $galeri->tanggal_kegiatan = $validated['tanggal_kegiatan'];
        $galeri->deskripsi_singkat = $validated['deskripsi_singkat'];
        $galeri->save();

        // Tambah foto dokumentasi baru jika diunggah
        if ($request->hasFile('foto_dokumentasi')) {
            $maxUrutan = $galeri->fotos()->max('urutan') ?? 0;
            foreach ($request->file('foto_dokumentasi') as $fotoFile) {
                if ($fotoFile->isValid()) {
                    $path = $fotoFile->store('galeri', 'public');
                    $galeri->fotos()->create([
                        'foto_path' => $path,
                        'urutan'    => ++$maxUrutan,
                    ]);
                }
            }
        }

        return redirect()->route('admin.galeri.index')
            ->with('success', "Album kegiatan '{$galeri->judul_kegiatan}' berhasil diperbarui!");
    }

    // Hapus 1 foto dokumentasi dari album
    public function hapusFoto(GaleriFoto $foto)
    {
        $galeriId = $foto->galeri_id;

        // Hapus file fisik di storage
        if ($foto->foto_path && Storage::disk('public')->exists($foto->foto_path)) {
            Storage::disk('public')->delete($foto->foto_path);
        }

        $foto->delete();

        return back()->with('success', 'Foto dokumentasi berhasil dihapus.');
    }

    // Hapus album kegiatan beserta seluruh file foto fisiknya
    public function destroy(Galeri $galeri)
    {
        $judul = $galeri->judul_kegiatan;

        // Hapus foto utama
        if ($galeri->foto_utama && Storage::disk('public')->exists($galeri->foto_utama)) {
            Storage::disk('public')->delete($galeri->foto_utama);
        }

        // Hapus seluruh foto dokumentasi
        foreach ($galeri->fotos as $foto) {
            if ($foto->foto_path && Storage::disk('public')->exists($foto->foto_path)) {
                Storage::disk('public')->delete($foto->foto_path);
            }
        }

        // Hapus model (cascade on delete membersihkan baris galeri_fotos)
        $galeri->delete();

        return redirect()->route('admin.galeri.index')
            ->with('success', "Album kegiatan '{$judul}' dan seluruh fotonya berhasil dihapus.");
    }
}
