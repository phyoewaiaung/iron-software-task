<!-- app/Views/layout/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- SEO Meta Tags -->
<title><?= esc($meta['title']) ?></title>
<meta name="description" content="<?= esc($meta['description']) ?>">
<meta name="keywords" content="IronPDF, C++, PDF library, PDF generation, C++ PDF, document processing">
<meta name="author" content="Iron Software">
<meta name="robots" content="index, follow">

<!-- Open Graph Meta -->
<meta property="og:title" content="<?= esc($meta['title']) ?>">
<meta property="og:description" content="<?= esc($meta['description']) ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="/assets/img/logo.svg">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= esc($meta['title']) ?>">
<meta name="twitter:description" content="<?= esc($meta['description']) ?>">

<!-- Preload critical resources -->
<link rel="preload" href="/assets/css/fonts/gotham-book.otf" as="font" type="font/otf" crossorigin>
<link rel="preload" href="/assets/img/logo.svg" as="image">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/base.css">
<link rel="stylesheet" href="/assets/css/hamburger.css">
</head>

<body>

<header class="site-header">
  <div class="container mw-100 d-flex site-header-inner">

    <!-- LOGO -->
    <a href="/" class="navbar-brand me-4" aria-label="Iron Software Home">
      <img src="/assets/img/logo.svg" alt="Iron Software Logo">
    </a>

    <!-- DESKTOP NAV -->
    <nav class="site-nav d-flex align-items-center">
      <a href="#" class="nav-link has-caret">PRODUCTS</a>
      <a href="#" class="nav-link">ABOUT US</a>
      <a href="#" class="nav-link">CAREER</a>
    </nav>

    <!-- HAMBURGER BUTTON (mobile only) -->
    <button
      class="hamburger"
      aria-label="Toggle navigation"
      aria-expanded="false"
      aria-controls="mobileNav"
    >
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </button>

  </div>
</header>

<!-- MOBILE NAV DRAWER -->
<div class="mobile-nav" id="mobileNav" role="dialog" aria-modal="true" aria-label="Navigation">

  <!-- Backdrop -->
  <div class="mobile-nav__backdrop" id="mobileNavBackdrop"></div>

  <!-- Slide-in panel -->
  <nav class="mobile-nav__panel">
    <a href="#" class="nav-link has-caret">PRODUCTS</a>
    <a href="#" class="nav-link">ABOUT US</a>
    <a href="#" class="nav-link">CAREER</a>
  </nav>

</div>

<script src="/assets/js/main.js" defer></script>