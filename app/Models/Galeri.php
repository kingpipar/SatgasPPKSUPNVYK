<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Galeri extends Model
{
    use HasFactory;

    protected $table = 'galeris';

    protected $fillable = [
        'judul_kegiatan',
        'slug',
        'foto_utama',
        'deskripsi_singkat',
        'tanggal_kegiatan',
    ];

    protected $casts = [
        'tanggal_kegiatan' => 'date',
    ];

    /**
     * Gunakan slug sebagai route model binding
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Relasi ke foto-foto dalam album, diurutkan berdasarkan kolom urutan
     */
    public function fotos(): HasMany
    {
        return $this->hasMany(GaleriFoto::class, 'galeri_id')->orderBy('urutan', 'asc');
    }

    /**
     * Buat slug otomatis jika belum terisi saat create
     */
    protected static function booted(): void
    {
        static::creating(function (Galeri $galeri) {
            if (empty($galeri->slug)) {
                $baseSlug = Str::slug($galeri->judul_kegiatan);
                $slug = $baseSlug;
                $counter = 1;

                while (static::where('slug', $slug)->exists()) {
                    $slug = $baseSlug . '-' . (++$counter);
                }

                $galeri->slug = $slug;
            }
        });
    }
}
