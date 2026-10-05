# Amazing Facts Indonesia - Backend API Service

## Deskripsi Proyek

Selamat datang di repositori backend untuk aplikasi **Amazing Facts Indonesia**.
Backend Amazing Facts Indonesia merupakan layanan REST API yang dikembangkan menggunakan **Laravel 11** sebagai pendukung aplikasi mobile Flutter. Backend ini bertugas mengelola data pengguna, renungan harian, video pembelajaran, serta informasi kontak yang digunakan oleh aplikasi.

Proyek backend ini dikembangkan secara bertahap mulai dari Assignment for Learning (AFL) hingga Assignment of Learning Project (ALP). Selama proses pengembangan, backend terus disempurnakan agar komunikasi antara Flutter dan Laravel menjadi lebih stabil, mudah dikembangkan, dan mampu menampilkan data secara dinamis melalui REST API.

---

## Perkembangan Backend

Beberapa pengembangan yang telah dilakukan selama proses pengerjaan proyek antara lain:

- implementasi REST API menggunakan Laravel 11;
- integrasi backend dengan aplikasi Flutter menggunakan HTTP Request;
- penggunaan database SQLite sebagai penyimpanan data lokal selama proses pengembangan;
- konfigurasi CORS agar aplikasi Flutter dapat berkomunikasi dengan backend;
- penerapan autentikasi menggunakan Laravel Sanctum;
- pengelolaan data pengguna, renungan, video pembelajaran, dan kontak secara terpusat melalui API.

---

Backend ini dibangun menggunakan **Laravel 11** dengan pendekatan **API-First**, yang dirancang untuk melayani kebutuhan data aplikasi mobile Flutter. Backend berperan sebagai pusat pengelolaan data renungan, video, pengguna, dan kontak secara asinkron.

---

# Fitur Utama

Backend ini dikonfigurasi untuk menangani komunikasi dengan aplikasi Flutter secara aman dan efisien.

- ✅ **RESTful API**
  - Menyediakan endpoint berbasis JSON yang dapat dikonsumsi oleh aplikasi Flutter.

- ✅ **CORS Management**
  - Konfigurasi pada `bootstrap/app.php` untuk mengizinkan **Cross-Origin Resource Sharing (CORS)** sehingga aplikasi mobile dapat berkomunikasi dengan backend tanpa terkendala kebijakan keamanan.

- ✅ **Middleware Customization**
  - Penyesuaian `validateCsrfTokens` dan `statefulApi` untuk mempermudah proses autentikasi serta komunikasi data antara backend dan Flutter.

- ✅ **JSON-First Architecture**
  - Seluruh respons, termasuk error dan exception, dikembalikan dalam format JSON sehingga lebih mudah ditangani oleh aplikasi mobile.

---

# Instalasi

Ikuti langkah-langkah berikut untuk menjalankan backend di lingkungan lokal.

## 1. Clone Repository

```bash
git clone https://github.com/sitakristi/amazing_facts_backend.git
cd amazing_facts_backend
```

## 2. Install Dependency

Pastikan **PHP** dan **Composer** sudah terpasang, kemudian jalankan:

```bash
composer install
```

## 3. Setup Environment

Salin file environment dan buat application key.

```bash
cp .env.example .env
php artisan key:generate
```

> **Catatan**
>
> Jangan lupa menyesuaikan konfigurasi database pada file `.env`, seperti:
> - `DB_DATABASE`
> - `DB_USERNAME`
> - `DB_PASSWORD`

## 4. Menjalankan Server

Agar aplikasi Flutter pada perangkat fisik (misalnya iPhone) dapat mengakses backend melalui jaringan Wi-Fi yang sama, jalankan:

```bash
php artisan serve --host=192.168.18.36 --port=8080
```

> **Catatan**
>
> Ganti alamat IP di atas dengan alamat IP lokal laptop/PC Anda sesuai jaringan Wi-Fi yang sedang digunakan.

---

# Struktur Proyek

| Folder / File | Keterangan |
|---------------|------------|
| `app/` | Berisi Controller, Model, dan logika bisnis aplikasi. |
| `routes/api.php` | Seluruh endpoint API yang digunakan oleh aplikasi Flutter. |
| `bootstrap/app.php` | Konfigurasi middleware, CSRF, pengecualian route, serta pengaturan CORS. |

---

# Hasil Pengembangan ALP (Final Project)

Pada tahap Assignment of Learning Project (ALP), backend kembali disempurnakan berdasarkan hasil usability testing terhadap aplikasi mobile.

Beberapa penyempurnaan yang dilakukan meliputi:

- penambahan data video pembelajaran dari 2 video menjadi 9 video pada database;
- penyempurnaan endpoint video agar seluruh data dapat ditampilkan secara dinamis pada aplikasi Flutter;
- pengelolaan konten video dilakukan melalui database sehingga penambahan video berikutnya tidak memerlukan perubahan pada kode aplikasi;
- data renungan, kontak, dan informasi donasi tetap dikelola melalui REST API sehingga seluruh perubahan dapat langsung ditampilkan pada aplikasi.

Selanjutnya, koleksi video akan terus diperbarui mengikuti penambahan konten pada kanal YouTube Amazing Facts Indonesia. Dengan pendekatan ini, backend berfungsi sebagai pusat pengelolaan data sehingga aplikasi mobile cukup melakukan sinkronisasi melalui endpoint yang telah tersedia.

Selain penyempurnaan konten, struktur backend tetap mempertahankan konsep API-First menggunakan Laravel 11 dengan database SQLite sehingga proses pengembangan dan pemeliharaan aplikasi menjadi lebih sederhana serta mudah dikembangkan pada tahap berikutnya.

---

# Refleksi Pengembangan

Backend ini dikembangkan dengan mempertimbangkan **skalabilitas**, **kemudahan integrasi**, dan **stabilitas komunikasi** dengan aplikasi mobile Flutter.

Tantangan terbesar selama pengembangan adalah mengatasi pembatasan keamanan (*sandbox*) pada iOS terhadap koneksi HTTP lokal. Permasalahan tersebut berhasil diatasi melalui konfigurasi middleware dan CORS pada Laravel 11, sehingga komunikasi antara backend lokal dan aplikasi Flutter dapat berjalan dengan baik.

Dengan arsitektur ini, proses sinkronisasi data antara server dan perangkat mobile menjadi lebih stabil, responsif, dan mendukung pengembangan secara real-time.

Pada tahap Akhir Assignment of Learning Project (ALP), saya juga belajar bahwa backend tidak hanya berfungsi sebagai penyedia data, tetapi juga harus mudah dipelihara ketika konten aplikasi terus berkembang. Setelah mendapatkan masukan dari usability testing, saya melakukan penambahan data video pembelajaran pada database sehingga jumlah video meningkat dari dua menjadi sembilan video tanpa perlu mengubah logika aplikasi Flutter. Pengalaman ini memberikan pemahaman bahwa perancangan REST API dan struktur database yang baik akan memudahkan proses pembaruan konten serta menjaga aplikasi tetap fleksibel untuk pengembangan di masa mendatang.

---


# Terima Kasih

Terima kasih telah mengunjungi repositori ini.

Semoga proyek ini bermanfaat dan dapat menjadi referensi dalam pengembangan aplikasi berbasis **Laravel** dan **Flutter**.
