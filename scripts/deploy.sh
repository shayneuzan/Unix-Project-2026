#!/bin/bash

echo "Deploying todo app"

echo "Pulling latest version from git"
git pull

echo "creating .env"
cp .env.example .env

echo "Running docker Compose"
docker compose up --build

echo "Deployment Finished!"
