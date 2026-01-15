![poster - Copy](https://github.com/bayuzzs/pblog/assets/77946987/965d2dd1-5f88-4472-9dab-c9ef0d9af643)

# PBLog - Polibatam Logistik

[![Laravel](https://img.shields.io/badge/Laravel-10.x-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2-blue.svg)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

## 📖 Deskripsi / Description

**Bahasa Indonesia:**

PBLog (Polibatam Logistik) adalah aplikasi berbasis website untuk keperluan manajemen dalam kegiatan kepabeanan. Aplikasi ini merupakan pengembangan prototype inovatif dari aplikasi CEISA 4.0 pemerintah yang hanya dapat diakses oleh pengguna layanan kepabeanan. PBLog dibuat khusus untuk mahasiswa yang mempelajari proses logistik, terutama kepabeanan, agar dapat memahami dan mempraktikkan pengolahan dokumen kepabeanan secara bebas. Aplikasi ini fokus pada dokumen BC 2.0 atau proses impor.

**English:**

PBLog (Polibatam Logistik) is a website-based application for customs activities management. This application is an innovative prototype development of the government's CEISA 4.0 application, which can only be accessed by customs service users. PBLog is specifically designed for students studying logistics processes, especially customs, to help them understand and practice processing customs documents freely. This application focuses on BC 2.0 documents or import processes.

## 👥 Tim Pengembang / Development Team

| NIM | Nama | Role |
|-----|------|------|
| 100017 | Metta Santiputri | Project Manager |
| 4342301013 | Bayu Maulana | Team Leader |
| 4342301012 | Ibnu Hanif Salsabila | Developer |
| 4342301005 | Akbar Hafiz | Developer |
| 4342301001 | Rahel Simanjuntak | Developer |
| 4342301030 | Yocelyn Theona Setiawan | Developer |

## ✨ Fitur Fungsional / Functional Requirements

| ID | Fitur |
|----|-------|
| F001 | Pengimpor dapat mendaftar akun baru / Importers can register a new account |
| F002 | Pengimpor dan Petugas dapat login ke sistem / Importers and Officers can log into the system |
| F003 | Pengimpor dapat mengubah password setelah login / Importers can change password after login |
| F004 | Pengimpor dapat mengubah password sebelum login / Importers can change password before logging in |
| F005 | Pengimpor dapat mengelola dokumen barang tidak berwujud / Importers can manage intangible goods documents |
| F006 | Pengimpor dapat mengelola dokumen barang berwujud / Importers can manage tangible goods documents |
| F007 | Petugas dapat mengelola data master / Officers can manage master data |
| F008 | Petugas dapat melihat daftar akun pengimpor / Officers can view the list of importing accounts |
| F009 | Pengimpor dapat mencetak hasil dokumen PIB dalam format PDF / Importers can print PIB document results in PDF format |

## 🛠️ Teknologi yang Digunakan / Technology Stack

| Category | Technology |
|----------|------------|
| **Backend Framework** | Laravel 10 |
| **PHP Version** | PHP 8.2+ |
| **Frontend Engine** | Blade Templating |
| **Database** | MySQL 5.7+ |
| **CSS Framework** | Tailwind CSS |
| **UI Components** | PrelineUI |
| **Build Tool** | Vite |
| **Email Service** | Gmail SMTP |
| **Containerization** | Docker & Docker Compose |

## 📋 Kebutuhan Sistem / System Requirements

### Opsi 1: Container (Direkomendasikan) 🐳

**Pilih salah satu:**

#### Podman (Recommended)
-   Podman >= 4.0
-   Podman Compose (atau Docker Compose yang kompatibel dengan Podman)
-   MySQL Container (external network)

#### Docker (Alternatif)
-   Docker Engine
-   Docker Compose
-   MySQL Container (external network)

> **Catatan**: Podman adalah container engine yang rootless, daemonless, dan lebih aman. Podman fully compatible dengan Docker command line interface.

### Opsi 2: Instalasi Manual

-   PHP >= 8.2
-   Composer
-   Node.js >= 20.x
-   NPM atau Yarn
-   MySQL >= 5.7
-   Web Server (Apache/Nginx)

## 🚀 Cara Menjalankan Project / Quick Start Guide

### A. Menggunakan Podman (Recommended)

> **Info**: Panduan ini menggunakan Podman. Jika menggunakan Docker, ganti `podman` dengan `docker` dan `podman-compose` dengan `docker compose`.

#### 1️⃣ Clone Repository

```bash
git clone https://github.com/bayuzzs/pblog.git
cd pblog
```

#### 2️⃣ Setup Environment

```bash
# Copy file environment untuk Docker
cp .env.docker .env

# Sesuaikan kredensial database jika diperlukan
# DB_HOST=mysql
# DB_DATABASE=pblog
# DB_USERNAME=root
# DB_PASSWORD=root
```

#### 3️⃣ Jalankan Script Setup

```bash
# Berikan permission execute
chmod +x docker-setup.sh

# Jalankan setup otomatis dengan Podman
export DOCKER_CMD=podman
export COMPOSE_CMD="podman-compose"
./docker-setup.sh

# Atau jika menggunakan Docker:
# ./docker-setup.sh
```

Script ini akan:

-   ✅ Build containers (PHP 8.2 + Node.js 20.x)
-   ✅ Install dependencies Composer
-   ✅ Install dependencies NPM
-   ✅ Build Tailwind CSS dan assets
-   ✅ Generate application key
-   ✅ Jalankan database migrations dan seeders
-   ✅ Clear dan cache konfigurasi

#### 4️⃣ Akses Aplikasi

Buka browser dan akses:

-   **Aplikasi**: http://localhost:8000
-   **Login Pengimpor**: http://localhost:8000/pengimpor/login
-   **Login Petugas**: http://localhost:8000/petugas/login

### 🔑 Kredensial Default / Default Credentials

**Pengimpor (Importer)**

```
Username: pengimpor
Password: pengimpor
```

**Petugas (Officer)**

```
Username: petugas
Password: trpllpi
```

---

### B. Instalasi Manual (Tanpa Docker)

#### 1️⃣ Clone Repository

```bash
git clone https://github.com/bayuzzs/pblog.git
cd pblog
```

#### 2️⃣ Install Dependencies

```bash
# Install PHP dependencies dengan Composer
composer install

# Install NPM dependencies
npm install
```

#### 3️⃣ Setup Environment

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Konfigurasi database di file .env
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=pblog
# DB_USERNAME=root
# DB_PASSWORD=
```

#### 4️⃣ Setup Database

```bash
# Buat database 'pblog' terlebih dahulu di MySQL
# Kemudian jalankan migrations dan seeders
php artisan migrate:fresh --seed
```

#### 5️⃣ Build Assets

```bash
# Build untuk production
npm run build

# ATAU jalankan development server dengan hot reload
npm run dev
```

#### 6️⃣ Jalankan Aplikasi

```bash
# Start Laravel development server
php artisan serve
```

Akses di: http://localhost:8000

## 🐳 Container Commands (Perintah Podman)

> **Untuk Docker**: Ganti `podman` → `docker` dan `podman-compose` → `docker compose`

### Container Management

```bash
# Start containers (jalankan container)
podman-compose up -d
# atau gunakan podman compose (Podman 4.0+):
podman compose up -d

# Stop containers (hentikan container)
podman-compose down

# Restart containers (restart container)
podman-compose restart

# View container status (lihat status container)
podman-compose ps
# atau:
podman ps

# View logs (lihat logs)
podman-compose logs -f

# View specific service logs
podman-compose logs -f app

# Docker equivalent:
# docker compose up -d
# docker compose down
# docker compose ps
```

### Development Commands (Perintah Development)

```bash
# Akses PHP container shell
podman exec -it pblog-app bash
# atau dengan compose:
podman-compose exec app bash

# Jalankan Artisan commands
podman exec pblog-app php artisan [command]
# atau:
podman-compose exec app php artisan [command]

# Contoh: Clear cache
podman exec pblog-app php artisan cache:clear
podman exec pblog-app php artisan config:clear
podman exec pblog-app php artisan view:clear

# Rebuild Tailwind CSS dan assets
./build-assets.sh
# atau
podman exec pblog-app npm run build

# Install package baru
podman exec pblog-app composer require [package-name]
podman exec pblog-app npm install [package-name]

# Docker equivalent:
# docker compose exec app bash
# docker compose exec app php artisan [command]
```

### Database Commands (Perintah Database)

```bash
# Run migrations
podman exec pblog-app php artisan migrate
# atau:
podman-compose exec app php artisan migrate

# Fresh migration with seeders (PERINGATAN: hapus semua data!)
podman exec pblog-app php artisan migrate:fresh --seed

# Run seeders only
podman exec pblog-app php artisan db:seed

# Rollback migration
podman exec pblog-app php artisan migrate:rollback

# Check migration status
podman exec pblog-app php artisan migrate:status

# Docker equivalent:
# docker compose exec app php artisan migrate
# docker compose exec app php artisan migrate:fresh --seed
```

### Permission Fix (Perbaikan Permission)

```bash
# Fix storage dan cache permissions dengan Podman
podman exec pblog-app chown -R www-data:www-data storage bootstrap/cache
podman exec pblog-app chmod -R 775 storage bootstrap/cache

# Atau dari host (untuk Podman rootless - lebih disarankan):
chown -R $USER:$USER storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Docker equivalent:
# docker compose exec app chown -R www-data:www-data storage bootstrap/cache
# docker compose exec app chmod -R 775 storage bootstrap/cache
```

## 📁 Struktur Project / Project Structure

```
pblog/
├── app/                    # Application logic
│   ├── Http/              
│   │   ├── Controllers/   # Controllers
│   │   ├── Middleware/    # Middleware
│   │   └── Requests/      # Form requests
│   ├── Models/            # Eloquent models
│   │   ├── DataMaster/    # Master data models
│   │   └── DokumenImpor/  # Import document models
│   ├── Helpers/           # Helper functions
│   └── Enums/             # Enum classes
├── config/                # Configuration files
├── database/
│   ├── migrations/        # Database migrations
│   └── seeders/           # Database seeders
├── resources/
│   ├── css/               # CSS files
│   ├── js/                # JavaScript files
│   └── views/             # Blade templates
├── routes/                # Route definitions
│   ├── web.php           # Web routes
│   ├── api.php           # API routes
│   ├── pengimpor.php     # Importer routes
│   └── petugas.php       # Officer routes
├── public/                # Public assets
├── storage/               # Storage files
├── tests/                 # Test files
├── docker-compose.yml     # Docker configuration
├── Dockerfile             # Docker image definition
├── .env.example          # Environment example
└── README.md              # This file
```

## 🎯 Fitur Aplikasi / Application Features

### Untuk Pengimpor (Importer Features)

-   ✅ Registrasi akun baru / Register new account
-   ✅ Login ke sistem / Login to system
-   ✅ Ubah password / Change password
-   ✅ Reset password / Password reset
-   ✅ Kelola dokumen barang tidak berwujud / Manage intangible goods documents
-   ✅ Kelola dokumen barang berwujud / Manage tangible goods documents
-   ✅ Cetak dokumen PIB dalam format PDF / Print PIB documents in PDF format

### Untuk Petugas (Officer Features)

-   ✅ Login ke sistem / Login to system
-   ✅ Kelola data master / Manage master data
-   ✅ Lihat daftar akun pengimpor / View importer accounts list
-   ✅ Approve/review dokumen impor / Approve/review import documents

## 📊 Data Master yang Tersedia / Available Master Data

Setelah menjalankan seeders, database akan berisi:

-   **Negara (Countries)** - Data negara untuk transaksi impor
-   **Valuta (Currencies)** - Data mata uang
-   **Jenis Kemasan (Packaging Types)** - Tipe-tipe kemasan
-   **Satuan Barang (Item Units)** - Satuan untuk barang
-   **Jenis Dokumen (Document Types)** - Jenis dokumen impor
-   **Kantor (Offices)** - Data kantor bea cukai
-   **Pelabuhan (Ports)** - Data pelabuhan
-   **HS Codes** - Kode Harmonized System untuk klasifikasi barang
-   **Default Users** - 1 akun Pengimpor dan 1 akun Petugas

## ❗ Troubleshooting (Pemecahan Masalah)

### Install Podman dan Podman Compose

```bash
# Ubuntu/Debian
sudo apt update
sudo apt install podman

# Fedora/RHEL/CentOS
sudo dnf install podman

# Install podman-compose
pip3 install podman-compose
# atau gunakan podman compose (built-in di Podman 4.0+)

# Cek versi Podman
podman --version

# Cek instalasi
podman info
```

### Port Sudah Digunakan / Port Already in Use

Jika port 8000 sudah digunakan, edit `docker-compose.yml`:

```yaml
services:
    nginx:
        ports:
            - "8001:80" # Ubah 8000 ke port lain
```

### Podman Specific Issues

```bash
# List running containers
podman ps -a

# Check Podman networks
podman network ls
podman network inspect mysql_default

# Jika network tidak ada, buat manual:
podman network create mysql_default

# Restart Podman service (jika menggunakan systemd)
systemctl --user restart podman

# Generate systemd service untuk auto-start
podman generate systemd --new --files --name pblog-app
systemctl --user enable --now container-pblog-app.service

# Check logs untuk specific container
podman logs pblog-app
podman logs pblog-nginx
```

### Error Koneksi Database / Database Connection Error

```bash
# 1. Pastikan MySQL container berjalan
podman ps | grep mysql

# 2. Periksa kredensial database di .env
cat .env | grep DB_

# 3. Verifikasi network configuration
podman network ls
podman network inspect mysql_default

# 4. Test koneksi database dari container
podman exec pblog-app php artisan migrate:status

# 5. Pastikan container bisa akses MySQL container/host
# Jika MySQL di container lain di network mysql_default:
# DB_HOST=mysql (nama service)

# Jika MySQL di host:
# Linux: DB_HOST=host.containers.internal
# atau cek gateway: podman inspect pblog-app | grep Gateway

# Test koneksi manual
podman exec pblog-app ping -c 2 mysql
podman exec pblog-app nc -zv mysql 3306

# Docker equivalent:
# docker ps | grep mysql
# docker network inspect mysql_default
```

### Error Permission

```bash
# Dengan Podman rootless, lebih baik fix dari host
chown -R $USER:$USER storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Atau dari dalam container
podman exec pblog-app chown -R www-data:www-data storage bootstrap/cache
podman exec pblog-app chmod -R 775 storage bootstrap/cache

# Jika menggunakan SELinux (Fedora/RHEL)
chcon -Rt svirt_sandbox_file_t storage bootstrap/cache
# atau disable SELinux enforcement:
sudo setenforce 0

# Docker equivalent:
# docker compose exec app chown -R www-data:www-data storage bootstrap/cache
```

### Assets Tidak Loading / Assets Not Loading

```bash
# Clear semua cache dengan Podman
podman exec pblog-app php artisan optimize:clear
podman exec pblog-app php artisan view:clear
podman exec pblog-app php artisan config:clear
podman exec pblog-app php artisan cache:clear

# Rebuild assets
podman exec pblog-app npm run build

# Atau gunakan script
./build-assets.sh

# Docker equivalent:
# docker compose exec app php artisan optimize:clear
# docker compose exec app npm run build
```

### Composer Install Error

```bash
# Clear composer cache dengan Podman
podman exec pblog-app composer clear-cache

# Install ulang dependencies
podman exec pblog-app composer install --no-cache

# Jika masih error, coba update
podman exec pblog-app composer update

# Atau dari host (jika ada Composer lokal)
composer install

# Docker equivalent:
# docker compose exec app composer clear-cache
```

### NPM Install Error

```bash
# Clear npm cache dengan Podman
podman exec pblog-app npm cache clean --force

# Install ulang
podman exec pblog-app npm install

# Atau hapus node_modules dan install ulang
podman exec pblog-app rm -rf node_modules package-lock.json
podman exec pblog-app npm install

# Atau dari host (jika ada Node.js lokal)
npm install

# Docker equivalent:
# docker compose exec app npm install
```

### Migration Error

```bash
# Reset database dengan Podman (HATI-HATI: menghapus semua data!)
podman exec pblog-app php artisan migrate:fresh

# Atau dengan seeder
podman exec pblog-app php artisan migrate:fresh --seed

# Jika error specific migration
podman exec pblog-app php artisan migrate:rollback --step=1
podman exec pblog-app php artisan migrate

# Check migration status
podman exec pblog-app php artisan migrate:status

# Docker equivalent:
# docker compose exec app php artisan migrate:fresh --seed
```

### Container Tidak Bisa Start

```bash
# Dengan Podman:
# Stop semua container
podman-compose down
# atau: podman stop pblog-app pblog-nginx

# Hapus container
podman rm -f pblog-app pblog-nginx

# Hapus images (optional)
podman rmi pblog-app pblog-nginx

# Hapus volumes (optional, HATI-HATI!)
podman volume prune

# Rebuild dari awal
podman-compose build --no-cache
podman-compose up -d

# Atau reset total:
podman system reset  # HATI-HATI: hapus semua!

# Jalankan setup ulang
export DOCKER_CMD=podman
export COMPOSE_CMD="podman-compose"
./docker-setup.sh

# Docker equivalent:
# docker compose down -v
# docker compose build --no-cache
# docker compose up -d
```

## 📚 Dokumentasi Tambahan / Additional Documentation

-   📖 **Panduan Docker Lengkap / Full Docker Guide**: [DOCKER_README.md](DOCKER_README.md)
-   🚀 **Referensi Cepat / Quick Reference**: [DOCKER_QUICK_REF.md](DOCKER_QUICK_REF.md)
-   🔑 **Kredensial Login / Login Credentials**: [CREDENTIALS.md](CREDENTIALS.md)

## 🤝 Contributing (Kontribusi)

Kami menerima kontribusi dari siapa saja! Ikuti langkah berikut:

1. Fork repository ini
2. Buat feature branch (`git checkout -b feature/FiturBaru`)
3. Commit perubahan (`git commit -m 'Menambahkan fitur baru'`)
4. Push ke branch (`git push origin feature/FiturBaru`)
5. Buat Pull Request

### Guidelines

-   Gunakan conventional commits
-   Tulis kode yang clean dan terdokumentasi
-   Test fitur sebelum submit PR
-   Update dokumentasi jika diperlukan

## 📝 License (Lisensi)

Project ini dikembangkan untuk tujuan edukasi di Politeknik Negeri Batam.

## 📞 Support & Contact

Untuk pertanyaan dan issues:

-   🐛 **Report Bug**: Buat issue di repository ini
-   💡 **Feature Request**: Buat issue dengan label "enhancement"
-   📧 **Email**: Hubungi tim pengembang
-   🌐 **Repository**: [https://github.com/bayuzzs/pblog](https://github.com/bayuzzs/pblog)

## 🙏 Acknowledgments

-   Politeknik Negeri Batam
-   Dosen Pembimbing
-   Tim Pengembang PBLog
-   Docker & Podman Community
-   Laravel & Open Source Community

---

**Dikembangkan dengan ❤️ oleh Mahasiswa Polibatam / Developed with ❤️ by Polibatam Students**

© 2024 PBLog - Polibatam Logistik. All rights reserved.
