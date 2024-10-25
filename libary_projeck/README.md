
# Library Management System

Proyek ini adalah sistem manajemen perpustakaan sederhana yang dibangun menggunakan frontend React dan backend Laravel API. Sistem ini memungkinkan pengguna untuk menambahkan, memperbarui, dan menghapus buku di perpustakaan.

## Teknologi yang Digunakan

- **Frontend**: React.js
- **Backend**: Laravel
- **Database**: MySQL (atau sesuai konfigurasi yang Anda gunakan)

## Prasyarat

Pastikan Anda sudah menginstal perangkat lunak berikut:
- [Node.js dan npm](https://nodejs.org/) - untuk mengelola dependencies frontend.
- [Composer](https://getcomposer.org/) - untuk mengelola dependencies backend Laravel.
- [MySQL](https://www.mysql.com/) - sebagai database.

## Setup Proyek

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek di perangkat Anda.

### 1. Clone Repository

Clone repository ini dari GitHub:

```bash
git clone https://github.com/username/repository-name.git
cd repository-name
```

### 2. Install Dependencies

#### Backend (Laravel)
Pindah ke direktori backend (misalnya, `backend` atau root proyek) dan install dependencies Laravel:

```bash
composer install
```

#### Frontend (React)
Jika frontend berada dalam direktori terpisah, pindah ke direktori frontend dan install dependencies menggunakan perintah berikut:

```bash
npm install
```

### 3. Konfigurasi Lingkungan

#### Backend (Laravel)
Buat file `.env` dari template `.env.example`:

```bash
cp .env.example .env
```

Konfigurasikan file `.env` untuk menghubungkan database Anda, sesuaikan bagian berikut:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=user_database
DB_PASSWORD=password_database
```

Generate key aplikasi Laravel:

```bash
php artisan key:generate
```

Jalankan migrasi untuk membuat tabel di database:

```bash
php artisan migrate
```

#### Frontend (React)
Tidak ada konfigurasi khusus untuk frontend kecuali jika diperlukan (sesuaikan jika ada kebutuhan konfigurasi).

### 4. Menjalankan Proyek

#### Backend (Laravel)
Jalankan server Laravel:

```bash
php artisan serve
```

Backend akan berjalan di `http://localhost:8000`.

#### Frontend (React)
Jalankan development server untuk React:

```bash
npm start
```

Frontend akan berjalan di `http://localhost:3000`.
