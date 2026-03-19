# Iron Software Assignment — IronPDF for C++ Landing Page (CodeIgniter 4)

This project implements the provided Figma design as a responsive landing page inside a **CodeIgniter 4** app.

## Key points

- **Tech**: CodeIgniter 4 (PHP), Bootstrap 5 (CDN), modular custom CSS
- **Data source**: `app/Data/content.json` (simulated dynamic content)
- **Entry route**: `GET /` → `app/Controllers/Home.php` → `app/Views/home.php`
- **Assets**: `public/assets/css/style.css`

## Run locally

### Prerequisites

- PHP 8.2+ (tested with PHP 8.4)
- Composer

### Install dependencies

```bash
composer install
```

### Start dev server

```bash
php spark serve
```

Then open:

- `http://localhost:8080/`

## Where to edit content

- **Text/content**: `app/Data/content.json`
- **Layout/markup**: `app/Views/home.php`
- **Styling**: `public/assets/css/style.css`

## QA checklist

See `QA-CHECKLIST.md`.
# iron-software-task
