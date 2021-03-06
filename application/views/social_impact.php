<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" initial-scale="1" shrink-to-fit="no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--- CSS Link-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/aboutUs.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/edu_page.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/nutrition_page.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/impact.css">
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
  <!--- End CSS Link-->
  <title>Japfa Foundation</title>
</head>
<body>
  <!-- Start menu Bahasa-->
  <!-- <section>
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
  </section> -->
  <br><br>
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
         <!--  <li class="nav-item active">
            <a class="nav-link" href="#">Event</a>
          </li> -->
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
  <br>
  <!-- START CONTENT -->
  <div class="container-social_impact container-content-1">
    <div class="bg-image">
      <img src="<?php echo base_url();?>assets/Images/Foto_Dampak/banner_social_impact.jpg" class="img-fluid impact"><br><br>
      <h3 class="wow fadeInUp toc_mainText">Provide access to increase community’s capacity</h3>
      <hr width="80%">
      <p class="wow zoomIn">COSI has become a development center for community activities related to agribusiness, nutrition, and sports in Lamongan, Simalungun (Toba) and Jakarta Selatan with total direct beneficiaries of 5.113 people. </p>
    </div>
    <div class="bg-text">
      <h1>Social Strategic Program<br>Community Open Space Initiatives</h1>
      <p>To Strengthen Society’s Capacity in Tech-Based Social Entrepreneurship Development and Increase Quality of Life</p>
    </div>
  </div>
  <div class="container-content-1">
    <div class="row">
      <div class="col-md narasi">
        <h3 class="wow fadeInUp" id="about_text">1. Lamongan</h3>
        <br><br>
        <p class="wow zoomIn">- 940 people gained knowledge about Balanced Nutrition and a Clean & Healthy Lifestyle.<br><br>- 76 youths (aged 15-35) in Paciran Sub-District received English Training.<br><br>- 251 youths (aged 15-35) in Paciran Sub-District received a Self Quality Development through Inspiration Class (Kelas Inpirasi).</p>
      </div>
      <div class="col-md image">
        <div class="container_img_about">
          <img class="wow slideInUp" src="<?php echo base_url();?>assets/Images/Foto_Dampak/Strategi_Sosial2.jpg" alt="Avatar" id="image">
        </div>
      </div>
    </div>
  </div>
  <div class="container-content-1">
    <div class="row">
      <div class="col-md narasi">
        <h3 class="wow fadeInUp" id="about_text">2. Pejaten Timur</h3>
        <br><br>
        <p class="wow zoomIn">- 9.467 people in Pejaten Timur, South Jakarta used  RPTRA Kemuning for various activities such as children’s games, sports, reading, counseling for mothers, and education about the dangers of drugs for young people.</p>
      </div>
      <div class="col-md image">
        <div class="container_img_about">
          <img class="wow slideInUp" src="<?php echo base_url();?>assets/Images/Foto_Dampak/Strategi_Sosial1.jpg" alt="Avatar" id="image">
        </div>
      </div>
    </div>
  </div>
  <div class="container-content-1">
    <div class="row">
      <div class="col-md narasi">
        <h3 class="wow fadeInUp" id="about_text">3. Toba</h3>
        <br><br>
        <p class="wow zoomIn">- 175 youths in Pematang Tambun Village established community business units.<br><br>- 160 toddlers received benefits from social activities conducted by Karang Taruna Tambun Raya, about complementary food for breast milk (MP-ASI).</p>
      </div>
      <div class="col-md image">
        <div class="container_img_about">
          <img class="wow slideInUp" src="<?php echo base_url();?>assets/Images/Foto_Dampak/social_impact3jpg" alt="Avatar" id="image">
        </div>
      </div>
    </div>
  </div>
  <div class="container-content-1">
    <div class="row">
      <div class="col-md narasi">
        <h3 class="wow fadeInUp" id="about_text">4. Provide networking for community capacity enhancement Toba</h3>
        <br><br>
        <p class="wow zoomIn">- Through 3 COSI programs, JAPFA Foundation provides a platform to expand community’s network for developing entrepreneurship in the agribusiness sector:<br>1. Layers (Ayam Petelur) Cultivation development in Paciran.<br>2. Green Beans Cultivation Development in Tambun Raya.<br><br>- JF has also created 4 communities that have been supervised intensively:<br>1. Karang Taruna Buana Putra Paciran<br>2. Kader Pokja PHBS Paciran<br>3. Karang Taruna Tambun Raya (KTTR) Toba<br>4. Tim Pos Edukasi Anti Narkoba (PESAN) Jaksel.</p>
      </div>
      <div class="col-md image">
        <div class="container_img_about">
          <img class="wow slideInUp" src="<?php echo base_url();?>assets/Images/Foto_Dampak/social_impact4.jpg" alt="Avatar" id="image">
        </div>
      </div>
    </div>
  </div>
  <!-- END CONTEN-->
  <!-- END BENEFICIARIES-->       
  <!--- START NEWS SLIDER -->
  <div class="jumbotron-2 jumbotron-fluid wow fadeInUp">
    <div class="container">
      <h5 class="display-5">NEWS</h5>
    </div>
  </div>
  <div class="container-slider-news wow fadeInUp">
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
    <script>
      $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
      });
    </script>
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