    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(238,94,32, .2)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(238,94,32, .3)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#ee5e20">
      </g>
    </svg>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Dapatkan Notifikasi Terupdate</h4>
            <p>Ikuti Hendev untuk mendapatkan pemberitahuan artikel terbaru kami melalui email.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Hendev</h3>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Bantuan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/about">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/contact">Bantuan &amp; Kontak</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/privacy-policy">Kebijakan Privasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/disclaimer">Penolakan</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        DMCA
     </div>
      <div class="credits">
        &copy; copyright <?= date('Y') ?> - <a href="/">Hendev</a> | All right reserved.
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url ('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url ('assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
  <script src="<?= base_url ('assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?= base_url ('assets/vendor/jquery-sticky/jquery.sticky.js') ?>"></script>
  <script src="<?= base_url ('assets/vendor/venobox/venobox.min.js') ?>"></script>
  <script src="<?= base_url ('assets/vendor/prism/prism16.js') ?>"></script>
  <script src="<?= base_url ('assets/vendor/waypoints/jquery.waypoints.min.js') ?>"></script>
  <script src="<?= base_url ('assets/vendor/counterup/counterup.min.js') ?>"></script>
  <script src="<?= base_url ('assets/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
  <script src="<?= base_url ('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  <script src="<?= base_url ('assets/vendor/aos/aos.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url ('assets/js/main.js') ?>"></script>

</body>

</html>