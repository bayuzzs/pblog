#!/bin/bash

# Support for both Docker and Podman
DOCKER_CMD="${DOCKER_CMD:-docker}"
COMPOSE_CMD="${COMPOSE_CMD:-docker compose}"

echo "=== Starting Pblog Container Setup ==="
echo "Using: $COMPOSE_CMD"

# Copy .env.docker to .env if .env doesn't exist
if [ ! -f .env ]; then
    echo "Creating .env file from .env.docker..."
    cp .env.docker .env
else
    echo ".env file already exists, skipping..."
fi

# Build and start containers
echo "Building and starting containers..."
$COMPOSE_CMD up -d --build

# Wait for containers to be ready
echo "Waiting for containers to start..."
sleep 5

# Install composer dependencies
echo "Installing Composer dependencies..."
$COMPOSE_CMD exec app composer install

# Install npm dependencies and build assets
echo "Installing NPM dependencies..."
$COMPOSE_CMD exec app npm install

echo "Building Tailwind CSS and assets..."
$COMPOSE_CMD exec app npm run build

# Generate application key if not set
echo "Generating application key..."
$COMPOSE_CMD exec app php artisan key:generate

# Run migrations
echo "Running database migrations and seeders..."
$COMPOSE_CMD exec app php artisan migrate:fresh --seed

# Clear and cache config
echo "Clearing and caching configuration..."
$COMPOSE_CMD exec app php artisan config:clear
$COMPOSE_CMD exec app php artisan cache:clear
$COMPOSE_CMD exec app php artisan view:clear
$COMPOSE_CMD exec app php artisan route:clear

echo ""
echo "=== Setup Complete! ==="
echo "Application is running at: http://localhost:8000"
echo ""
echo "Useful commands:"
echo "  docker compose ps              - View running containers"
echo "  docker compose logs -f app     - View application logs"
echo "  docker compose exec app bash   - Access container shell"
echo "  docker compose down            - Stop containers"
echo "  docker compose restart         - Restart containers"
