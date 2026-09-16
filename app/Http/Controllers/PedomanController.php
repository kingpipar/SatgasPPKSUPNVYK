<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class PedomanController extends Controller
{
    /**
     * Tampilkan daftar pedoman (flat list, dengan dukungan search query ?q=)
     */
    public function index(Request $request)
    {
        $semuaDokumen = config('pedoman.dokumen', []);

        $query = trim($request->query('q', ''));

        if ($query !== '') {
            $dokumen = array_values(array_filter($semuaDokumen, function ($doc) use ($query) {
                return str_contains(strtolower($doc['judul']), strtolower($query))
                    || str_contains(strtolower($doc['deskripsi'] ?? ''), strtolower($query));
            }));
        } else {
            $dokumen = array_values($semuaDokumen);
        }

        return view('pages.pedoman.index', compact('dokumen', 'query'));
    }

    /**
     * Tampilkan preview / embed file PDF secara aman
     */
    public function lihat(string $slug)
    {
        $dokumen = $this->findDokumenBySlug($slug);

        if (!$dokumen) {
            abort(404, 'Dokumen pedoman tidak ditemukan.');
        }

        $disk = Storage::disk('public');

        if (!$disk->exists($dokumen['file_path'])) {
            return redirect()->route('pedoman.index')
                ->with('warning', "File fisik untuk '{$dokumen['judul']}' belum ditambahkan di storage/app/public/{$dokumen['file_path']}. Silakan letakkan file PDF terlebih dahulu.");
        }

        return view('pages.pedoman.lihat', compact('dokumen'));
    }

    /**
     * Stream file PDF inline untuk iframe/embed viewer
     */
    public function stream(string $slug)
    {
        $dokumen = $this->findDokumenBySlug($slug);

        if (!$dokumen) {
            abort(404, 'Dokumen tidak ditemukan.');
        }

        $disk = Storage::disk('public');

        if (!$disk->exists($dokumen['file_path'])) {
            abort(404, 'File PDF tidak ditemukan di storage server.');
        }

        return $disk->response($dokumen['file_path'], null, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . basename($dokumen['file_path']) . '"',
        ]);
    }

    /**
     * Download file dokumen PDF via Storage::download agar path asli tidak terekspos
     */
    public function download(string $slug)
    {
        $dokumen = $this->findDokumenBySlug($slug);

        if (!$dokumen) {
            abort(404, 'Dokumen pedoman tidak ditemukan.');
        }

        $disk = Storage::disk('public');

        if (!$disk->exists($dokumen['file_path'])) {
            return redirect()->route('pedoman.index')
                ->with('warning', "File fisik '{$dokumen['judul']}' belum ada di server storage. Silakan tambahkan file terlebih dahulu.");
        }

        $namaDownload = preg_replace('/[^a-zA-Z0-9_\-]/', '_', $dokumen['judul']) . '.pdf';

        return $disk->download($dokumen['file_path'], $namaDownload);
    }

    /**
     * Helper untuk mencari item dokumen berdasarkan slug atau ID
     */
    private function findDokumenBySlug(string $slug): ?array
    {
        $dokumenList = config('pedoman.dokumen', []);
        foreach ($dokumenList as $doc) {
            if (($doc['slug'] ?? '') === $slug || ($doc['id'] ?? '') === $slug) {
                return $doc;
            }
        }
        return null;
    }
}
