<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hendev - Media Pembelajaran Pemrograman</title>
  <meta content='Hendev - Media Pembelajaran Pemrograman' property='og:title' />
  <link rel="canonical" href="/" />
  <meta content="/" property="og:url" />
  <meta content='Hendev - Media Pembelajaran Pemrograman' property='og:image:alt' />
  <meta content='website' property='og:type' />
  <meta content='Hendev - Media Pembelajaran Pemrograman' name='twitter:title' />
  <meta content='Hendev - Media Pembelajaran Pemrograman' name='twitter:image:alt' />
  <meta content='Blog tutorial coding, Front-End, Back-End, dan Full-Stack yang mudah dipahami pemula' name='description' />
  <meta content='Blog tutorial coding, Front-End, Back-End, dan Full-Stack yang mudah dipahami pemula' property='og:description' />
  <meta content='Blog tutorial coding, Front-End, Back-End, dan Full-Stack yang mudah dipahami pemula' name='twitter:description' />
  <meta name="keywords" content="Tempat belajar pemrograman,frontend developers,backend developers,full stack developers,belajar html,belajar css,belajar javascript,belajar php,belajar nodejs,belajar database,belajar framework">

<?= $this->include('_template/header.php') ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('<?= base_url ('assets/img/slide/5368-hendev-main-slider.png') ?>');">
            <div class="carousel-container">
              <div class="slide">
                <img src="<?= base_url ('assets/img/slide/hh-dd/25/1873-hh-637-dd-0283.png') ?>" alt="" class="animate__animated animate__fadeInLeftBig">
              </div>
              <div class="slide2">
                <img src="<?= base_url ('assets/img/slide/hh-dd/25/8437-hh-522-dd-0964.png') ?>" alt="" class="animate__animated animate__fadeInRightBig">
              </div>
              <div class="slide3">
                <img src="<?= base_url ('assets/img/slide/hh-dd/25/5201-hh-666-dd-7189.png') ?>" alt="" class="animate__animated animate__fadeInDown">
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('<?= base_url ('assets/img/slide/7266-hendev-main-slider.jpg') ?>');">
            <div class="carousel-container">
              <div class="slide4">
                <img src="<?= base_url ('assets/img/slide/hh-dd/26/7482-hh-739-dd-0183.png') ?>" alt="" class="animate__animated animate__fadeInRightBig">
              <div class="slide5">
                <img src="<?= base_url ('assets/img/slide/hh-dd/26/6382-hh-288-dd-0305.png') ?>" alt="" class="animate__animated animate__bounce">
              </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('<?= base_url ('assets/img/slide/7282-hendev-main-slider.svg') ?>');">
            <div class="carousel-container">
              <div class="slide6">
                <img src="<?= base_url ('assets/img/slide/hh-dd/27/6382-hh-727-dd-0282.png') ?>" alt="" class="animate__animated animate__fadeInUp">
            </div>
              <div class="slide7">
                <img src="<?= base_url ('assets/img/slide/hh-dd/27/6382-hh-526-dd-0901.png') ?>" alt="" class="animate__animated animate__fadeInDown">
              </div>
              <div class="slide8">
                <img src="<?= base_url ('assets/img/slide/hh-dd/27/6382-hh-919-dd-1256.png') ?>" alt="" class="animate__animated animate__fadeIn">
              </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= Our Blog Section ======= -->
<div class="post-outer">
    <article class="post">
        <div class="card-post">
            <div class="card-thumbnail">
                <a href="#">
                    <img alt="Pengertian Microsoft Power Point serta Fungsinya" class="card-thumbnail" src="<?= base_url ('assets/img/upload/article/2021/20210129_210325.jpg') ?>" />
                </a>
            </div>
            <div class="card-title">
                <a href="#" title="Pengertian Microsoft Power Point serta Fungsinya">
                    <h3>Pengertian Microsoft Power Point serta Fungsinya</h3>
                </a>
            </div>
            <div class="card-meta">
                <div class="card-avatar">
                    <img alt="Hendra" class="card-avatar" draggable="false" src="<?= base_url ('assets/img/avatar/author/72×72/hendra.jpg') ?>" />
                </div>
               <div class="card-name">
                    Hendra
                </div>
                <div class="card-date">
                    <time datetime="Januari 22, 2021" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: #616161; display: inline; margin: 0px; padding: 0px;">Jumat, 22 Januari 2021</time>
                </div>
                <div class="card-label">
                    <a href="https://ilmuduniax.blogspot.com/search/label/TIK?max-results=12" rel="tag" title="TIK">TIK</a>
                </div>
            </div>
        </div>
    </article>
</div>

<div class="post-outer2">
    <article class="post">
        <div class="card-post">
            <div class="card-thumbnail">
                <a href="/cara-membuat-blog-gratis">
                    <img alt="Cara Membuat Blog Gratis" class="card-thumbnail" src="<?= base_url ('assets/img/upload/cover/blogger/7322-hh-488-dd-7932.png') ?>" />
                </a>
            </div>
            <div class="card-title">
                <a href="/cara-membuat-blog-gratis" title="Cara Membuat Blog Gratis">
                    <h3>Cara Membuat Blog Gratis</h3>
                </a>
            </div>
            <div class="card-meta">
                <div class="card-avatar">
                    <img alt="Hendra" class="card-avatar" draggable="false" src="<?= base_url ('assets/img/avatar/author/72×72/hendra.jpg') ?>" />
                </div>
               <div class="card-name">
                    Hendra
                </div>
                <div class="card-date">
                    <time datetime="Mei 20, 2021" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: #616161; display: inline; margin: 0px; padding: 0px;">Kamis, 20 Mei 2021</time>
                </div>
                <div class="card-label">
                    <a href="/category/blogger" rel="tag" title="Blogger">Blogger</a>
                </div>
            </div>
        </div>
    </article>
</div>

<div class="post-outer3">
    <article class="post">
        <div class="card-post">
            <div class="card-thumbnail">
                <a href="/text-editor-linux">
                    <img alt="5 Text Editor Terbaik Untuk Linux" class="card-thumbnail" src="<?= base_url ('assets/img/upload/cover/text_editor/6329-hh-739-dd-6283.png') ?>" />
                </a>
            </div>
            <div class="card-title">
                <a href="/text-editor-linux" title="5 Text Editor Terbaik Untuk Linux">
                    <h3>5 Text Editor Terbaik Untuk Linux</h3>
                </a>
            </div>
            <div class="card-meta">
                <div class="card-avatar">
                    <img alt="Hendra" class="card-avatar" draggable="false" src="<?= base_url ('assets/img/avatar/author/72×72/hendra.jpg') ?>" />
                </div>
               <div class="card-name">
                    Hendra
                </div>
                <div class="card-date">
                    <time datetime="Februari 14, 2021" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: #616161; display: inline; margin: 0px; padding: 0px;">Minggu, 14 Februari 2021</time>
                </div>
                <div class="card-label">
                    <a href="/category/text-editor" rel="tag" title="Text Editor">Text Editor</a>
                </div>
            </div>
        </div>
    </article>
</div>

<div class="post-outer4">
    <article class="post">
        <div class="card-post">
            <div class="card-thumbnail">
                <a href="/pengenalan-javascript">
                    <img alt="Pengenalan JavaScript untuk Pemula" class="card-thumbnail" src="<?= base_url ('assets/img/upload/cover/js/7482-hh-627-dd-7389.png') ?>" />
                </a>
            </div>
            <div class="card-title">
                <a href="/pengenalan-javascript" title="Pengenalan JavaScript untuk Pemula">
                    <h3>Pengenalan JavaScript untuk Pemula</h3>
                </a>
            </div>
            <div class="card-meta">
                <div class="card-avatar">
                    <img alt="Hendra" class="card-avatar" draggable="false" src="<?= base_url ('assets/img/avatar/author/72×72/hendra.jpg') ?>" />
                </div>
               <div class="card-name">
                    Hendra
                </div>
                <div class="card-date">
                    <time datetime="Februari 04, 2021" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: #616161; display: inline; margin: 0px; padding: 0px;">Kamis, 04 Februari 2021</time>
                </div>
                <div class="card-label">
                    <a href="/category/javascript" rel="tag" title="JavaScript">JavaScript</a>
                </div>
            </div>
        </div>
    </article>
</div>

<div class="post-outer5">
    <article class="post">
        <div class="card-post">
            <div class="card-thumbnail">
                <a href="/pengenalan-css">
                    <img alt="Pengenalan CSS untuk Pemula" class="card-thumbnail" src="<?= base_url ('assets/img/upload/cover/css/8382-hh-728-dd-7182.png') ?>" />
                </a>
            </div>
            <div class="card-title">
                <a href="/pengenalan-css" title="Pengenalan CSS untuk Pemula">
                    <h3>Pengenalan CSS untuk Pemula</h3>
                </a>
            </div>
            <div class="card-meta">
                <div class="card-avatar">
                    <img alt="Hendra" class="card-avatar" draggable="false" src="<?= base_url ('assets/img/avatar/author/72×72/hendra.jpg') ?>" />
                </div>
               <div class="card-name">
                    Hendra
                </div>
                <div class="card-date">
                    <time datetime="Februari 03, 2021" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: #616161; display: inline; margin: 0px; padding: 0px;">Rabu, 03 Februari 2021</time>
                </div>
                <div class="card-label">
                    <a href="/category/css" rel="tag" title="CSS">CSS</a>
                </div>
            </div>
        </div>
    </article>
</div>

<div class="post-outer6">
    <article class="post">
        <div class="card-post">
            <div class="card-thumbnail">
                <a href="/pengenalan-html">
                    <img alt="Pengenalan HTML untuk Pemula" src="<?= base_url ('assets/img/upload/cover/html/3858-hh-729-dd-0284.jpg') ?>" />
                </a>
            </div>
            <div class="card-title">
                <a href="/pengenalan-html" title="Pengenalan HTML untuk Pemula">
                    <h3>Pengenalan HTML untuk Pemula</h3>
                </a>
            </div>
            <div class="card-meta">
                <div class="card-avatar">
                    <img alt="Hendra" class="card-avatar" draggable="false" src="<?= base_url ('assets/img/avatar/author/72×72/hendra.jpg') ?>" />
                </div>
               <div class="card-name">
                    Hendra
                </div>
                <div class="card-date">
                    <time datetime="Februari 01, 2021" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box; color: #616161; display: inline; margin: 0px; padding: 0px;">Senin, 01 Februari 2021</time>
                </div>
                <div class="card-label">
                    <a href="/category/html" rel="tag" title="HTML">HTML</a>
                </div>
            </div>
        </div>
    </article>
</div>
<!-- End Our Blog Section -->

    <nav>
        <ul class="pagination justify-content-center">
            <li class="page-item active"><a class="page-link">1</a></li>
        </ul>
    </nav>

  </main><!-- End #main -->

<?= $this->include('_template/footer_home.php') ?>