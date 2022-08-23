<?php
include("../admin/include/baglan.php");
include("../admin/include/fonksiyonlar.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$ayar['site_title']?></title>
</head>
<body>
<?php


	 $urunidler=$_POST['urun_id'];
    $urunidler=implode(',',$urunidler);
    $siparisdurumu="Hazırlanıyor";
    
     $sepetid=$_POST['sepetid'];
    $sepetid=implode(',',$sepetid);
    
    $sipariskodu =rand(0,99999999);
    
 
    $paytr = rand(0,9999999123929);



    
    
    $siparisekle=$db->prepare("insert into siparisler set uye=:uye,adsoyad=:adsoyad,durum=:durum,paytr=:paytr,tarih=:tarih,fiyat=:fiyat,urun=:urun,telefon=:telefon,eposta=:eposta");
    $siparis=$siparisekle->execute(array("uye"=>$_POST['uye'],"adsoyad"=>$_POST['adsoyad'],"durum"=>"0","paytr"=>$paytr,"tarih"=>$tarih,"fiyat"=>$_POST['fiyat'],"urun"=>$urunidler,"telefon"=>$_POST['telefon'],"eposta"=>$_POST['eposta']));
	
 
 
    $sons = $db->query("select * from siparisler order by id desc")->fetch(PDO::FETCH_ASSOC);

$id = $sons["id"];


$siparisler = $db->query("select * from siparisler where id='$id'")->fetch(PDO::FETCH_ASSOC);

$kullanici_ad=$siparisler['adsoyad'];
$kullanici_soyad=$siparisler['adsoyad'];
$kullanici_gsm=$siparisler['telefon'];
$kullanici_mail=$siparisler['eposta'];
$kullanici_zaman="2015-10-05 12:43:35"; 


$siparis_no=$siparisler['paytr'];
$sepettoplam=$siparisler['fiyat'];
?>

<div class="tab-pane fade active in" id="desc">
		<div class="row">
			<?php include 'iyzico/buyer.php'; ?>
				<div  id="iyzipay-checkout-form" class="responsive"></div>
		</div>
</div>
</body>
</html>