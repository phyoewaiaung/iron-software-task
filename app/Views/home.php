<!-- app/Views/home.php -->
<?= view('layout/header') ?>

<main>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-xl-6">
        <div class="hero-product-logo">

  <!-- ICON -->
  <div class="logo-text-wrap">
  <img src="/assets/img/iron-pdf.svg" alt="" class="logo-icon">
  <!-- TEXT -->
    <img src="/assets/img/iron.svg" alt="" >
    <img src="/assets/img/pdf.svg" alt="" >
    <span class="logo-for">for C++</span>
  </div>

</div>
        <div class="hero-text">
          <p class="hero-kicker"><?= esc($hero['kicker']) ?></p>

        <h1 class="hero-title">
          <?= esc($hero['titleLine1']) ?><br>
          <span><?= esc($hero['titleLine2']) ?></span>
        </h1>

        <p class="hero-subtitle"><?= esc($hero['subtitle']) ?></p>
        </div>
      </div>

      <div class="col-lg-6 text-end">
        <img src="/assets/img/cpp-ribbon.svg" class="img-fluid hero-art">
      </div>

    </div>
  </div>
</section>


<!-- cta ban -->
 <section class="cta-band">

  <!-- LEFT CONTENT -->
  <div class="container">
    <div class="cta-inner">

      <div>
        <h2 class="cta-title">
        <?= esc($gradientBand['title']) ?>
      </h2>

      <p class="cta-subtitle">
        <?= esc($gradientBand['subtitle']) ?>
      </p>
      </div>

      <!-- FORM -->
      <div class="cta-form">
        <input 
          type="email" 
          placeholder="<?= esc($gradientBand['emailPlaceholder']) ?>"
        >
        <button>
          <?= esc($gradientBand['buttonText']) ?> <i class="fas fa-caret-right"></i>
        </button>
      </div>

      <!-- NOTE -->
      <div class="cta-note">
        <span class="cta-badge"><span class="coming-soon-text"># Coming Soon</span></span>
        <span class="cta-text">
          IronPDF Beta Program also coming soon for 
          <b>Python</b> | <b>Node.js</b> | <b>Java</b>
        </span>
      </div>

    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="features-section">
  <div class="container text-center">

    <!-- TITLE + BADGE -->
    <div class="features-title-wrap">
      <h2 class="features-title">
        IronPDF for C++
      </h2>

      <img class="coming-badge" src="/assets/img/coming-soon-badge.svg" alt="" >
    </div>

    <!-- FEATURES ROW -->
    <div class="features-row">

      <div class="feature-item">
        <span class="hash">#</span>Generate PDFs from HTML in C++
      </div>

      <div class="feature-divider"></div>

      <div class="feature-item">
        <span class="hash">#</span>Combine, split, and modify PDFs quickly in C++
      </div>

      <div class="feature-divider"></div>

      <div class="feature-item">
        <span class="hash">#</span>Extract text and images from PDFs using C++
      </div>

    </div>

  </div>
</section>

<!-- DESCRIPTION -->
<section class="description-section">
  <div class="container">

    <div class="description-inner">

      <p>
        The new <strong>IronPDF library for C++</strong> will enhance the C++ developer's tool set with robust PDF generation and conversion capabilities. Developers will be able to generate new PDFs from HTML content (from text or from URL), as well as to combine, split, extract, and modify content from existing PDFs.
      </p>

      <p>
        <strong>IronPDF for C++</strong> will help developers create C++ applications that can do all of these PDF processing tasks and more, with speed, precision, control, and excellence.
      </p>

    </div>

  </div>
</section>

<!-- WHY -->
<section class="why-section">
  <div class="container">

    <div class="why-wrapper">

      <!-- LEFT IMAGE -->
      <div class="why-image-wrap">
        <img 
          src="/assets/img/htmltopdf.svg" 
          alt="HTML to PDF"
        >
      </div>

      <!-- RIGHT CONTENT -->
      <div class="why-content">

        <h2 class="why-title">
          Why make a <span>C++ PDF Library</span>
        </h2>

        <p class="why-text">
          C++ is one of the most popular, oldest, and important programming languages in use, being the language of choice in low-level systems and network programming and other domains where performance is critical.
        </p>

        <p class="why-text">
          The release of IronPDF for C++ will aid developers in building performant applications that can carry out PDF-related processing tasks
        </p>

      </div>

    </div>

  </div>
</section>

<!-- EARLY -->
<section class="early-section">
  <div class="container">

    <!-- HEADER -->
    <div class="early-header">
      <h2 class="early-title">
        Early Access to <span>C++ PDF Library</span>
      </h2>

      <p class="early-subtitle">
        Joining the early access program will allow you to collaborate closely with our engineering team. You will be playing a key role in the development process as you share your early experiences using the C++ PDF library before its official launch. Your continual feedback after we release the library will be immensely helpful as we release new features and improve on existing features.
      </p>
    </div>

    <!-- CARDS -->
    <div class="early-cards">

      <!-- JAVA -->
      <div class="early-card">
        <span class="badge released"># Released</span>

        <img 
          src="/assets/img/iron-pdf-java.svg" 
          alt="IronPDF for Java" 
          class="card-logo"
        >
      </div>

      <!-- PYTHON -->
      <div class="early-card">
        <span class="badge soon"># Coming Soon</span>

        <img 
          src="/assets/img/iron-pdf-python.svg" 
          alt="IronPDF for Python" 
          class="card-logo"
        >
      </div>

      <!-- NODEJS -->
      <div class="early-card">
        <span class="badge soon"># Coming Soon</span>

        <img 
          src="/assets/img/iron-pdf-nodejs.svg" 
          alt="IronPDF for NodeJS" 
          class="card-logo"
        >
      </div>

    </div>

  </div>
</section>

<!-- FINAL CTA -->
<section class="final-cta">
  <div class="container">

    <div class="final-inner">

      <h2 class="final-title">
        Sign up to our <span>Beta Program</span>
      </h2>

      <!-- FORM -->
      <div class="final-form">
        <input 
          type="email" 
          placeholder="Enter email address"
        >
        <button>
          Sign up now <i class="fas fa-caret-right"></i>
        </button>
      </div>

    </div>

  </div>
</section>

</main>

<?= view('layout/footer') ?>