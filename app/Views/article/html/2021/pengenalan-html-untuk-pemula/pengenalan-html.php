<?php 

//define meta title
$title = 'Pengenalan HTML untuk Pemula - Hendev'; 

//define meta description
$description = 'HTML merupakan bahasa yang wajib dipelajari bagi para web developer, karena HTML merupakan sebuah unsur dasar (kerangka) dari pembangunan sebuah website statis maupun dinamis.'; 

//define meta canonical
$linkcanonical = '/pengenalan-html'; 

//define meta keyword
$keyword = 'HTML,belajar HTML,pengenalan HTML,fungsi HTML'; 
$tag = 'HTML'; 

//define meta time
$datePublished = '2021-02-01T08:16:00+00:00'; 
$dateModified = '2021-02-01T08:16:00+00:00'; 

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible" />

  <title><?=isset($title) ? $title : null;?></title>

  <?= $this->include('article/html/2021/pengenalan-html-untuk-pemula/meta.php') ?>

  <script type=application/ld+json>{"@context":"https://schema.org","@type":"NewsArticle","mainEntityOfPage":{"@type":"WebPage","@id":"/pengenalan-html"},"headline":"Pengenalan HTML untuk Pemula","image":["<?= base_url ('assets/img/upload/cover/html/3858-hh-729-dd-0284.jpg') ?>"],"datePublished":"2021-02-01T08:16:00+00:00","dateModified":" 2021-02-01T08:16:00+00:00","author":{"@type":"Person","name":"Agusti Mahendra"},"publisher":{"@type":"Organization","name":"Hendev","logo":{"@type":"ImageObject","url":"<?= base_url ('assets/img/apple-touch-icon.png') ?>"}}}</script>

  <?= $this->include('article/_core/_template/header.php') ?>

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">

          <ol itemscope='itemscope' itemtype='https://schema.org/BreadcrumbList'>
            <li itemprop='itemListElement' itemscope='itemscope' itemtype='https://schema.org/ListItem'><a href='/' itemprop='item' title='Home'><span itemprop='name'>Home</span></a><meta content='1' itemprop='position'/></li>
            <li itemprop='itemListElement' itemscope='itemscope' itemtype='https://schema.org/ListItem'><span itemprop='name'>Pengenalan HTML untuk Pemula</span><meta content='2' itemprop='position'/></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

   <!-- ======= Article Section ======= -->
    <section class="portfolio-details">
      <div class="container">
      <h1><strong>Pengenalan HTML untuk Pemula</strong></h1>
        <hr>
       <div class="tags">
        <a href="/category/html" rel="tags">HTML</a>
       </div>
        <div class="portfolio-description">
         <img alt="Pengenalan HTML untuk Pemula" src="<?= base_url ('assets/img/upload/cover/html/3858-hh-729-dd-0284.jpg') ?>">
          <p>
            <strong>Hypertext Markup Language (HTML)</strong> merupakan bahasa yang wajib dipelajari bagi para web developer baik pemula maupun yang telah berpengalaman. Kenapa .... ??
          </p>
          <p>
            Karena HTML merupakan sebuah unsur dasar <strong>(kerangka)</strong> dari pembangunan sebuah website statis maupun dinamis. Jadi sebagai seorang web developer kamu harus paham betul tentang HTML.
          </p>
          <p>
            Nah, saya sangat yakin kamu sudah pernah mendengar HTML sebelumnya bahkan dapat dikatakan sudah mahir. Namun tidak ada salahnya mempelajari kembali apa yang dahulu telah dipelajari.
          </p>
          <p>
            Pada artikel ini, kita akan membahas pengertian dari HTML dan sekilas tentang sejarah HTML maupun perkembangannya hingga saat ini.
          </p>
          <h2>Apa Itu HTML?</h2>
          <p>
            Menurut <a href="https://id.m.wikipedia.org/wiki/HTML" target="_blank">Wikipedia</a> Hypertext Markup Language <strong>(HTML)</strong> adalah sebuah bahasa markah (markup language) yang digunakan dalam pembuatan sebuah halaman website. Singkatnya, HTML adalah <strong>sebuah bahasa</strong> yang menggunakan <strong>markup</strong> &quot;<em>tag</em>&quot;.
          </p>
          <p>
            Tag dalam HTML akan menggambarkan sebuah elemen HTML yang ditulis menggunakan tanda kurung sudut, contohnya <code>&lt;img /&gt;</code>.
          </p>
          <p>
            Dalam membangun sebuah website, HTML tidak bekerja sendirian. Masih ada yang menjadi pelengkapnya seperti CSS maupun JavaScript.
          </p>
         <img alt="HTML,CSS, dan JavaScript" src="<?= base_url ('assets/img/upload/article/html/7326-hh-678-dd-2460.png') ?>">
          <p>
            CSS merupakan sebuah bahasa khusus yang digunakan untuk memperindah tampilan website kamu.
          </p>
          <p>
            Sedangkan, JavaScript memiliki peran membuat tampilan website menjadi hidup, seperti menentukan efek-efek yang akan kamu terapkan di website.
          </p>
          <p>
            Nah, karena kita hanya akan membahas HTML jadi kita skip dulu CSS dan JavaScriptnya. Dan saya anggap kamu sudah mengerti apa itu HTML. Selanjutnya agar lebih paham secara rinci, kita akan membahas sejarah HTML.
          </p>
          <h2>Sekilas Sejarah HTML</h2>
          <p>
            Pada tahun 1980 seoarang ahli fisika yang juga seorang kontraktor di CERN bernama <strong>Tim Berners-Lee</strong> mengusulkan ENQUIRE, sebuah sistem untuk ilmuwan CERN dalam membagi dokumen.
          </p>
          <p>
            Lalu di tahun 1989, Tim Berners-Lee memperkenalkan ide tentang hypertext berbasis internet. Tim Berners-Lee kemudian berkolaborasi bersama Robert Cailliau, akan tetapi proyek ini tidak resmi diadopsi oleh CERN.
          </p>
          <p>
            Di akhir tahun 1991 Tim Berners-Lee menerbitkan dokumen yang berjudul &quot;HTML Tags&quot;. Pada akhirnya proyek tersebut disebarkan ke dalam sebuah mailing list dan langsung menjadi perhatian berbagai ilmuwan komputer di seluruh penjuru dunia.
          </p>
          <p>
            Setelah membaca paragraf di atas, pasti sekarang kamu sudah tahu bagaimana proses munculnya HTML. Selanjutnya kita akan membahas apa saja kegunaan HTML.
          </p>
          <h2>Apa Kegunaan HTML?</h2>
          <p>
            HTML sangat berguna dalam proses pembangunan website. Selain sebagai pondasi utama, HTML pun dapat digunakan untuk berbagai hal:
            <ul>
            <li>Membuat heading</li>
            <li>Membuat list</li>
            <li>Membuat form</li>
            <li>Membuat tabel</li>
            <li>Membuat tombol</li>
            <li>Membungkus element</li>
            <li>Menampilkan gambar maupun video</li>
            <li>Membuat huruf tebal, miring, maupun garis bawah</li>
            <li>Dan masih banyak lagi yang akan kita pelajari di <a href="/">Hendev</a></li>
            </ul>
          </p>
          <p>
            Nah sampai di sini dulu artikel pertama Hendev. Jika kamu masih belum paham, kamu dapat menanyakannya di kolom komentar yaa.
          </p>
        </div>

      </div>
    </section><!-- End Article Section -->

    <?= $this->include('widget/share.php') ?>
    <?= $this->include('widget/dukungan.php') ?>
    <?= $this->include('widget/disqus.php') ?>
    <?= $this->include('widget/related_post_html.php') ?>
    <?= $this->include('widget/recent_post.php') ?>

  </main><!-- End #main -->

  <?= $this->include('article/_core/_template/footer.php') ?>