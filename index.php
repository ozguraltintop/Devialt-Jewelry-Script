<?php
include("admin/include/baglan.php");
include("admin/include/fonksiyonlar.php");


ob_start();
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/chosen.css">
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400italic,400,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,100,100italic,300italic,400,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body class="home">
<div id="box-mobile-menu" class="box-mobile-menu full-height full-width">
	<div class="box-inner">
		<span class="close-menu"><span class="icon pe-7s-close"></span></span>
	</div>
</div>
<div id="header-ontop" class="is-sticky"></div>
<!-- Header -->
<?php include 'header.php'; ?>
<!-- ./Header -->
<div class="container">
	<?php include 'slider.php';?>
	<div class="margin-top-40">
		<div class="row">
			<div class="col-sm-4" style="text-align: right;">
				<img style="margin-right: 20px;" class=" margin-top-25" src="resimler/<?=$yorum['resim']?>" alt="">
			</div>
			<div class="col-sm-7">

<?php
                                foreach($yorumcek as $yorum){
								?>
				<blockquote><?=$yorum['aciklama']?></blockquote>

<?php }?>

			</div>
		</div>
	</div>
	<div class="margin-top-40">


	
								
							

		<div class="row">
			<div class="col-sm-12 col-md-6 margin-bottom-30">
				




				<a class="banner-opacity" href="#"><img src="resimler/810853-asdsada.webp" alt=""></a>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="row">
						 <?php
								
                  $footeruruncek=$db->query("select * from urunler order by id desc LIMIT 4")->fetchAll(PDO::FETCH_ASSOC);
									foreach($footeruruncek as $footerurun){
									?>
											<div class="col-sm-6">
										<a href="<?=$footerurun['seo']?>" class="banner-product">
											<img src="images/products/11.jpg" alt="">
										<h3 class="text"><?=$footerurun['adi']?></h3>
										<span class="price"><?=$footerurun['fiyat']?>TRY</span>
										</a>
														</div>
									
										<?php }?>
				</div>
			</div>
		</div>
	</div>
	<div class="text-center margin-top-20">FREE UK DELIVERY + RETURN OVER £85.00 (EXCLUDING HOMEWARE) | FREE UK COLLECT FROM STORE</div>
	<div class="margin-top-50">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="row">
					<div class="col-sm-12">
						<a href="#" class="banner-product">
							<img src="images/products/17.jpg" alt="">
							<h3 class="text">T-Shirt Weekday Crew Sweatshir</h3>
							<span class="price">
								<ins>£125.00</ins>
								<del>£150.00</del>
							</span>
						</a>
					</div>
					 <?php
								
                  $footeruruncek=$db->query("select * from urunler where kategori=4 order by id desc LIMIT 2")->fetchAll(PDO::FETCH_ASSOC);
									foreach($footeruruncek as $footerurun){
									?>
											<div class="col-sm-6">
										<a href="<?=$footerurun['seo']?>" class="banner-product">
											<img src="resimler/<?=$footerurun['resim']?>" alt="">
										<h3 class="text"><?=$footerurun['adi']?></h3>
										<span class="price"><?=$footerurun['fiyat']?>TRY</span>
										</a>
														</div>
									
										<?php }?>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<a class="banner-opacity" href="#"><img src="images/b/3.jpg" alt=""></a>
			</div>
		</div>
	</div>
	<div class="margin-top-30 section-lasttest-blog">
		<div class="section-title text-center"><h3>Our BLog</h3></div>
		<div class="lastest-blog owl-carousel nav-center-center nav-style7" data-nav="true" data-dots="false" data-loop="true" data-margin="30" data-responsive='{"0":{"items":1},"600":{"items":1},"1000":{"items":2}}'>
			<div class="item-blog">
				<div class="left">
					<div class="blog-date">
						<span class="day">7</span>
						<span class="month">/SEP</span><br>
						<span class="year">2015</span>
					</div>
					<h3 class="blog-title"><a href="#">We're the best Designers from UK</a></h3>
					<div class="meta">
						<span class="author">John Doe</span>
						<span class="comment"><i class="fa fa-comment"></i> 36 comments</span>
					</div>
				</div>
				<div class="right">
					<a class="banner-border" href="#"><img src="images/blogs/1.jpg" alt=""></a>
				</div>
			</div>
			<div class="item-blog">
				<div class="left">
					<div class="blog-date">
						<span class="day">7</span>
						<span class="month">/SEP</span><br>
						<span class="year">2015</span>
					</div>
					<h3 class="blog-title"><a href="#">We're the best Designers from UK</a></h3>
					<div class="meta">
						<span class="author">John Doe</span>
						<span class="comment"><i class="fa fa-comment"></i> 36 comments</span>
					</div>
				</div>
				<div class="right">
					<a class="banner-border" href="#"><img src="images/blogs/2.jpg" alt=""></a>
				</div>
			</div>
			<div class="item-blog">
				<div class="left">
					<div class="blog-date">
						<span class="day">7</span>
						<span class="month">/SEP</span><br>
						<span class="year">2015</span>
					</div>
					<h3 class="blog-title"><a href="#">We're the best Designers from UK</a></h3>
					<div class="meta">
						<span class="author">John Doe</span>
						<span class="comment"><i class="fa fa-comment"></i> 36 comments</span>
					</div>
				</div>
				<div class="right">
					<a class="banner-border" href="#"><img src="images/blogs/1.jpg" alt=""></a>
				</div>
			</div>
		</div>
	</div>

	<div class="section-brand-slide">
		<div class="brands-slide owl-carousel nav-center-center nav-style7" data-nav="true" data-dots="false" data-loop="true" data-margin="60" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
	
					<?php foreach($refcek as $ref){?>
								
					<a href="#"><img src="resimler/<?=$ref['resim']?>" alt=""></a>
					
					<?php }?>
		
		</div>
	</div>
	<div class="margin-top-60">
		<div class="row">
			<div class="col-sm-12 col-md-7">
				<div class="video video-lightbox">
					<img src="images/bg_video.png" alt="">
					<div class="overlay"></div>
					<a href="#"  class="link-lightbox button-play" data-videoid="134060140" data-videosite="vimeo"></a>
				</div>
			</div>
			<div class="col-sm-12 col-md-5">
				<div class="newsletter">
                    <div class="section-title text-center"><h3>NEWSLETTER</h3></div>
                    <i class="newsletter-info">Sign up for Our Newsletter &amp; Promotions</i>
                    <form class="form-newsletter">
                      <input type="text" name="newsletter" placeholder="Your email address here..." value="">
                      <span><button class="newsletter-submit" type="submit">SIGNUP</button></span>
                    </form>
                </div>
			</div>
		</div>
	</div>
	<div class="margin-top-60 margin-bottom-30">
		<div class="row">
			<div class="col-sm-12 col-md-4">
                <div class="element-icon style2">
					<div class="icon"><i class="flaticon flaticon-origami28"></i></div>
					<div class="content">
						<h4 class="title">DÜNYANIN HER YERİNE KARGO</h4>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
                <div class="element-icon style2">
					<div class="icon"><i class="flaticon flaticon-curvearrows9"></i></div>
					<div class="content">
						<h4 class="title">GERİ ÖDEME GARANTİSİ</h4>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
                <div class="element-icon style2">
					<div class="icon"><i class="flaticon flaticon-headphones54"></i></div>
					<div class="content">
						<h4 class="title">ONLINE DESTEK 24/7</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<?php include 'footer.php'; ?>
	<a href="#" class="scroll_top" title="Scroll to Top" style="display: block;"><i class="fa fa-arrow-up"></i></a>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="js/Modernizr.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
	<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
	<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/masonry.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>