<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bantuan dan Kontak - Hendev</title>
  <meta content='Bantuan dan Kontak - Hendev' property='og:title' />
  <link rel="canonical" href="/contact" />
  <meta content="/contact" property="og:url" />
  <meta content='Bantuan dan Kontak - Hendev' property='og:image:alt' />
  <meta content='article' property='og:type' />
  <meta content='Bantuan dan Kontak - Hendev' name='twitter:title' />
  <meta content='Bantuan dan Kontak - Hendev' name='twitter:image:alt' />
  <meta content='Hendev adalah tempat berbagi tutorial pemrograman untuk kontak dan bantuan anda dapat menghubungi pemilik hendev.' name='description' />
  <meta content='Hendev adalah tempat berbagi tutorial pemrograman untuk kontak dan bantuan anda dapat menghubungi pemilik hendev.' property='og:description' />
  <meta content='Hendev adalah tempat berbagi tutorial pemrograman untuk kontak dan bantuan anda dapat menghubungi pemilik hendev.' name='twitter:description' />
  <meta name="keywords" content="Kontak hendev,alamat hendev,telpon hendev,menghubungi hendev,sms hendev,whatsapp hendev,email hendev dan lain-lain">
  <meta content="Hendev" property="article:publisher" />
  <meta content="Agusti Mahendra" property="article:author" />
  <meta itemprop=datePublished content="2021-01-31T12:16:40+00:00">
  <meta itemprop=dateModified content="2021-02-02T07:06:40+00:00">

<?= $this->include('_template/header.php') ?>

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Bantuan &amp; Kontak</h2>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Message Section ======= -->
    <section class="portfolio-details">
      <div class="container">
        <div class="portfolio-description">
        <img alt="Bantuan &amp; Kontak - Hendev" src="<?= base_url ('assets/img/upload/pages/contact/6329-hh-839-dd-7293.svg') ?>">
        <p style="padding-top: 3rem;">Silahkan nih, bagi yang mau bertanya-tanya tentang sesuatu yang berhubungan dengan pemrograman dapat menghubungi melalui form di bawah ini. Jika tidak ada kesibukan admin <a href="/">Hendev</a> akan langsung menjawab pesan tersebut.</p>
        </div>
      </div>
    </section><!-- End Message Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row">

<form name="contact-form">
    <div class="formcolumn1">
        <input id="ContactForm1_contact-form-name" name="name" placeholder="Name" size="30" type="text" value="" />
    </div>
    <div class="formcolumn2">
        <input id="ContactForm1_contact-form-email" name="email" placeholder="Email" size="30" type="text" value="" />
    </div>
    <div class="formcolumn3">
        <textarea cols="25" id="ContactForm1_contact-form-email-message" name="email-message" placeholder="Message" rows="7"></textarea>
    </div>
    <div class="formcolumn4">
        <input class="ripplelink" id="ContactForm1_contact-form-submit" type="button" value="Button Error" />
    </div>
    <div style="max-width: 100%; text-align: center; width: 100%;">
        <div id="ContactForm1_contact-form-error-message"></div>
        <div id="ContactForm1_contact-form-success-message"></div>
    </div>
</form>

        </div>

      </div>
    </section><!-- End Contact Us Section -->
    
  </main><!-- End #main -->

<?= $this->include('_template/footer.php') ?>