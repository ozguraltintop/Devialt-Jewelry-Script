<?php
$ippp=$_SERVER['REMOTE_ADDR'];
$sepetcek = $db->query("select * from sepet where ip='$ippp'",PDO::FETCH_ASSOC);
if($sepetcek->rowCount()){
    foreach($sepetcek as $seee){
    }
    
}

$sepetsay = $sepetcek->rowCount();


$ipppp=$_SERVER['REMOTE_ADDR'];
$facek = $db->query("select * from favori where ip='$ipppp'",PDO::FETCH_ASSOC);
if($facek->rowCount()){
    foreach($facek as $seee){
    }
    
}

$favsay = $facek->rowCount();


$uyeidim = $_SESSION['id'];
$facek1 = $db->query("select * from siparisler where uye='$uyeidim'",PDO::FETCH_ASSOC);
if($facek1->rowCount()){
    foreach($facek1 as $seee1){
    }
    
}

$sipsay = $facek1->rowCount();
?>  
<?php if($_GET['durum']=='Guncellendi'){?>
<script>Swal.fire("Başarılı", "Güncelleme Başarılı.", "success"); </script>
<?php }?>

<?php if($_GET['durum']=='Guncellenmedi'){?>
<script>Swal.fire("Hata", "Güncelleme Başarısız.", "error"); </script>
<?php }?>

<?php if($_GET['durum']=='Basarili'){?>
<script>Swal.fire("Başarılı", "İşleminiz Başarılı.", "success"); </script>
<?php }?>

<?php if($_GET['durum']=='Basarisiz'){?>
<script>Swal.fire("Hata", "İşleminiz Başarısız.", "error"); </script>
<?php }?>
			<div class="py-2 gray">
				<div class="container">
					<div class="row">
						
						<div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 hide-ipad">
							<div class="top_first"><a href="callto:<?=$telefon1?>" class="medium text-muted"><?=$telefon1?></a></div>
						</div>
						
						<div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 hide-ipad">
							<div class="top_second text-center"><p class="medium text-muted m-0 p-0">Her Üründe %20 İNDİRİM!</p></div>
						</div>
						
						<div class="col-xl-4 col-lg-4 col-md-5 col-sm-12">

							
							
						
							
							<div class="currency-selector dropdown js-dropdown float-right mr-3">
								<a href="mailto:<?=$email1?>" class="text-muted medium"><?=$email1?></a>
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
			
			<div class="header header-light dark-text">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="./">
								<img src="resimler/<?=$logo?>" class="logo" alt="<?=$title?>" />
							</a>
							<div class="nav-toggle"></div>
							<div class="mobile_nav">
								<ul>
									<li>
									<a href="#" onclick="openSearch()">
										<i class="lni lni-search-alt"></i>
									</a>
								</li>
								<li>
										    <?php if($_SESSION['email']==true){?>
									<a href="hesabim" >
									    <?php } else {?>
									    <a href="giris-yap" >
									    <?php }?>
										<i class="lni lni-user"></i>
									</a>
								</li>
								<li>
									<a href="#" onclick="openWishlist()">
										<i class="lni lni-heart"></i><span class="dn-counter"><?=$favsay?></span>
									</a>
								</li>
								<li>
									<a href="sepet" >
										<i class="lni lni-shopping-basket"></i><span class="dn-counter"><?=$sepetsay?></span>
									</a>
								</li>
								</ul>
							</div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
							<li><a href="./">Anasayfa</a></li>
								<li><a href="#">Kurumsal</a>
									<ul class="nav-dropdown nav-submenu">
                                    <?php
                                    foreach($sayfacek as $sa){
									?>
										<li><a href="<?=$sa['seo']?>"><?=$sa['adi']?></a></li>
										<?php }?>
									</ul>
								</li>
								
							
								<li><a href="javascript:void(0);">Ürünler</a>
									<ul class="nav-dropdown nav-submenu">
										  <?php
                                    foreach($kategoricek as $kategori){
									?>
										<li><a href="<?=$kategori['seo']?>"><?=$kategori['adi']?> </a>
											
										</li>
										<?php }?>
									</ul>
								</li>
								
								<li><a href="sss">S.S.S</a></li>
								<li><a href="blog">Blog</a></li>
								<li><a href="iletisim">İletişim</a></li>
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
								<li>
									<a href="#" onclick="openSearch()">
										<i class="lni lni-search-alt"></i>
									</a>
								</li>
								
							</ul>
							<ul class="nav-menu nav-menu-social align-to-right">
							
								<li>
								    <?php if($_SESSION['email']==true){?>
									<a href="hesabim" >
									    <?php } else {?>
									    <a href="giris-yap" >
									    <?php }?>
										<i class="lni lni-user"></i>
									</a>
								</li>
							<li>
									<a href="#" onclick="openWishlist()">
										<i class="lni lni-heart"></i><span class="dn-counter"><?=$favsay?></span>
									</a>
								</li>
								<li>
									<a href="sepet" >
										<i class="lni lni-shopping-basket"></i><span class="dn-counter"><?=$sepetsay?></span>
									</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
            
            <div class="clearfix"></div>