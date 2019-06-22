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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/edu_page.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/nutrition_page.css">
	<link href="<?php echo base_url();?>assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css">
	<!-- ICON -->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/Images/icon.png" type="image/x-icon">
	<script src="https://code.jquery.com/jquery-3.3.1.js"> </script>      
	<!-- JavaScript Hide navbar -->  
	<script type="text/javascript">
		var zero = 0;
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
		<div class="container-fluid">
			<h6></h6>
			<div class="checkbox-btn">
				<input type="checkbox" name="bahasa">
				<div><span class="slide"></span></div>
			</div>
		</div>
	</section>
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
				</ul>
			</div>
		</div>
	</nav>
	<!-- End Navbar -->
	<!--- Corousel Banner -->
	<div class="container-carousel">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<a href="#"><img src="<?php echo base_url();?>assets/Images/Banner_FGD_Padang.jpg" width="100%" alt="First Slide"></a>
				</div>
				<div class="carousel-item">
					<img src="<?php echo base_url();?>assets/Images/Banner_talkshow_padang.jpg" width="100%" alt="Second Slide">
				</div>
				<div class="carousel-item">
					<img src="<?php echo base_url();?>assets/Images/Banner_orientasi_beasiswa.jpg" width="100%" alt="Third Slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!-- End Carousel -->
	<!--- About Us -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md">
					<h3>About Us</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					<a class="btn style="background-color: #f26529 href="<?php echo base_url();?>aboutUs" role="button">Read More</a>             
				</div>
				<div class="col-md">
					<img src="<?php echo base_url();?>assets/Images/about_us_image.jpg" width="300">
					<div class="animate"></div>
				</div>
			</div>
		</div>
	</section>
	<!--- End About us -->
	<!--- START OUR FOCUS SLIDER -->      
	<div class="jumbotron-1 jumbotron-fluid">
		<div class="container">
			<h5 class="display-5">OUR FOCUS</h5>
		</div>
	</div>
	<div class="container-slider">
		<div class="owl-carousel owl-theme">
			<div class="item">
				<div class="card" style="width: 17rem;">
					<a href="<?php echo base_url();?>eduPage">
						<img src="<?php echo base_url();?>assets/Images/Education_Image.jpg" class="card-img-top" alt="education">
						<div class="card-body">
							<p class="card-text">EDUCATION</p>
						</div>
					</a>
				</div>
			</div>
			<div class="item">
				<div class="card" style="width: 17rem;">
					<a href="<?php echo base_url();?>nutritionPage">
						<img src="<?php echo base_url();?>assets/Images/Nutrition%20Image.jpg" class="card-img-top" alt="education">
						<div class="card-body">
							<p class="card-text">NUTRITION</p>
						</div>
					</a>
				</div>
			</div>
			<div class="item">
				<div class="card" style="width: 17rem;">
					<a href="<?php echo base_url();?>sport">
						<img src="<?php echo base_url();?>assets/Images/Sports.jpg" class="card-img-top" alt="education">
						<div class="card-body">
							<p class="card-text">SPORTS</p>
						</div>
					</a>
				</div>
			</div>
			<div class="item">
				<div class="card" style="width: 17rem;">
					<a href="<?php echo base_url();?>socialStrategic">
						<img src="<?php echo base_url();?>assets/Images/Cosi_Image.jpg" class="card-img-top" alt="education">
						<div class="card-body">
							<p class="card-text">SOCIAL</p>
						</div>
					</a>
				</div>
			</div>
			<div class="item">
				<div class="card" style="width: 17rem;">
					<a href="<?php echo base_url();?>disasterPage">
						<img src="<?php echo base_url();?>assets/Images/Foto_Dampak/Disaster.jpg" class="card-img-top" alt="education">
						<div class="card-body">
							<p class="card-text">DISASTER</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!--- END OUR FOCUS SLIDER -->
	<!--- START OUR IMPACT SLIDER -->
	<div class="jumbotron-1 jumbotron-fluid">
		<div class="container">
			<h5 class="display-5">OUR IMPACT</h5>
		</div>
	</div>
	<div class="container-slider">
		<div class="owl-carousel owl-theme">
			<div class="item">
				<div class="card" style="width: 17rem;">
					<a href="<?php echo base_url();?>eduImpact">
						<img src="<?php echo base_url();?>assets/Images/Foto_Dampak/Pendidikan_Agrikultur.jpg" class="card-img-top" alt="education">
						<div class="card-body">
							<p class="card-text">EDUCATION</p>
						</div>
					</a>
				</div>
			</div>
			<div class="item">
				<div class="card" style="width: 17rem;">
					<a href="<?php echo base_url();?>nutritionImpact">
						<img src="<?php echo base_url();?>assets/Images/Foto_Dampak/Gizi.jpg" class="card-img-top" alt="education">
						<div class="card-body">
							<p class="card-text">NUTRITION</p>
						</div>
					</a>
				</div>
			</div>
			<div class="item">
				<div class="card" style="width: 17rem;">
					<a href="<?php echo base_url();?>sportImpact">
						<img src="<?php echo base_url();?>assets/Images/Foto_Dampak/Olahraga.jpg" class="card-img-top" alt="education">
						<div class="card-body">
							<p class="card-text">SPORTS</p>
						</div>
					</a>
				</div>
			</div>
			<div class="item">
				<div class="card" style="width: 17rem;">
					<a href="<?php echo base_url();?>socialImpact">
						<img src="<?php echo base_url();?>assets/Images/Foto_Dampak/Strategi_Sosial.jpg" class="card-img-top" alt="education">
						<div class="card-body">
							<p class="card-text">SOCIAL</p>
						</div>
					</a>
				</div>
			</div>
			<div class="item">
				<div class="card" style="width: 17rem;">
					<a href="<?php echo base_url();?>disasterImpact">
						<img src="<?php echo base_url();?>assets/Images/Foto_Dampak/Disaster.jpg" class="card-img-top" alt="education">
						<div class="card-body">
							<p class="card-text">DISASTER</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!--- END OUR IMPACT -->
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
		<!--- Start Download App -->      
		<div class="jumbotron jumbotron-fluid text-center">
			<div class="container-dl-app text-center">
				<h5>JAPFA FOUNDATION APP DOWNLOAD</h5>
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm content-center"><img class="img-fluid-1" src="<?php echo base_url();?>assets/Images/QR_Code.png" width="160"></div>
						<h4 class="col-xs">OR</h4>
						<div class="col-sm">
							<a class="bottom-margin-sm" href="#"><img class="img-fluid-2" src="<?php echo base_url();?>assets/Images/Appstore_logo.png" width="160px"></a>
							<a class="bottom-margin-sm" href="#"><img class="img-fluid-3" src="<?php echo base_url();?>assets/Images/Google-Play-Store-Logo.png" width="184px"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--- End Download App -->
		<!--- Start News Letter Kolom -->
		<div class="jumbotron-3 jumbotron-fluid">
			<div class="container">
				<h5 class="display-5">NEWSLETTER</h5>
			</div>
		</div>
		<div class="card-nl text-white md-4">
			<div class="row no-gutters">
				<div class="card-body">
					<h5 class="card-title">Newsletter</h5>
					<p class="card-text-nl">Sign up to recieve update our newsletter.</p>
					<div class="form-group">
						<label for="exampleInputEmail1">First Name</label>
						<input type="text" class="form-control" name="firstName" aria-describedby="emailHelp" placeholder="Enter your first name">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Last Name</label>
						<input type="text" class="form-control" name="lastName" aria-describedby="emailHelp" placeholder="Enter your last name">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
						<small id="emailHelp" class="form-text text-muted-bg-dark">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkedBox">
						<label class="form-check-label" for="exampleCheck1">Check me out</label>
					</div>
					<button type="button" id="clickSubmit" class="btn btn-primary" style="background: #808080">Submit</button>
				</div>
			</div>
		</div>
		<div class="container-slider-newsletter">
			<div class="row no-gutters">
				<div class="owl-carousel owl-theme">
					<div class="item_nl">
						<div class="card-newsletter">
							<img class="news"  src="<?php echo base_url();?>assets/Images/cover_newsletter/Okt_18.jpg" class="card-img-top" alt="education">
							<div class="card-body-news">
							</div>
						</div>
					</div>
					<div class="item_nl">
						<div class="card-newsletter">
							<img class="news" src="<?php echo base_url();?>assets/Images/cover_newsletter/NL_Feb'19.jpg" class="card-img-top" alt="education">
							<div class="card-body-news">
							</div>
						</div>
					</div>
					<div class="item_nl">
						<div class="card-newsletter">
							<img class="news" src="<?php echo base_url();?>assets/Images/cover_newsletter/Maret_19.jpg" class="card-img-top" alt="education">
							<div class="card-body-news">
							</div>
						</div>
					</div>
					<div class="item_nl">
						<div class="card-newsletter">
							<img class="news" src="<?php echo base_url();?>assets/Images/cover_newsletter/Jan_18.jpg" class="card-img-top" alt="education">
							<div class="card-body-news">
							</div>
						</div>
					</div>
					<div class="item_nl">
						<div class="card-newsletter">
							<img class="news"  src="<?php echo base_url();?>assets/Images/cover_newsletter/April_18.jpg" class="card-img-top" alt="education">
							<div class="card-body-news">
							</div>
						</div>
					</div>
					<div class="item_nl">
						<div class="card-newsletter">
							<img class="news"  src="<?php echo base_url();?>assets/Images/cover_newsletter/Jan_18.jpg" class="card-img-top" alt="education">
							<div class="card-body-news">
							</div>
						</div>
					</div>
					<div class="item_nl">
						<div class="card-newsletter">
							<img class="news"  src="<?php echo base_url();?>assets/Images/cover_newsletter/Juni_17.jpg" class="card-img-top" alt="education">
							<div class="card-body-news">
							</div>
						</div>
					</div>
					<div class="item_nl">
						<div class="card-newsletter">
							<img class="news"  src="<?php echo base_url();?>assets/Images/cover_newsletter/April_17.jpg" class="card-img-top" alt="education">
							<div class="card-body-news">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--- End Newsletter slider & form -->
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
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#clickSubmit").click(function(){
					var	first = $("input[name='firstName']").val();
					var	last = $("input[name='lastName']").val();
					var	email = $("input[name='email']").val();
					$.ajax({
						type: "POST",
						url: "<?php echo base_url();?>insertSubscribe",
						data: {first:first, last:last, email:email},
						success: function(msg) {
							if (msg === 'success') {
								swal ( "Success" ,  "Subscribe Berhasil !!" ,  "success" );
								location.reload();
							}else if(msg === 'kosong'){
								swal ( "Oops" ,  "Inputan Masih Ada Yang Kosong !" ,  "warning" )
							}else if(msg === 'error'){
								swal ( "Oops" ,  "Email Tersebut Sudah Subscribe!" ,  "error" )
							}
						}
					});
				});
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
		<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
	</html>