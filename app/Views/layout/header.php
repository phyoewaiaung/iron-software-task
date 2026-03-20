<!-- app/Views/layout/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= esc($meta['title']) ?></title>
<meta name="description" content="<?= esc($meta['description']) ?>">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/base.css">
</head>

<body>

<header class="site-header">
  <div class="container mw-100 d-flex align-items-center">

    <!-- LOGO -->
    <a href="/" class="navbar-brand me-4">
      <img src="/assets/img/logo.svg" alt="Iron Software">
    </a>

    <!-- NAV -->
    <nav class="site-nav d-flex align-items-center">
      <a href="#" class="nav-link has-caret">PRODUCTS</a>
      <a href="#" class="nav-link">ABOUT US</a>
      <a href="#" class="nav-link">CAREER</a>
    </nav>

  </div>
</header>