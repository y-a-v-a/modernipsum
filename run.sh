#!/bin/bash

# Build the Docker image
echo "Building Modernipsum Docker image..."
docker build -t modernipsum .

# Run the container with volume mounting for development
echo "Starting Modernipsum container..."
docker run -d \
  --name modernipsum-app \
  -p 8080:80 \
  -v "$(pwd)":/var/www/html \
  modernipsum

echo "Modernipsum is now running at http://localhost:8080"
echo ""
echo "To stop the container, run: docker stop modernipsum-app"
echo "To remove the container, run: docker rm modernipsum-app"