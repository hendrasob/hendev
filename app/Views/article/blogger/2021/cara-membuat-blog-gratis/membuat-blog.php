<?php 

//define meta title
$title = 'Cara Membuat Blog Gratis - Hendev'; 

//define meta description
$description = '...'; 

//define meta canonical
$linkcanonical = '/cara-membuat-blog-gratis'; 

//define meta keyword
$keyword = 'JavaScript,belajar JavaScript,pengenalan JavaScript,fungsi JavaScript'; 
$tag = 'Blogger'; 

//define meta time
$datePublished = '2021-02-04T10:32:22+00:00'; 
$dateModified = '2021-02-04T10:32:22+00:00'; 

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible" />

  <title><?=isset($title) ? $title : null;?></title>

  <?= $this->include('article/blogger/2021/cara-membuat-blog-gratis/meta.php') ?>

  <script type=application/ld+json>{"@context":"https://schema.org","@type":"NewsArticle","mainEntityOfPage":{"@type":"WebPage","@id":"/pengenalan-javascript"},"headline":"Pengenalan JavaScript untuk Pemula","image":["<?= base_url ('assets/img/upload/cover/blogger/7322-hh-488-dd-7932.png') ?>"],"datePublished":"2021-02-04T10:32:22+00:00","dateModified":" 2021-02-04T10:32:22+00:00","author":{"@type":"Person","name":"Agusti Mahendra"},"publisher":{"@type":"Organization","name":"Hendev","logo":{"@type":"ImageObject","url":"<?= base_url ('assets/img/apple-touch-icon.png') ?>"}}}</script>

  <?= $this->include('article/_core/_template/header.php') ?>

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">

          <ol itemscope='itemscope' itemtype='https://schema.org/BreadcrumbList'>
            <li itemprop='itemListElement' itemscope='itemscope' itemtype='https://schema.org/ListItem'><a href='/' itemprop='item' title='Home'><span itemprop='name'>Home</span></a><meta content='1' itemprop='position'/></li>
            <li itemprop='itemListElement' itemscope='itemscope' itemtype='https://schema.org/ListItem'><span itemprop='name'>Cara Membuat Blog Gratis</span><meta content='2' itemprop='position'/></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

   <!-- ======= Article Section ======= -->
    <section class="portfolio-details">
      <div class="container">
      <h1><strong>Cara Membuat Blog Gratis</strong></h1>
        <hr>
       <div class="tags">
        <a href="/category/blogger" rel="tags">Blogger</a>
       </div>
        <div class="portfolio-description">
         <img alt="Pengenalan JavaScript untuk Pemula" src="<?= base_url ('assets/img/upload/cover/blogger/7322-hh-488-dd-7932.png') ?>">
          <p>
            <strong>JavaScript (JS)</strong> merupakan bahasa pemrograman yang wajib kamu pelajari sebagai seorang web developer.
          </p>
        </div>

      </div>
    </section><!-- End Article Section -->

    <?= $this->include('widget/share.php') ?>
    <?= $this->include('widget/dukungan.php') ?>
    <?= $this->include('widget/disqus.php') ?>
    <?= $this->include('widget/related_post_blogger.php') ?>
    <?= $this->include('widget/recent_post.php') ?>

  </main><!-- End #main -->

  <?= $this->include('article/_core/_template/footer.php') ?>