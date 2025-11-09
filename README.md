![poster - Copy](https://github.com/bayuzzs/pblog/assets/77946987/965d2dd1-5f88-4472-9dab-c9ef0d9af643)

# Polibatam Logistik

## Description

<p>PBLog (Polibatam Logistik) is a website-based application program that is used for management purposes in customs activities using the website and is found in the Customs Portal application system which is a computer-based application program that is used for management purposes in customs activities using the website. This application covers business processes that focus on BC 2.0 documents or focus on import processes.</p>
<p>This PBLog application is an innovative prototype development of the government's CEISA 4.0 application, which can only be accessed by customs service users, so that students who are studying logistics processes, especially customs, do not have access to this application. On the other hand, this application will really help students, especially to understand the customs process and practice processing customs documents. Therefore, it is deemed important to provide facilities in the form of applications that provide the same functionality as the CEISA 4.0 application but can be accessed or used freely by students.</p>

## Teams

<p>
100017 Metta Santiputri - Project Manager<br>
4342301013 Bayu Maulana - Leader<br>
4342301012 Ibnu Hanif Salsabila<br>
4342301005 Akbar Hafiz<br>
4342301001 Rahel Simanjuntak<br>
4342301030 Yocelyn Theona Setiawan
</p>

## Functional Requirements

<p>
F001 Importers can register a new account<br>
F002 Importers and Officers can log into the system<br>
F003 Importers can change password after login<br>
F004 Importers can change the password before logging in<br>
F005 Importers can manage intangible goods documents<br>
F006 Importers can manage tangible goods documents<br>
F007 Officers can manage master data<br>
F008 Officers can view the list of importing accounts<br>
F009 Importers can print PIB document results in PDF format
</p>

## Technology Stacks Used

-   **Laravel 10** - Backend Framework
-   **Blade** - Frontend Templating Engine
-   **MySQL** - Database Management System
-   **Tailwind CSS** - CSS Framework
-   **PrelineUI** - TailwindCSS Component Library
-   **Vite** - Frontend Build Tool
-   **Gmail** - SMTP Service

## Requirements

### Option 1: Docker (Recommended) 🐳

-   Docker
-   Docker Compose
-   MySQL Container (external)

### Option 2: Manual Installation

-   PHP >= 8.2
-   Composer
-   Node.js >= 20.x
-   NPM
-   MySQL >= 5.7

## Quick Start with Docker 🚀

### 1. Clone Repository

```bash
git clone https://github.com/bayuzzs/pblog.git
cd pblog
```

### 2. Setup Environment

```bash
# Copy environment file
cp .env.docker .env

# Update database credentials in .env if needed
# DB_HOST=mysql
# DB_DATABASE=pblog
# DB_USERNAME=root
# DB_PASSWORD=root
```

### 3. Run Setup Script

```bash
chmod +x docker-setup.sh
./docker-setup.sh
```

This script will:

-   Build Docker containers (PHP 8.2 + Node.js 20.x)
-   Install Composer dependencies
-   Install NPM dependencies
-   Build Tailwind CSS and assets
-   Generate application key
-   Run database migrations and seeders
-   Clear and cache configurations

### 4. Access Application

Open your browser and navigate to:

-   **Application**: http://localhost:8000
-   **Pengimpor Login**: http://localhost:8000/pengimpor/login
-   **Petugas Login**: http://localhost:8000/petugas/login

### Default Credentials

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

## Manual Installation 💻

### 1. Clone Repository

```bash
git clone https://github.com/bayuzzs/pblog.git
cd pblog
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install NPM dependencies
npm install
```

### 3. Setup Environment

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure your database in .env
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=pblog
# DB_USERNAME=root
# DB_PASSWORD=
```

### 4. Database Setup

```bash
# Run migrations and seeders
php artisan migrate:fresh --seed
```

### 5. Build Assets

```bash
# Build for production
npm run build

# Or run development server with hot reload
npm run dev
```

### 6. Run Application

```bash
# Start Laravel development server
php artisan serve
```

Access at: http://localhost:8000

## Docker Commands

### Container Management

```bash
# Start containers
docker compose up -d

# Stop containers
docker compose down

# Restart containers
docker compose restart

# View container status
docker compose ps

# View logs
docker compose logs -f
```

### Development Commands

```bash
# Access PHP container shell
docker compose exec app bash

# Run Artisan commands
docker compose exec app php artisan [command]

# Rebuild Tailwind CSS
./build-assets.sh
# or
docker compose exec app npm run build

# Clear caches
docker compose exec app php artisan optimize:clear
```

### Database Commands

```bash
# Run migrations
docker compose exec app php artisan migrate

# Fresh migration with seeders (WARNING: drops all data!)
docker compose exec app php artisan migrate:fresh --seed

# Run seeders only
docker compose exec app php artisan db:seed
```

## Project Structure

```
pblog/
├── app/                    # Application logic
│   ├── Http/              # Controllers, Middleware, Requests
│   ├── Models/            # Eloquent models
│   └── Helpers/           # Helper functions
├── database/
│   ├── migrations/        # Database migrations
│   └── seeders/           # Database seeders
├── resources/
│   ├── css/               # CSS files
│   ├── js/                # JavaScript files
│   └── views/             # Blade templates
├── routes/                # Route definitions
├── public/                # Public assets
├── docker-compose.yml     # Docker configuration
├── Dockerfile             # Docker image definition
└── README.md              # This file
```

## Features

### For Importers (Pengimpor)

-   ✅ Register new account
-   ✅ Login to system
-   ✅ Change password
-   ✅ Password reset
-   ✅ Manage intangible goods documents
-   ✅ Manage tangible goods documents
-   ✅ Print PIB documents in PDF format

### For Officers (Petugas)

-   ✅ Login to system
-   ✅ Manage master data
-   ✅ View importer accounts list
-   ✅ Approve/review import documents

## Database Seeded Data

After running seeders, the database will contain:

-   **Countries (Negara)** - Country data for import transactions
-   **Currencies (Valuta)** - Currency data
-   **Packaging Types (Jenis Kemasan)** - Types of packaging
-   **Item Units (Satuan Barang)** - Units for goods
-   **Document Types (Jenis Dokumen)** - Import document types
-   **Offices (Kantor)** - Customs office data
-   **Ports (Pelabuhan)** - Port data
-   **HS Codes** - Harmonized System codes for goods classification
-   **Default Users** - 1 Importer and 1 Officer account

## Troubleshooting

### Port Already in Use

If port 8000 is already in use, edit `docker-compose.yml`:

```yaml
services:
    nginx:
        ports:
            - "8001:80" # Change 8000 to another port
```

### Database Connection Error

1. Ensure MySQL container is running: `docker ps | grep mysql`
2. Check database credentials in `.env`
3. Verify network configuration in `docker-compose.yml`

### Permission Errors

```bash
docker compose exec app chown -R www-data:www-data storage bootstrap/cache
docker compose exec app chmod -R 775 storage bootstrap/cache
```

### Assets Not Loading

```bash
# Clear caches
docker compose exec app php artisan view:clear
docker compose exec app php artisan config:clear

# Rebuild assets
docker compose exec app npm run build
```

## Documentation

-   📚 **Full Docker Guide**: [DOCKER_README.md](DOCKER_README.md)
-   🚀 **Quick Reference**: [DOCKER_QUICK_REF.md](DOCKER_QUICK_REF.md)
-   🔑 **Login Credentials**: [CREDENTIALS.md](CREDENTIALS.md)

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is developed for educational purposes at Politeknik Negeri Batam.

## Support

For issues and questions:

-   Create an issue in this repository
-   Contact the development team

---

**Developed with ❤️ by Polibatam Students**
