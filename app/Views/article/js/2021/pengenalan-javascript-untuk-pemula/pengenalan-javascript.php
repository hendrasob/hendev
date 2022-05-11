<?php 

//define meta title
$title = 'Pengenalan JavaScript untuk Pemula - Hendev'; 

//define meta description
$description = 'JavaScript merupakan bahasa pemrograman yang wajib kamu pelajari sebagai seorang web developer, JavaScript merupakan bahasa pemrograman tingkat tinggi dan juga dinamis.'; 

//define meta canonical
$linkcanonical = '/pengenalan-javascript'; 

//define meta keyword
$keyword = 'JavaScript,belajar JavaScript,pengenalan JavaScript,fungsi JavaScript'; 
$tag = 'JavaScript'; 

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

  <?= $this->include('article/js/2021/pengenalan-javascript-untuk-pemula/meta.php') ?>

  <script type=application/ld+json>{"@context":"https://schema.org","@type":"NewsArticle","mainEntityOfPage":{"@type":"WebPage","@id":"/pengenalan-javascript"},"headline":"Pengenalan JavaScript untuk Pemula","image":["<?= base_url ('assets/img/upload/cover/js/7482-hh-627-dd-7389.png') ?>"],"datePublished":"2021-02-04T10:32:22+00:00","dateModified":" 2021-02-04T10:32:22+00:00","author":{"@type":"Person","name":"Agusti Mahendra"},"publisher":{"@type":"Organization","name":"Hendev","logo":{"@type":"ImageObject","url":"<?= base_url ('assets/img/apple-touch-icon.png') ?>"}}}</script>

  <?= $this->include('article/_core/_template/header.php') ?>

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">

          <ol itemscope='itemscope' itemtype='https://schema.org/BreadcrumbList'>
            <li itemprop='itemListElement' itemscope='itemscope' itemtype='https://schema.org/ListItem'><a href='/' itemprop='item' title='Home'><span itemprop='name'>Home</span></a><meta content='1' itemprop='position'/></li>
            <li itemprop='itemListElement' itemscope='itemscope' itemtype='https://schema.org/ListItem'><span itemprop='name'>Pengenalan JavaScript untuk Pemula</span><meta content='2' itemprop='position'/></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

   <!-- ======= Article Section ======= -->
    <section class="portfolio-details">
      <div class="container">
      <h1><strong>Pengenalan JavaScript untuk Pemula</strong></h1>
        <hr>
       <div class="tags">
        <a href="/category/javascript" rel="tags">JavaScript</a>
       </div>
        <div class="portfolio-description">
         <img alt="Pengenalan JavaScript untuk Pemula" src="<?= base_url ('assets/img/upload/cover/js/7482-hh-627-dd-7389.png') ?>">
          <p>
            <strong>JavaScript (JS)</strong> merupakan bahasa pemrograman yang wajib kamu pelajari sebagai seorang web developer.
          </p>
          <p>
            Dalam kurun waktu enam tahun terakhir JavaScript termasuk kedalam salah satu bahasa pemrograman yang paling banyak digunakan.
          </p>
         <img alt="survey bahasa pemrograman menurut octoverse" src="<?= base_url ('assets/img/upload/article/js/2883-hh-682-dd-6392.jpg') ?>">
          <p>
            Hal ini membuat JavaScript menjadi semakin populer dan menjadikan sebuah bahasa pemrograman yang paling banyak digunakan di Github.
          </p>
          <p>
            Pada artikel ini, kita akan membahas pengertian dari JavaScript serta sejarah perkembangan bahasa JavaScript.
          </p>
          <h2>Apa Itu JavaScript?</h2>
          <p>
            <strong>JavaScript (JS)</strong> merupakan bahasa pemrograman tingkat tinggi dan juga dinamis. JavaScript sendiri dapat menjadikan website kamu menjadi lebih hidup dan menarik.
          </p>
          <p>
            Awalnya JavaScript hanya digunakan sebagai <em>client-side</em>. Namun, sekarang JavaScript juga dapat digunakan kedalam <em>server-side</em> dan sebagainya.
          </p>
          <p>
            JavaScript juga bisa digunakan untuk banyak tujuan, misalnya dalam membuat efek <em>rollover</em> baik didalam gambar maupun teks.
          </p>
          <h2>Perkembangan JavaScript</h2>
          <p>
            JavaScript pertama kali dikembangkan oleh <strong>Brendan Eich</strong>, seorang karyawan Netspace pada tahun 1995. Awalnya bahasa ini disebut dengan nama <em>Mocha</em>, yang nantinya diganti menjadi <em>LiveScript</em>, dan akhirnya menjadi JavaScript.
          </p>
          <p>
            Versi pertama dari JavaScript hanya digunakan terbatas dikalangan Netspace saja, fungsionalitas yang ada pun terbatas.
          </p>
          <p>
            Namun, JavaScript terus dikembangkan dan pada tahun 1996 JavaScript secara resmi disebut ECMAScript atau ES. Pada saat ini ECMAScript sudah mencapai versi ke delapan (ES8).
          </p>
<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover">
	  <thead>
		  <tr>
			  <th>Versi ECMAScript</th>
			  <th>Tahun Rilis</th>
		  </tr>
	  </thead>
	  <tbody>
		  <tr>
			  <td>ES 1</td>
			  <td>Juni 1997</td>
		  </tr>
		  <tr>
			  <td>ES 2</td>
		  	  <td>Juni 1998</td>
		  </tr>
		  <tr>
			  <td>ES 3</td>
			  <td>Desember 1999</td>
		  </tr>
		  <tr>
			  <td>ES 4</td>
			  <td>Terbengkalai</td>
		  </tr>
		  <tr>
			  <td>ES 5</td>
			  <td>Desember 2009</td>
		  </tr>
		  <tr>
			  <td>ES 5.1</td>
			  <td>Juni 2011</td>
		  </tr>
		  <tr>
			  <td>ES 6</td>
			  <td>Juni 2015</td>
		  </tr>
		  <tr>
			  <td>ES 7</td>
			  <td>Juni 2016</td>
		  </tr>
		  <tr>
			  <td>ES 8</td>
			  <td>Juni 2017</td>
		  </tr>
	  </tbody>
  </table>
</div>
          <h2>Apa Kegunaan JavaScript?</h2>
          <p>
            Ada banyak fungsi dari JavaScript bagi kamu sebagai seorang web developer, yaitu:
            <ul>
            <li>Mengotomatisasi website</li>
            <li>Menambahkan efek khusus pada halaman website</li>
            <li>Sebagai server web</li>
            <li>Dan masih banyak kegunaan JavaScript yang lainnya</li>
            </ul>
          </p>
          <p>
            Sampai di sini dulu oke artikel tentang pengertian dan sejarah JavaScript. Jika kamu masih belum paham, kamu dapat menanyakannya di kolom komentar yaa.
          </p>
        </div>

      </div>
    </section><!-- End Article Section -->

    <?= $this->include('widget/share.php') ?>
    <?= $this->include('widget/dukungan.php') ?>
    <?= $this->include('widget/disqus.php') ?>
    <?= $this->include('widget/related_post_js.php') ?>
    <?= $this->include('widget/recent_post.php') ?>

  </main><!-- End #main -->

  <?= $this->include('article/_core/_template/footer.php') ?>