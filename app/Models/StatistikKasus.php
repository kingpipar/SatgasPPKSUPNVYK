<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatistikKasus extends Model
{
    use HasFactory;

    protected $table = 'statistik_kasus';

    protected $fillable = [
        'tahun_periode',
        'total_masuk',
        'telah_selesai',
        'on_going',
        'kekerasan_fisik',
        'kekerasan_psikis',
        'perundungan',
        'kekerasan_seksual',
        'diskriminasi_intoleransi',
        'kebijakan_kekerasan',
        'catatan_kriteria',
    ];

    public static function getActive(): self
    {
        return static::firstOrCreate(
            ['id' => 1],
            [
                'tahun_periode'           => '2026',
                'total_masuk'             => 28,
                'telah_selesai'           => 28,
                'on_going'                => 0,
                'kekerasan_fisik'         => 0,
                'kekerasan_psikis'        => 3,
                'perundungan'             => 0,
                'kekerasan_seksual'       => 25,
                'diskriminasi_intoleransi'=> 0,
                'kebijakan_kekerasan'     => 1,
                'catatan_kriteria'        => "Kasus dinyatakan selesai jika:\n1. Sudah menghasilkan surat rekomendasi kepada Rektor\n2. Kasus dihentikan karena permintaan pelapor\n3. Kasus bukan merupakan tindak kekerasan, dengan demikian Satgas menghentikan atau mengembalikan kepada lembaga yang berwenang.",
            ]
        );
    }
}
