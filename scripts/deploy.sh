#!/bin/bash

echo "Deploying todo app"

echo "Pulling latest version from git"
git pull

echo "Running docker Compose"
docker compose up --build

echo "Deployment Finished!"
