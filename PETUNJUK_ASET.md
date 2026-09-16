# Panduan Pengisian Aset, Gambar, dan File PDF

Dokumen ini berisi petunjuk dan perintah (*command*) untuk menambahkan aset Anda sendiri (file PDF pedoman, foto galeri, logo universitas, dll).

---

## 1. File PDF Pedoman

File PDF pedoman diletakkan pada direktori:
`storage/app/public/pedoman/`

Daftar file yang telah dikonfigurasikan di `config/pedoman.php`:
1. `sk-rektor-satgas-ppks.pdf` (Surat Keputusan Rektor)
2. `sop-penanganan-laporan.pdf` (SOP Alur Penanganan)
3. `sop-pendampingan-korban.pdf` (SOP Pendampingan Korban)
4. `buku-saku-pencegahan-ks.pdf` (Buku Saku Pencegahan)
5. `kode-etik-interaksi-akademik.pdf` (Kode Etik Civitas Akademika)

### Command untuk Menyalin File PDF Anda (Windows PowerShell / CMD):
```powershell
# Contoh menyalin file PDF dari folder download Anda ke storage pedoman:
copy "C:\Users\user\Downloads\sk-rektor-resmi.pdf" "storage\app\public\pedoman\sk-rektor-satgas-ppks.pdf"
copy "C:\Users\user\Downloads\sop-laporan.pdf" "storage\app\public\pedoman\sop-penanganan-laporan.pdf"
copy "C:\Users\user\Downloads\sop-pendampingan.pdf" "storage\app\public\pedoman\sop-pendampingan-korban.pdf"
copy "C:\Users\user\Downloads\buku-saku.pdf" "storage\app\public\pedoman\buku-saku-pencegahan-ks.pdf"
copy "C:\Users\user\Downloads\kode-etik.pdf" "storage\app\public\pedoman\kode-etik-interaksi-akademik.pdf"
```

> **Catatan**: Jika ingin menambah dokumen baru atau mengubah judul/kategori, cukup edit file `config/pedoman.php` sesuai kebutuhan Anda tanpa perlu migrasi database.

---

## 2. Foto Galeri Kegiatan

### Cara 1: Lewat Form Web (Sangat Direkomendasikan)
Anda dapat mengunggah foto langsung melalui halaman pengelola:
- Buka browser: `http://localhost:8000/kelola-galeri`
- Masukkan password admin (sesuai di file `.env`, default: `SatgasPPKS#2026`)
- Klik **Tambah Kegiatan Baru**
- Masukkan judul, tanggal, deskripsi singkat, pilih **Foto Utama**, dan pilih **Multiple Foto Dokumentasi** (bisa pilih banyak file sekaligus).
- Sistem otomatis menyimpan foto ke `storage/app/public/galeri/` dan mencatatnya ke database.

### Cara 2: Menyalin File Foto Manual (Jika diperlukan)
```powershell
# Folder tujuan foto galeri:
storage\app\public\galeri\
```

---

## 3. Menghubungkan Storage (Symlink)
Jika symlink storage belum aktif atau dipindahkan ke server hosting:
```powershell
php artisan storage:link
```

---

## 4. Logo dan Ikon Website
Logo default menggunakan SVG vector interaktif yang tajam di semua resolusi layar.
Jika Anda memiliki file logo kampus atau logo Satgas PPKS (PNG/JPG/SVG):
```powershell
# Letakkan di folder public/images/
copy "C:\Users\user\Pictures\logo-kampus.png" "public\images\logo-kampus.png"
```
Lalu panggil di Blade view menggunakan `asset('images/logo-kampus.png')`.
