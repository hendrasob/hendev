  <?= $this->include('article/_core/_meta/meta.php') ?>

  <?= $this->include('article/_core/_style/style.php') ?>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header">

      <div class="logo me-auto">
         <a href="/"><img src="<?= base_url ('assets/img/header.png') ?>" alt=""></a>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li><a href="/" itemprop="url" title="Home"><span itemprop='name'>Home</span></a></li>
          <li><a href="/tutorial" itemprop="url" title="Tutorial"><span itemprop='name'>Tutorial</span></a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/contact">Contact Us</a></li>
          <li><a href="/disclaimer">Disclaimer</a></li>
          <li><a href="/privacy-policy">Privacy Policy</a></li>
        </ul>
      </nav><!-- .nav-menu -->      
 
  </header><!-- End Header -->