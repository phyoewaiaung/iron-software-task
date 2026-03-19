<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($meta['title'] ?? 'IronPDF') ?></title>
    <meta name="description" content="<?= esc($meta['description'] ?? '') ?>">

    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/layout.css">
    <link rel="stylesheet" href="/assets/css/components.css">
    <link rel="stylesheet" href="/assets/css/sections.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<a class="visually-hidden-focusable skip-link" href="#main">Skip to content</a>

<header class="site-header">
    <div class="site-header-inner">
        <nav class="navbar navbar-dark" aria-label="Primary">
            <a class="navbar-brand d-flex align-items-center py-1" href="#" aria-label="Iron Software">
                <img
                    src="/assets/img/logo.svg"
                    width="115"
                    height="15"
                    alt="IRONSOFTWARE"
                    loading="eager"
                    decoding="async"
                >
            </a>

            <ul class="navbar-nav site-nav flex-row align-items-center" aria-label="Primary navigation links">
                <?php foreach (($nav['links'] ?? []) as $link): ?>
                    <?php $isProducts = strtoupper($link['label'] ?? '') === 'PRODUCTS'; ?>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase<?= $isProducts ? ' has-caret' : '' ?>" href="<?= esc($link['href'] ?? '#') ?>">
                            <?= esc($link['label'] ?? '') ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>

<main id="main">
    <section class="hero" aria-label="Hero">
        <div class="hero-inner">
                    <div class="hero-content">
                        <div class="hero-logo">
                            <img class="hero-logo-front" src="/assets/img/iron-pdf.svg" width="233" height="40" alt="IronPDF" loading="eager" decoding="async">
                            <img class="hero-logo-iron" src="/assets/img/iron.svg" width="61.34" height="17.75" alt="IRON" loading="eager" decoding="async">
                            <img class="hero-logo-pdf" src="/assets/img/pdf.svg" width="47.48" height="17.14" alt="PDF" loading="eager" decoding="async">
                            <span class="hero-logo-text">for C++</span>
                        </div>

                        <div class="hero-heading">
                            <p class="hero-kicker mb-0"><?= esc($hero['kicker'] ?? '') ?></p>

                            <h1 class="hero-title mb-0">
                                <span class="hero-title-top"><?= esc($hero['titleLine1'] ?? '') ?></span>
                                <span class="hero-title-bottom"><?= esc($hero['titleLine2'] ?? '') ?></span>
                            </h1>

                            <p class="hero-subtitle mb-0"><?= esc($hero['subtitle'] ?? '') ?></p>
                        </div>
                    </div>
                </div>

            <img class="hero-art" src="/assets/img/cpp-ribbon.svg" width="804.87" height="710" alt="" loading="eager" decoding="async">
        </div>
    </section>
    
    <section class="gradient-band" aria-label="Gradient band">
        <!-- <div class="gradient-band-content"> -->
            <!-- </div> -->
            <!-- <div class="gradient-band-also">
                <p class="gradient-band-also-text"><?= esc($gradientBand['alsoComingSoon'] ?? '') ?></p>
            </div> -->
        </section>
        <div class="gradient-form">
            <div>
                <h2 class="gradient-band-title"><?= esc($gradientBand['title'] ?? '') ?></h2>
                <p class="gradient-band-subtitle"><?= esc($gradientBand['subtitle'] ?? '') ?></p>
            </div>
            <form class="gradient-band-form" action="#" method="post">
                <input class="gradient-band-input" type="email" name="email" placeholder="<?= esc($gradientBand['emailPlaceholder'] ?? '') ?>" autocomplete="email">
                <button class="gradient-band-button" type="button"><?= esc($gradientBand['buttonText'] ?? '') ?> <i class="fas fa-caret-right"></i></button>
            </form>
        </div>
        <div class="gradient-band-also">
            <div class="gradient-band-also-text"><span class="coming-soon-text"># Coming Soon</span></div>
            <div class="gradient-band-products-text">IronPDF Beta Program also coming soon for <span class="product-highlight">Python</span> | <span class="product-highlight">Node.js</span> | <span class="product-highlight">Java</span></div>
        </div>
</main>

</body>
</html>