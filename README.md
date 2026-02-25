# CET Portal (Periyar University Ph.D Entrance)

This project is a PHP-based portal used to publish department-wise exam access links for the Ph.D Common Entrance Test.

## Project files

- `index.php`: home page that lists departments by session.
- `arts.php`: department page with time-gated exam link + password check.
- `data.json`, `data1.json`, `data2.json`: department/session data.
- `Dockerfile`, `docker-compose.yml`: containerized local run setup.

## Prerequisites

Choose one method:

- Docker Desktop (recommended), or
- PHP 8.2+ installed locally.

## How to run

### Method 1: Docker (recommended)

From the project root:

```bash
docker compose up --build
```

Open:

- `http://localhost`

To stop:

```bash
docker compose down
```

### Method 2: PHP built-in server

From the project root:

```bash
php -S localhost:8000
```

Open:

- `http://localhost:8000`

## How to update exam links/departments

Edit `data.json`, `data1.json`, and `data2.json`.

Each department entry uses this structure:

```json
{
  "val": "Department Name",
  "lcount": ["https://your-exam-link"],
  "psk": "PASSWORD",
  "time": {
    "from": "10:00",
    "to": "11:30",
    "session": "1",
    "noon": "am"
  }
}
```

After editing JSON files, refresh the site in the browser to see changes.
