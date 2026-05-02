#!/bin/bash

cd ~/projects/todo-unix-project/database

mkdir -p backups

BACKUP_FILE="backups/backup_$(date +%Y%m%d_%H%M%S).sql"

docker exec todo-db mariadb-dump -u root -prootpassword -x todo_db > "$BACKUP_FILE"
echo "Backup created: $BACKUP_FILE"
