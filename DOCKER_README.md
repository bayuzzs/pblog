# Docker Setup untuk Pblog

Project Laravel ini sudah dikonfigurasi untuk berjalan di Docker dengan PHP 8.2.

## Persyaratan

-   Docker
-   Docker Compose
-   MySQL container yang sudah berjalan (container name: `mysql`)

## Struktur Docker

### Services

1. **app** - PHP 8.2-FPM container dengan Node.js 20.x untuk menjalankan aplikasi Laravel dan build assets
2. **nginx** - Web server untuk melayani aplikasi

### Network

-   `pblog-network` - Network internal untuk komunikasi app & nginx
-   `mysql_default` - Network eksternal yang terhubung ke MySQL container Anda

## Quick Start

### 1. Setup Otomatis (Recommended)

```bash
./docker-setup.sh
```

Script ini akan:

-   Copy `.env.docker` ke `.env` (jika belum ada)
-   Build dan start container
-   Install Composer dependencies
-   Install NPM dependencies
-   Build Tailwind CSS dan assets dengan Vite
-   Generate application key
-   Menjalankan database migrations
-   Clear dan cache configuration

### 1.1. Build Assets Only

Jika Anda hanya perlu rebuild Tailwind CSS dan assets:

```bash
./build-assets.sh
```

### 2. Manual Setup

#### Build dan Start Container

```bash
docker compose up -d --build
```

#### Install Dependencies

```bash
docker compose exec app composer install
docker compose exec app npm install
```

#### Build Assets (Tailwind CSS)

```bash
docker compose exec app npm run build
```

#### Generate Application Key

```bash
docker compose exec app php artisan key:generate
```

#### Run Migrations

```bash
docker compose exec app php artisan migrate
```

## URL Akses

-   **Application**: http://localhost:8000

## Perintah Docker yang Berguna

### Melihat Status Container

```bash
docker compose ps
```

### Melihat Log

```bash
# All services
docker compose logs -f

# App only
docker compose logs -f app

# Nginx only
docker compose logs -f nginx
```

### Mengakses Container Shell

```bash
# PHP container
docker compose exec app bash

# Nginx container
docker compose exec nginx sh
```

### Menjalankan Artisan Commands

```bash
docker compose exec app php artisan [command]

# Contoh:
docker compose exec app php artisan migrate
docker compose exec app php artisan db:seed
docker compose exec app php artisan cache:clear
docker compose exec app php artisan route:list
```

### Restart Container

```bash
# Restart semua
docker compose restart

# Restart service tertentu
docker compose restart app
docker compose restart nginx
```

### Stop Container

```bash
docker compose down
```

### Stop dan Hapus Volumes

```bash
docker compose down -v
```

## Konfigurasi Database

Project ini terhubung ke MySQL container yang sudah ada dengan konfigurasi:

-   **Host**: mysql (nama container)
-   **Port**: 3306
-   **Database**: pblog
-   **Username**: root
-   **Password**: root

Jika database credentials berbeda, update file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=pblog
DB_USERNAME=root
DB_PASSWORD=root
```

## File Konfigurasi

### docker-compose.yml

File utama konfigurasi Docker Compose yang mendefinisikan services dan networks.

### Dockerfile

Mendefinisikan image PHP 8.2-FPM dengan:

-   **Node.js 20.x** untuk build Tailwind CSS dan assets
-   **PHP Extensions**:
    -   pdo_mysql
    -   mbstring
    -   exif
    -   pcntl
    -   bcmath
    -   zip
    -   gd

### nginx/conf.d/default.conf

Konfigurasi Nginx untuk Laravel.

### php/php.ini

Custom PHP configuration:

-   post_max_size = 100M
-   upload_max_filesize = 100M

## Troubleshooting

### Port 8000 sudah digunakan

Edit `docker-compose.yml` dan ubah port nginx:

```yaml
ports:
    - "8001:80" # Ganti 8000 dengan port lain
```

### Database connection error

1. Pastikan MySQL container berjalan: `docker ps | grep mysql`
2. Cek network: `docker network inspect mysql_default`
3. Verifikasi credentials di file `.env`

### Permission errors

```bash
docker compose exec app chown -R www-data:www-data /var/www/html/storage
docker compose exec app chmod -R 755 /var/www/html/storage
```

### Clear all caches

```bash
docker compose exec app php artisan optimize:clear
```

## Frontend Development

### Build Assets untuk Production

```bash
docker compose exec app npm run build
```

### Development Mode (Hot Reload)

Untuk development dengan hot reload, jalankan Vite dev server:

```bash
docker compose exec app npm run dev
```

**Note**: Vite dev server akan berjalan di port 5173. Pastikan port ini tidak terblokir jika Anda memerlukan hot reload.

### Update Tailwind Configuration

Setelah mengubah file Tailwind config atau menambahkan class baru:

```bash
docker compose exec app npm run build
```

## Production Notes

Untuk production, edit `Dockerfile` dan ubah:

```dockerfile
# Hapus --no-dev untuk production
RUN composer install --optimize-autoloader --no-dev

# Set environment
ENV APP_ENV=production
ENV APP_DEBUG=false
```

Dan pastikan menggunakan `.env` production dengan:

-   `APP_DEBUG=false`
-   `APP_ENV=production`
-   Credentials database yang aman
-   `APP_KEY` yang di-generate dengan benar
