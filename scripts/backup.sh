#!/bin/bash

cd ~/projects/todo-unix-project/database

mkdir -p backups

BACKUP_FILE="backups/$(date +%b_%d_%Y)_backup.sql"

docker exec todo-db mariadb-dump -u root -prootpassword -x todo_db > "$BACKUP_FILE"
echo "Backup created: $BACKUP_FILE"
