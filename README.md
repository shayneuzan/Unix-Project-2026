# Task Tracker — Todo App

A simple and easy to use web application that allows users to create and track tasks.

## Overview

The application contains two webpages:
- **Home** — view all tasks in a table
- **Create** — add a new task

## Tech Stack

| Layer     | Technology        |
|-----------|-------------------|
| Frontend  | HTML, Bootstrap 5 |
| Backend   | PHP 8.2           |
| Database  | MariaDB           |

## Infrastructure

The app is fully containerized using Docker with three containers:

- **Web server** — serves the PHP application (Apache)
- **Database server** — runs the MariaDB database
- **Cache server** — (coming soon)

