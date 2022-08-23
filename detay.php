
<?php
include("admin/include/baglan.php");
include("admin/include/fonksiyonlar.php");
$seo = $_GET['seo'];


ob_start();
session_start();


$uyeid = $_SESSION['id'];
$uyesec=$db->query("select * from uyeler where id='$uyeid'")->fetch(PDO::FETCH_ASSOC);

if($seo=='iletisim'){
	$adi ="İletişim";
	$desc = $des;
}else if($seo=='blog'){
	$adi ="Blog";
	$desc = $des;
}else if($seo=='cikis-yap'){
	$adi ="Çıkış Yap";
	$desc = $des;
}else if($seo=='siparislerim'){
	$adi ="Siparişlerim";
	$desc = $des;
}else if($seo=='hesabim'){
    oturumkontrolana1();
	$adi ="Hesabım";
	$desc = $des;
}else if($seo=='siparisi-tamamla'){
	$adi ="Siparişi Tamamla";
	$desc = $des;
}else if($seo=='giris-yap'){
	$adi ="Giriş Yap";
	$desc = $des;
}else if($seo=='siparis-tamamlandi'){
	$adi ="Sipariş Tamamlandı";
	$desc = $des;
}else if($seo=='sss'){
	$adi ="S.S.S";
	$desc = $des;
}else if($sayfalar=$db->query("select * from sayfalar where seo='$seo' and tur='sayfalar'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$sayfalar['adi'];
	$id = $sayfalar['id'];
	$desc = $sayfalar['onaciklama'];
}else if($haberler=$db->query("select * from haberler where seo='$seo' and tur='haberler'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$haberler['adi'];
	$id = $haberler['id'];
	$desc = $haberler['onaciklama'];
}else if($urunler=$db->query("select * from urunler where seo='$seo' and tur='urunler'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$urunler['adi'];
	$id = $urunler['id'];
	$desc = $urunler['onaciklama'];
}else if($kategori=$db->query("select * from urun_kategori where seo='$seo' and tur='urun_kategori'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$kategori['adi'];
	$id = $kategori['id'];
	$desc = $kategori['onaciklama'];
}else if($seo=='arama'){
	$adi =$_GET['arama'];
	$desc = $des;
}else if($seo=='sepet'){
	$adi ="Sepet";
	$desc = $des;
}else {
	$adi ="404";
	$desc = $des;	
}
?>
<!DOCTYPE html>
<html lang="tr">
	
<head>
		<meta charset="utf-8" />
		<meta name="description" content="<?=$desc?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title><?=$adi?> - <?=$title?></title>
		 		 <link rel="icon" type="image/png" href="resimler/<?=$favicon?>">
 <script type="text/javascript" src="sweetalert2.all.min.js"></script>
        <link href="assets/css/styles.css" rel="stylesheet">
		
    </head>
	
    <body>
	
	
 
	
        <div id="main-wrapper">
		
    
		<?php 
		include("inc/header.php");
		include("detay/beadcrumb.php");
	if($seo=='iletisim'){
		include("detay/iletisim.php");
	}else if($seo=='blog'){
		include("detay/blog.php");
	}else if($seo=='cikis-yap'){
		include("detay/cikis-yap.php");
	}else if($seo=='siparisi-tamamla'){
		include("detay/siparisi-tamamla.php");
	}else if($seo=='siparis-tamamlandi'){
		include("detay/siparis-tamamlandi.php");
	}else if($seo=='sepet'){
		include("detay/sepet.php");
	}else if($seo=='siparislerim'){
		include("detay/siparislerim.php");
	}else if($seo=='hesabim'){
		include("detay/hesabim.php");
	}else if($seo=='giris-yap'){
		include("detay/giris-yap.php");
	}else if($seo=='sss'){
		include("detay/sss.php");
	}else if($sayfalar['adi']!=''){
		include("detay/sayfa-detay.php");	
	}else if($haberler['adi']!=''){
		include("detay/blog-detay.php");	
	}else if($urunler['adi']!=''){
		include("detay/urun-detay.php");	
	}else if($kategori['adi']!=''){
		include("detay/kategori.php");	
	}else if($seo=='arama'){
		include("detay/arama.php");
	}else {
		include("detay/404.php");	
	}
		
		
		
		include("inc/etiketler.php");
		include("inc/footer.php");
		?>
			
			
	
	
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
	
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/ion.rangeSlider.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/slider-bg.js"></script>
		<script src="assets/js/lightbox.js"></script> 
		<script src="assets/js/smoothproducts.js"></script>
		<script src="assets/js/snackbar.min.js"></script>
		<script src="assets/js/jQuery.style.switcher.js"></script>
		<script src="assets/js/custom.js"></script>
		
	
		
		<script>
			function openWishlist() {
				document.getElementById("Wishlist").style.display = "block";
			}
			function closeWishlist() {
				document.getElementById("Wishlist").style.display = "none";
			}
		</script>
		
		<script>
			function openCart() {
				document.getElementById("Cart").style.display = "block";
			}
			function closeCart() {
				document.getElementById("Cart").style.display = "none";
			}
		</script>

		<script>
			function openSearch() {
				document.getElementById("Search").style.display = "block";
			}
			function closeSearch() {
				document.getElementById("Search").style.display = "none";
			}
		</script>		

	</body>

</html>