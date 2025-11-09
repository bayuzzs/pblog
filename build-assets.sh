#!/bin/bash

echo "=== Building Tailwind CSS and Assets ==="
echo ""

# Build assets
echo "Building assets with Vite..."
docker compose exec app npm run build

echo ""
echo "✓ Assets built successfully!"
echo ""
echo "Built files location:"
echo "  - public/build/assets/"
echo "  - public/build/manifest.json"
