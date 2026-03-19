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

        <div class="coming-soon-section">
            <div class="upper-section">
               <div class="ironpdf-title-container">
                 <h2 class="ironpdf-title">IronPDF for C++</h2>
                 <img class="coming-soon-badge" src="/assets/img/coming-soon-badge.svg" width="81.47" height="81.47" alt="Coming Soon" loading="eager" decoding="async">
               </div>
               <div class="features-list">
                 <div class="feature-item">
                   <span class="feature-hash">#</span>
                   <span class="feature-text">Generate PDFs from HTML in C++</span>
                 </div>
                 <div class="feature-divider"></div>
                 <div class="feature-item">
                   <span class="feature-hash">#</span>
                   <span class="feature-text">Combine, split, and modify PDFs quickly in C++</span>
                 </div>
                 <div class="feature-divider"></div>
                 <div class="feature-item">
                   <span class="feature-hash">#</span>
                   <span class="feature-text">Extract text and images from PDFs using C++</span>
                 </div>
               </div>
            </div>
            <div class="description-section">
              <div class="description-text">
                <p>The new <span class="highlight-medium">IronPDF library for C++</span> will enhance the C++ developer's tool set with robust PDF generation and conversion capabilities. Developers will be able to generate new PDFs from HTML content (from text or from URL), as well as to combine, split, extract, and modify content from existing PDFs.</p>
                <p><span class="highlight-medium">IronPDF for C++</span> <span class="highlight-light">will help developers create C++ applications that can do all of these PDF processing tasks and more, with speed, precision, control, and excellence.</span></p>
              </div>
            </div>
            <div class="why-section">
              <img class="htmltopdf-img" src="/assets/img/htmltopdf.svg" width="270.17" height="179.51" alt="HTML to PDF" loading="eager" decoding="async">
              <div class="why-content">
                <h2 class="why-title">Why make a <span class="cpp-highlight">C++ PDF Library</span></h2>
                <p class="why-description">C++ is one of the most popular, oldest, and important programming languages in use, being the language of choice in low-level systems and network programming and other domains where performance is critical.</p>
                <p class="why-description">The release of IronPDF for C++ will aid developers in building performant applications that can carry out PDF-related processing tasks</p>
              </div>
            </div>
            <div class="early-access-section">
              <div class="early-access-content">
                <h2 class="early-access-title">Early Access to <span class="cpp-highlight-small">C++ PDF Library</span></h2>
                <p class="early-access-description">Joining the early access program will allow you to collaborate closely with our engineering team. You will be playing a key role in the development process as you share your early experiences using the C++ PDF library before its official launch. Your continual feedback after we release the library will be immensely helpful as we release new features and improve on existing features.</p>
              </div>
              <div class="cards-container">
                <div class="released-card">
                  <div class="released-badge"># Released</div>
                  <img class="java-logo" src="/assets/img/iron-pdf-java.svg" width="112.02" height="39.47" alt="IronPDF Java" loading="eager" decoding="async">
                </div>
                <div class="coming-soon-card">
                  <div class="coming-soon-badge"># Coming Soon</div>
                  <img class="python-logo" src="/assets/img/iron-pdf-python.svg" width="112.02" height="42.19" alt="IronPDF Python" loading="eager" decoding="async">
                </div>
                <div class="coming-soon-card">
                  <div class="coming-soon-badge"># Coming Soon</div>
                  <img class="nodejs-logo" src="/assets/img/iron-pdf-nodejs.svg" width="112.02" height="42.19" alt="IronPDF Node.js" loading="eager" decoding="async">
                </div>
              </div>
            </div>
            <div class="beta-program-section">
              <div class="beta-program-content">
                <h2 class="beta-program-title">Sign up to our <span class="beta-highlight">Beta Program</span></h2>
                <form class="beta-program-form" action="#" method="post">
                  <input class="beta-program-input" type="email" name="email" placeholder="Enter your email" autocomplete="email">
                  <button class="beta-program-button" type="button">Sign up now <i class="fas fa-caret-right"></i></button>
                </form>
              </div>
            </div>
        </div>
</main>

</body>
</html>