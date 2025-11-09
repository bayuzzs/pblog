# Quick Reference - Docker Commands

## Start/Stop Container

```bash
docker compose up -d              # Start containers
docker compose down               # Stop containers
docker compose restart            # Restart containers
docker compose ps                 # Check status
```

## Setup & Build

```bash
./docker-setup.sh                 # Full setup (first time)
./build-assets.sh                 # Rebuild Tailwind CSS only
```

## Development

```bash
# PHP/Laravel Commands
docker compose exec app php artisan migrate
docker compose exec app php artisan db:seed
docker compose exec app php artisan cache:clear
docker compose exec app composer install
docker compose exec app composer update

# NPM/Assets Commands
docker compose exec app npm install
docker compose exec app npm run build        # Production build
docker compose exec app npm run dev          # Development mode

# Access Shell
docker compose exec app bash                 # PHP container
docker compose exec nginx sh                 # Nginx container
```

## Logs

```bash
docker compose logs -f                       # All logs
docker compose logs -f app                   # App logs only
docker compose logs -f nginx                 # Nginx logs only
```

## Database

```bash
# Run migrations
docker compose exec app php artisan migrate

# Fresh migration with seeders (WARNING: drops all tables)
docker compose exec app php artisan migrate:fresh --seed

# Run seeders only
docker compose exec app php artisan db:seed

# Run specific seeder
docker compose exec app php artisan db:seed --class=DatabaseSeeder
```

## Seeded Data

After running seeders, you'll have:

-   **Data Master**: Negara, Valuta, Jenis Kemasan, Satuan Barang, Jenis Dokumen, Kantor, Pelabuhan, HS Codes
-   **Users**: 1 Pengimpor, 1 Petugas (check `database/seeders/DatabaseSeeder.php` for credentials)

## Clear Cache

```bash
docker compose exec app php artisan optimize:clear
docker compose exec app php artisan config:clear
docker compose exec app php artisan cache:clear
docker compose exec app php artisan view:clear
docker compose exec app php artisan route:clear
```

## Application URL

http://localhost:8000

## Common Issues

### Port already in use

Edit `docker-compose.yml` and change port:

```yaml
ports:
    - "8001:80" # Change 8000 to another port
```

### Rebuild after Dockerfile changes

```bash
docker compose down
docker compose up -d --build
```

### Permission errors

```bash
docker compose exec app chown -R www-data:www-data storage bootstrap/cache
docker compose exec app chmod -R 775 storage bootstrap/cache
```
