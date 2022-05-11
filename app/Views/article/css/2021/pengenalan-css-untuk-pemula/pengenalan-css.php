<?php 

//define meta title
$title = 'Pengenalan CSS untuk Pemula - Hendev'; 

//define meta description
$description = 'Cascading Style Sheets (CSS) merupakan unsur kedua setelah HTML yang wajib kamu pelajari sebagai seorang web developer.'; 

//define meta canonical
$linkcanonical = '/pengenalan-css'; 

//define meta keyword
$keyword = 'CSS,belajar CSS,pengenalan CSS,fungsi CSS'; 
$tag = 'CSS'; 

//define meta time
$datePublished = '2021-02-03T13:19:42+00:00'; 
$dateModified = '2021-02-03T13:19:42+00:00'; 

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible" />

  <title><?=isset($title) ? $title : null;?></title>

  <?= $this->include('article/css/2021/pengenalan-css-untuk-pemula/meta.php') ?>

  <script type=application/ld+json>{"@context":"https://schema.org","@type":"NewsArticle","mainEntityOfPage":{"@type":"WebPage","@id":"/pengenalan-css"},"headline":"Pengenalan CSS untuk Pemula","image":["<?= base_url ('assets/img/upload/cover/css/8382-hh-728-dd-7182.png') ?>"],"datePublished":"2021-02-03T13:19:42+00:00","dateModified":" 2021-02-03T13:19:42+00:00","author":{"@type":"Person","name":"Agusti Mahendra"},"publisher":{"@type":"Organization","name":"Hendev","logo":{"@type":"ImageObject","url":"<?= base_url ('assets/img/apple-touch-icon.png') ?>"}}}</script>

  <?= $this->include('article/_core/_template/header.php') ?>

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">

          <ol itemscope='itemscope' itemtype='https://schema.org/BreadcrumbList'>
            <li itemprop='itemListElement' itemscope='itemscope' itemtype='https://schema.org/ListItem'><a href='/' itemprop='item' title='Home'><span itemprop='name'>Home</span></a><meta content='1' itemprop='position'/></li>
            <li itemprop='itemListElement' itemscope='itemscope' itemtype='https://schema.org/ListItem'><span itemprop='name'>Pengenalan CSS untuk Pemula</span><meta content='2' itemprop='position'/></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

   <!-- ======= Article Section ======= -->
    <section class="portfolio-details">
      <div class="container">
      <h1><strong>Pengenalan CSS untuk Pemula</strong></h1>
        <hr>
       <div class="tags">
        <a href="/category/css" rel="tags">CSS</a>
       </div>
        <div class="portfolio-description">
         <img alt="Pengenalan CSS untuk Pemula" src="<?= base_url ('assets/img/upload/cover/css/8382-hh-728-dd-7182.png') ?>">
          <p>
            <strong>Cascading Style Sheets (CSS)</strong> merupakan unsur kedua setelah <a href="/category/html">HTML</a> yang wajib kamu pelajari sebagai seorang web developer.
          </p>
          <p>
            CSS sendiri sangatlah penting bagi kamu sebagai web developer, karena dengan menggunakan CSS kamu bisa membuat:
            <ul>
            <li>Template untuk blog</li>
            <li>Membuat animasi tanpa JavaScript</li>
            <li>Membuat <em>landing page</em> yang unik</li>
            <li>Dan masih banyak lagi yang akan kita pelajari di <a href="/">Hendev</a></li>
            </ul>
          </p>
          <p>
            Nah, pada artikel ini kita akan membahas pengertian dari CSS dan sejarah perkembangan CSS hingga sekarang.
          </p>
          <h2>Apa itu CSS?</h2>
          <p>
            Menurut <a href="https://id.m.wikipedia.org/wiki/Cascading_Style_Sheets" target="_blank">Wikipedia</a> CSS <strong><em>bukanlah</em></strong> suatu bahasa pemrograman. CSS merupakan aturan untuk mengatur komponen dalam web agar terstruktur dan seragam.
          </p>
          <p>
            Singkatnya CSS <em>(Cascading Style Sheets)</em> adalah unsur untuk mempercantik suatu halaman web. Mengapa demikian?
          </p>
          <p>
            Karena dengan CSS kamu dapat mengatur layout, font, maupun warna dalam halaman web tersebut.
          </p>
          <h2>Perkembangan CSS</h2>
         <img alt="Håkon Wium Lie" src="<?= base_url ('assets/img/upload/article/css/3479-hh-305-dd-9743.jpg') ?>">
          <p>
            Cascading Style Sheets pertama kali dikenalkan oleh <strong>Håkon Wium Lie</strong> pada tahun 1994. Dan pada tanggal 17 Desember 1996, <a href="https://en.m.wikipedia.org/wiki/World_Wide_Web_Consortium" target="_blank">World Wide Web Consortium (W3C)</a> menjadikan CSS sebagai bahasa standar dalam pembuatan dokumen web.
          </p>
          <p>
            Setelah menjadi bahasa standar CSS mengalami perkembangan pesat, sampai saat ini terdapat tiga versi yaitu: CSS 1, CSS 2, dan CSS 3.
            <ul>
            <li>CSS 1: versi awal CSS (17 Desember 1996)</li>
            <li>CSS 2: versi ke-2 (Mei 1998)</li>
            <li>CSS 2.1: pengembangan CSS 2 (7 Juni 2011)</li>
            <li>CSS 3: (2012)</li>
            <li>CSS 4: versi terbaru ini masih dalam pengembangan</li>
            </ul>
          </p>
          <p>
            Dalam setiap versi tersebut tentu ada penambahan maupun pengurangan fitur.
          </p>
          <h2>Apa Saja Kegunaan CSS?</h2>
          <p>
            Fungsi utama CSS ialah untuk mengatur layout agar tidak berantakan. Namun CSS juga memiliki fungsi lainnya yaitu:
            <ul>
            <li>Mengatur background</li>
            <li>Membuat warna pada teks</li>
            <li>Membuat efek smooth</li>
            <li>Serta masih banyak lagi yang lainnya</li>
            </ul>
          </p>
          <p>
            Nah sampai di sini dulu artikel tentang pengertian dan sejarah CSS. Jika kamu masih belum paham, kamu dapat menanyakannya di kolom komentar yaa.
          </p>
        </div>

      </div>
    </section><!-- End Article Section -->

    <?= $this->include('widget/share.php') ?>
    <?= $this->include('widget/dukungan.php') ?>
    <?= $this->include('widget/disqus.php') ?>
    <?= $this->include('widget/related_post_css.php') ?>
    <?= $this->include('widget/recent_post.php') ?>

  </main><!-- End #main -->

  <?= $this->include('article/_core/_template/footer.php') ?>