<?php

namespace App\Http\Controllers;

use App\Models\StatistikKasus;
use Illuminate\Http\Request;

class AdminStatistikController extends Controller
{
    public function edit()
    {
        $statistik = StatistikKasus::getActive();
        return view('pages.admin.statistik.edit', compact('statistik'));
    }

// Simpan pembaruan data statistik penanganan kasus
    public function update(Request $request)
    {
        $validated = $request->validate([
            'tahun_periode'            => 'required|string|max:100',
            'total_masuk'              => 'required|integer|min:0',
            'telah_selesai'            => 'required|integer|min:0',
            'on_going'                 => 'required|integer|min:0',
            'kekerasan_fisik'          => 'required|integer|min:0',
            'kekerasan_psikis'         => 'required|integer|min:0',
            'perundungan'              => 'required|integer|min:0',
            'kekerasan_seksual'        => 'required|integer|min:0',
            'diskriminasi_intoleransi' => 'required|integer|min:0',
            'kebijakan_kekerasan'      => 'required|integer|min:0',
            'catatan_kriteria'         => 'nullable|string|max:2000',
        ], [
            'tahun_periode.required'   => 'Periode atau tahun laporan wajib diisi.',
            'total_masuk.required'     => 'Total laporan masuk wajib diisi berupa angka.',
            'telah_selesai.required'   => 'Jumlah laporan selesai wajib diisi berupa angka.',
            'on_going.required'        => 'Jumlah laporan on going wajib diisi berupa angka.',
        ]);

        $statistik = StatistikKasus::getActive();
        $statistik->update($validated);

        return redirect()->route('admin.statistik.edit')
            ->with('success', 'Data statistik penanganan kasus berhasil diperbarui.');
    }
}
