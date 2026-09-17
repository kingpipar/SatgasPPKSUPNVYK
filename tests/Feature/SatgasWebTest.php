<?php

namespace Tests\Feature;

use App\Models\Galeri;
use Database\Seeders\GaleriSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SatgasWebTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        // Jalankan seeder pada database uji
        $this->seed(GaleriSeeder::class);
    }

    /**
     * Test Beranda / Dashboard publik bisa diakses dengan benar
     */
    public function test_beranda_page_is_accessible(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Satgas PPKS', false);
        $response->assertSee('UPN &quot;Veteran&quot; Yogyakarta', false);
        $response->assertSee('081225573747', false);
        $response->assertSee('satgas.ppks@upnyk.ac.id', false);
    }

    /**
     * Test 3 sub-halaman Profil / About Us
     */
    public function test_profil_subpages_are_accessible(): void
    {
        // 1. Profil Satgas
        $resSatgas = $this->get('/profil/satgas');
        $resSatgas->assertStatus(200);
        $resSatgas->assertSee('Profil Satgas PPKS');

        // 2. Logo dan Filosofi
        $resLogo = $this->get('/profil/logo-filosofi');
        $resLogo->assertStatus(200);
        $resLogo->assertSee('Logo dan Filosofi');
        $resLogo->assertSee('Filosofi Logo');

        // 3. Struktur Kepengurusan
        $resStruktur = $this->get('/profil/struktur-kepengurusan');
        $resStruktur->assertStatus(200);
        $resStruktur->assertSee('Struktur Kepengurusan');
    }

    /**
     * Test Halaman Pelayanan & Google Form CTA
     */
    public function test_pelayanan_page_is_accessible(): void
    {
        $response = $this->get('/pelayanan');

        $response->assertStatus(200);
        $response->assertSee('Alur Penanganan Laporan');
        $response->assertSee('Google Form Pengaduan');
    }

    /**
     * Test Halaman Pedoman — list + stream preview + download PDF
     */
    public function test_pedoman_page_and_download(): void
    {
        $response = $this->get('/pedoman');
        $response->assertStatus(200);
        $response->assertSee('Peraturan Rektor Nomor 5 Tahun 2023');
        $response->assertSee('Permendikbudristek');

        // Test preview / lihat endpoint (streams inline PDF directly to browser)
        $resLihat = $this->get('/pedoman/lihat/peraturan-rektor-no-5-2023');
        $resLihat->assertStatus(200);
        $this->assertEquals('application/pdf', $resLihat->headers->get('content-type'));

        // Test download endpoint (file nyata ada di storage)
        $resDownload = $this->get('/pedoman/download/peraturan-rektor-no-5-2023');
        $resDownload->assertStatus(200);
        $this->assertEquals('application/pdf', $resDownload->headers->get('content-type'));
    }

    /**
     * Test Galeri Publik & Route Model Binding dengan Slug
     */
    public function test_galeri_public_listing_and_detail_slug(): void
    {
        $galeri = Galeri::first();
        $this->assertNotNull($galeri, 'Data galeri harus ada dari seeder');

        // Listing
        $resIndex = $this->get('/galeri');
        $resIndex->assertStatus(200);
        $resIndex->assertSee($galeri->judul_kegiatan);

        // Detail using slug binding
        $resDetail = $this->get('/galeri/' . $galeri->slug);
        $resDetail->assertStatus(200);
        $resDetail->assertSee($galeri->judul_kegiatan);
    }

    /**
     * Test Proteksi Admin Galeri Mini-CRUD (Tanpa Tabel Users)
     */
    public function test_admin_galeri_requires_password_session(): void
    {
        // Akses tanpa login harus redirect ke form masuk
        $response = $this->get('/kelola-galeri');
        $response->assertRedirect('/kelola-galeri/masuk');

        // Coba login dengan password salah
        $resWrong = $this->post('/kelola-galeri/masuk', [
            'password' => 'WrongPassword123!',
        ]);
        $resWrong->assertSessionHasErrors('password');
        $this->assertFalse(session('admin_authenticated', false));

        // Login dengan password benar
        $adminPassword = config('satgas.admin_password', env('ADMIN_PASSWORD', 'SatgasPPKS#2026'));
        $resRight = $this->post('/kelola-galeri/masuk', [
            'password' => $adminPassword,
        ]);
        $resRight->assertRedirect('/kelola-galeri');
        $this->assertTrue(session('admin_authenticated', false));

        // Akses panel galeri dengan session aktif
        $resAdmin = $this->withSession(['admin_authenticated' => true])->get('/kelola-galeri');
        $resAdmin->assertStatus(200);
        $resAdmin->assertSee('Daftar Album Kegiatan Galeri');
    }
}
