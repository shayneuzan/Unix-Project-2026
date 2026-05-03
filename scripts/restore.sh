#!/bin/bash

LATEST=$(ls -Art | tail -n 1)

echo "Restoring from $LATEST"

docker exec -i todo-db mariadb -u root -prootpassword todo_db < "$LATEST"

echo "Database successfully restored!"
