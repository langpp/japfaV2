<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--- CSS Link -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/aboutUs.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/edu_page.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/nutrition_page.css">
  <link href="<?php echo base_url();?>assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/Images/icon.png" type="image/x-icon">
  <script src="https://code.jquery.com/jquery-3.3.1.js"> </script>      
  <!-- JavaScript Hide navbar -->  
  <script type="text/javascript">
    var  zero = 0;
    
    $(document).ready(function(){
      $(window).on('scroll', function(){
        $('.navbar').toggleClass('hide', $(window).scrollTop()> zero);
        zero = $(window).scrollTop();
      })
    })  
    
  </script>
  <!-- End JavaScript Hide Navbar -->  
  <!--- End CSS Link -->
  <title>Japfa Foundation</title>
</head>
<body>
  <!--- Start menu Bahasa -->
  <section>
    <div class="container">
      <div class="ct-topbar float-right">
        <ul class="list-unstyled list-inline ct-topbar__list">
          <li class="ct-language">Bahasa <i class="fa fa-chevron-down"></i>
            <ul class="list-unstyled ct-language__dropdown" style="height: 50px;">
              <li><a href="#googtrans(id|id)" class="lang-id lang-select a-bahasa" data-lang="id"><img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/flags/1x1/id.svg" alt="INDONESIA" class="img-bahasa"></a></li>
              <li><a href="#googtrans(en|en)" class="lang-en lang-select a-bahasa" data-lang="en"><img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/flags/1x1/us.svg" alt="ENGLISH" class="img-bahasa" style="top: 5px;"></a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </section><br><br>
  <!-- Start Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark p-0" style="background-color: #f26529">
    <div class="row mx-md-n5">
      <div class="col px-md-5"><img src="<?php echo base_url();?>assets/Images/Logo_JF_web.png" width="150" id="logo-header"></div>
    </div>
    <div class="container" id="navbar-menu">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Focus</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="<?php echo base_url();?>eduPage">Education</a>
              <a class="dropdown-item" href="<?php echo base_url();?>nutritionPage">Nutrition</a>
              <a class="dropdown-item" href="<?php echo base_url();?>sport">Sports</a>
              <a class="dropdown-item" href="<?php echo base_url();?>socialStrategi">Social Strategic</a>
              <a class="dropdown-item" href="<?php echo base_url();?>disasterPage">Disaster Response</a>
            </div>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Impact</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="<?php echo base_url();?>impact">Beneficiaries</a>
              <a class="dropdown-item" href="<?php echo base_url();?>eduImpact">Education</a>
              <a class="dropdown-item" href="<?php echo base_url();?>nutritionImpact">Nutrition</a>
              <a class="dropdown-item" href="<?php echo base_url();?>sportImpact">Sports</a>
              <a class="dropdown-item" href="<?php echo base_url();?>socialImpact">Social Strategic</a>
              <a class="dropdown-item" href="<?php echo base_url();?>disasterImpact">Disaster Response</a>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>news">News</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Event</a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Scholarship</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">BPI</a>
              <a class="dropdown-item" href="#">Vocational</a>
              <a class="dropdown-item" href="#">University</a>
            </div>
          </li>
          <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>gallery">Gallery</a>
  </li>
          <!-- <li class="nav-item active">
            <a class="nav-link" href="<?php //echo base_url();?>video">Video</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <!-- START CONTENT -->
  <div class="banner_edu">
    <img src="<?php echo base_url();?>assets/Images/focus_image/cosi_banner.jpg" class="img-fluid"><br><br>
    <h3 class="wow fadeInUp toc_mainText">Social Strategic</h3>
    <hr>
    <p class="wow fadeInUp">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
  </div>
  <div id="image_mbs">
    <div class="kotak_grey">
      <h2 class="wow fadeInUp main_text">Community<br>Open Space<br>Initiatives</h2>
    </div>
    <img src="<?php echo base_url();?>assets/Images/focus_image/cosi_lamongan.jpg" class="wow fadeInUpBig" id="mbs"><br><br>
    <p class="wow zoomIn mbs_text">"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?":<br><br>
      - Program Pojok Gizi (Kantin Sehat dan Usaha Kesehatan Sekolah).<br>
      - Program Budaya (Gamelan, Talempong),Literasi (Ulat Buku), Kursus Bahasa Inggris tingkat dasar, Matematika dan Kegiatan Pramuka (Kepramukaan).<br>
      - Kewirausahaan Sosial Sekolah .<br>            - Sekolah Tanggap Bencana.<br>
      - Bantuan Keuangan & Beasiswa
    </p>
  </div>
  <div id="image_mbs">
    <div class="kotak_grey">
      <h2 class="wow fadeInUp main_text">Child Friendly<br>Integrated<br>Public<br>Space</h2>
    </div>
    <img src="<?php echo base_url();?>assets/Images/focus_image/rptra_img.jpg" class="wow fadeInUpBig" id="mbs"><br><br>
    <p class="wow zoomIn mbs_text">"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?":<br><br>
      - Beasiswa Prestasi tingkat SMK bidang agribisnis dan agriteknologi – Direktorat Pembinaan SMK Kemendikbud Republik Indonesia.<br>
      - Program Beasiswa prestasi tingkat Diploma 3 dan Strata 1 di 5 (lima) perguruan tinggi negeri nasional.<br>
      - Bantuan Pendidikan Internal Japfa Foundation.<br>            
      - Kuliah Umum kerjasama antara Kemin Industry Asia Pte Ltd di IPB dan UNSYIAH.<br>
    </p>
  </div>
  <!--- END CONTENT-->
  <!--- START GRAND DESIGN -->
  <h3 class="wow fadeInUp toc_mainText">Provide access to increase community’s capacity</h3>
  <div class="container nutrition">
    <div class="wow slideInUp box">
      <i class="fa fa-users" aria-hidden="true"></i>
      <h3 class="fase">01</h3>
      <p class="judul">Griya Daya Guna Lamongan</p>
      <hr style="background-color: #f26529;">
      <p class="isi">- English Traning<br>- Balanced Nutrition and A Clean and Healthy Lifestyle<br>- Self Quality Development through Inspiration Class </p>
    </div>
    <div class="wow slideInUp box">
      <i class="fa fa-users" aria-hidden="true"></i>
      <h3 class="fase">02</h3>
      <p class="judul">RPTRA Kemuning Jakarta</p>
      <hr style="background-color: #f26529;">
      <p class="isi">- RPTRA Kemuning for various activities such as children’s games<br>- Sports<br>- Reading<br>- Counseling for mothers<br>- Education</p>
    </div>
    <div class="wow slideInUp box">
      <i class="fa fa-users" aria-hidden="true"></i>
      <h3 class="fase">03</h3>
      <p class="judul">COSI Tambun Raya</p>
      <hr style="background-color: #f26529;">
      <p class="isi">- Tambun Raya Village established community business units<br>- Social activities conducted by Karang Taruna Tambun Raya</p>
    </div>
  </div>
  <!--- END GRAND DESIGN -->
  <!--- START NEWS SLIDER -->
  <div class="jumbotron-2 jumbotron-fluid">
    <div class="container">
      <h5 class="display-5">NEWS</h5>
    </div>
  </div>
  <div class="container-slider-news">
    <div class="owl-carousel owl-theme">
      <?php if (!empty($news)) {
        foreach ($news as $dataNews) { ?>
        <div class="item">
          <a href="<?php echo base_url();?>detail?tag=news&id=<?php echo $dataNews['id_news'];?>&tab=tbnews&find=id_news">
            <div class="card-news">
              <img class="news" src="<?php echo base_url();?>assets/news/<?php echo $dataNews['img'];?>" class="card-img-top" alt="news">
              <div class="card-body-news">
              </div>
            </div>
          </a>
        </div>
        <?php } } ?>
      </div>
    </div>
    <!--- End News Container -->

    <!--- Start Footer -->
    <div class="jumbotron-footer jumbotron-fluid" id="wrapper_footer">
      <!-- Just an image -->
      <div class="container footer" id="footer">
        <div class="logo-jf">
          <img class="img-fluid" src="<?php echo base_url();?>assets/Images/Logo%20JF.png" width="130">
          <p class="nama_pt">PT. Japfa Comfeed Indonesia, Tbk</p>
        </div>
        <div class="row" id="menu-footer">
          <div class="col-md col-sm-3 footer">
            <ul>
              <li><a href="<?php echo base_url();?>aboutUs">About</a></li>
              <li><a href="<?php echo base_url();?>eduPage">Focus</a></li>
              <li><a href="<?php echo base_url();?>impact">Impact</a></li>
            </ul>
          </div>
          <div class="col-md col-sm-3 footer">
            <ul>
              <li><a href="<?php echo base_url();?>news">News</a></li>
              <li><a href="#">Event</a></li>
            </ul>
          </div>
          <div class="col-md col-sm-3 footer">
            <ul>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Scholarship</a></li>
            </ul>
          </div>
          <div class="col-md col-sm-3 footer">
            <ul>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Term & Condition</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
        </div>
        <div class="cover_footer"></div>
        <p id="visit">Visit Us:</p>
        <br>
        <div class="sosmed_logo">
          <ul class="col-md-7">
            <li><a target="_blank" href="https://www.facebook.com/japfafoundation/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="https://www.instagram.com/japfafoundation/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="https://www.youtube.com/channel/UCaBk9Ejhxh05bfIDHz570OA"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="https://twitter.com/JapfaFoundation/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="jumbotron-end-footer jumbotron-fluid">
      <div class="container">
        <p class="copyright">CopyRights &copy;2019 Japfa Foundation</p>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <script src="<?php echo base_url();?>assets/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script src="<?php echo base_url();?>assets/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/OwlCarousel2-2.3.4/dist/owl.carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
          0:{
            items:1
          },
          600:{
            items:3
          },
          1000:{
            items:4
          }
        }
      })
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        setTimeout(function () { $(".goog-close-link").trigger("click"); }, 10);
      });
    </script>
    <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
      }

      function triggerHtmlEvent(element, eventName) {
        var event;
        if (document.createEvent) {
          event = document.createEvent('HTMLEvents');
          event.initEvent(eventName, true, true);
          element.dispatchEvent(event);
        } else {
          event = document.createEventObject();
          event.eventType = eventName;
          element.fireEvent('on' + event.eventType, event);
        }
      }

      jQuery('.lang-select').click(function() {
        var theLang = jQuery(this).attr('data-lang');
        jQuery('.goog-te-combo').val(theLang);

    //alert(jQuery(this).attr('href'));
    window.location = jQuery(this).attr('href');
    location.reload();

  });
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>