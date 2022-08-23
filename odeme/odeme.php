<?php
include "../admin/include/baglan.php";
include "../admin/include/fonksiyonlar.php";
ob_start();
session_start();
?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>KREDİ KARTI GÜVENLİ ÖDEME MERKEZİ</title>
 	 <link rel="icon" type="image/png" href="../resimler/<?=$favicon?>">
        <link href="../assets/css/styles.css" rel="stylesheet">
 

</head>
<body>


  <?php include("../inc/header.php");?>


<div style="width: 100%;margin: 0 auto;display: table;">

	<?php
   
    $siparis_id = intval(rand(0,999999999));


	## 1. ADIM için örnek kodlar ##

	####################### DÜZENLEMESİ ZORUNLU ALANLAR #######################
	#
	## API Entegrasyon Bilgileri - Mağaza paneline giriş yaparak BİLGİ sayfasından alabilirsiniz.
	$merchant_id 	= $paytr['merchand_id'];
	$merchant_key 	= $paytr['merchand_key'];
	$merchant_salt	= $paytr['merchand_salt'];
	#
	## Müşterinizin sitenizde kayıtlı veya form vasıtasıyla aldığınız eposta adresi
	$email = $_POST['eposta'];
	#
	## Tahsil edilecek tutar.
	$payment_amount	= $_POST['fiyat'] * 100; //9.99 için 9.99 * 100 = 999 gönderilmelidir.
	#
	## Sipariş numarası: Her işlemde benzersiz olmalıdır!! Bu bilgi bildirim sayfanıza yapılacak bildirimde geri gönderilir.
	$merchant_oid =$siparis_id;
	#//böyle olacak
	## Müşterinizin sitenizde kayıtlı veya form aracılığıyla aldığınız ad ve soyad bilgisi
	$user_name = $_POST['adsoyad'];
	#
	## Müşterinizin sitenizde kayıtlı veya form aracılığıyla aldığınız adres bilgisi
	$user_address = $_POST['adres'];
	#
	## Müşterinizin sitenizde kayıtlı veya form aracılığıyla aldığınız telefon bilgisimerchant_oid
	$user_phone = $_POST['telefon'];
	#
	## Başarılı ödeme sonrası müşterinizin yönlendirileceği sayfa
	## !!! Bu sayfa siparişi onaylayacağınız sayfa değildir! Yalnızca müşterinizi bilgilendireceğiniz sayfadır!
	## !!! Siparişi onaylayacağız sayfa "Bildirim URL" sayfasıdır (Bakınız: 2.ADIM Klasörü).
	$merchant_ok_url = $paytr['ok_url'];
	#
	## Ödeme sürecinde beklenmedik bir hata oluşması durumunda müşterinizin yönlendirileceği sayfa
	## !!! Bu sayfa siparişi iptal edeceğiniz sayfa değildir! Yalnızca müşterinizi bilgilendireceğiniz sayfadır!
	## !!! Siparişi iptal edeceğiniz sayfa "Bildirim URL" sayfasıdır (Bakınız: 2.ADIM Klasörü).
	$merchant_fail_url = $paytr['fail_url'];
	#
	## Müşterinin sepet/sipariş içeriği
	$user_basket = "";
		$user_basket = base64_encode(json_encode(array(
		array("Örnek ürün 1", "18.00", 1), // 1. ürün (Ürün Ad - Birim Fiyat - Adet )
		array("Örnek ürün 2", "33.25", 2), // 2. ürün (Ürün Ad - Birim Fiyat - Adet )
		array("Örnek ürün 3", "45.42", 1)  // 3. ürün (Ürün Ad - Birim Fiyat - Adet )
	)));

	
	############################################################################################

	## Kullanıcının IP adresi
	if( isset( $_SERVER["HTTP_CLIENT_IP"] ) ) {
		$ip = $_SERVER["HTTP_CLIENT_IP"];
	} elseif( isset( $_SERVER["HTTP_X_FORWARDED_FOR"] ) ) {
		$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
	} else {
		$ip = $_SERVER["REMOTE_ADDR"];
	}

	## !!! Eğer bu örnek kodu sunucuda değil local makinanızda çalıştırıyorsanız
	## buraya dış ip adresinizi (https://www.whatismyip.com/) yazmalısınız. Aksi halde geçersiz paytr_token hatası alırsınız.
	$user_ip=$ip;
	##

	## İşlem zaman aşımı süresi - dakika cinsinden
	$timeout_limit = "30";

	## Hata mesajlarının ekrana basılması için entegrasyon ve test sürecinde 1 olarak bırakın. Daha sonra 0 yapabilirsiniz.
	$debug_on = 1;

    ## Mağaza canlı modda iken test işlem yapmak için 1 olarak gönderilebilir.
    $test_mode = $paytr['test_mode'];

	$no_installment	= 0; // Taksit yapılmasını istemiyorsanız, sadece tek çekim sunacaksanız 1 yapın

	## Sayfada görüntülenecek taksit adedini sınırlamak istiyorsanız uygun şekilde değiştirin.
	## Sıfır (0) gönderilmesi durumunda yürürlükteki en fazla izin verilen taksit geçerli olur.
	$max_installment = 0;

	$currency = "TL";
	
	####### Bu kısımda herhangi bir değişiklik yapmanıza gerek yoktur. #######
	$hash_str = $merchant_id .$user_ip .$merchant_oid .$email .$payment_amount .$user_basket.$no_installment.$max_installment.$currency.$test_mode;
	$paytr_token=base64_encode(hash_hmac('sha256',$hash_str.$merchant_salt,$merchant_key,true));
	$post_vals=array(
			'merchant_id'=>$merchant_id,
			'user_ip'=>$user_ip,
			'merchant_oid'=>$merchant_oid,
			'email'=>$email,
			'payment_amount'=>$payment_amount,
			'paytr_token'=>$paytr_token,
			'user_basket'=>$user_basket,
			'debug_on'=>$debug_on,
			'no_installment'=>$no_installment,
			'max_installment'=>$max_installment,
			'user_name'=>$user_name,
			'user_address'=>$user_address,
			'user_phone'=>$user_phone,
			'merchant_ok_url'=>$merchant_ok_url,
			'merchant_fail_url'=>$merchant_fail_url,
			'timeout_limit'=>$timeout_limit,
			'currency'=>$currency,
            'test_mode'=>$test_mode
		);
		
	 $urunidler=$_POST['urun_id'];
    $urunidler=implode(',',$urunidler);
    $siparisdurumu="Hazırlanıyor";
    
     $sepetid=$_POST['sepetid'];
    $sepetid=implode(',',$sepetid);
    
    $sipariskodu =rand(0,99999999);
    
 
    



    
    
    $siparisekle=$db->prepare("insert into siparisler set adres=:adres,siparis_notu=:siparis_notu,siparis_durumu=:siparis_durumu,siparis_kodu=:siparis_kodu,uye=:uye,adsoyad=:adsoyad,durum=:durum,paytr=:paytr,sepetid=:sepetid,tarih=:tarih,fiyat=:fiyat,urun=:urun,telefon=:telefon,eposta=:eposta");
    $siparis=$siparisekle->execute(array("adres"=>$_POST['adres'],"siparis_notu"=>$_POST['siparis_notu'],"siparis_kodu"=>$sipariskodu,"siparis_durumu"=>$siparisdurumu,"uye"=>$_POST['uye'],"adsoyad"=>$_POST['adsoyad'],"sepetid"=>$sepetid,"durum"=>"0","paytr"=>$merchant_oid,"tarih"=>$tarih,"fiyat"=>$_POST['fiyat'],"urun"=>$urunidler,"telefon"=>$_POST['telefon'],"eposta"=>$_POST['eposta']));
	
 
 
    




		
		

	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://www.paytr.com/odeme/api/get-token");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1) ;
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_vals);
	curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 20);
	
	 // XXX: DİKKAT: lokal makinanızda "SSL certificate problem: unable to get local issuer certificate" uyarısı alırsanız eğer
     // aşağıdaki kodu açıp deneyebilirsiniz. ANCAK, güvenlik nedeniyle sunucunuzda (gerçek ortamınızda) bu kodun kapalı kalması çok önemlidir!
     // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	 
	$result = @curl_exec($ch);

	if(curl_errno($ch))
		die("PAYTR IFRAME connection error. err:".curl_error($ch));

	curl_close($ch);
	
	$result=json_decode($result,1);
		
	if($result['status']=='success'){
		$token=$result['token'];
	
		
	}else {
		die("PAYTR IFRAME failed. reason:".$result['reason']);
	}
	#########################################################################





	?>


	<!-- Ödeme formunun açılması için gereken HTML kodlar / Başlangıç -->
    <script src="https://www.paytr.com/js/iframeResizer.min.js"></script>
    <iframe src="https://www.paytr.com/odeme/guvenli/<?php echo $token;?>" id="paytriframe" frameborder="0" scrolling="no" style="width: 100%;"></iframe>
	<script>iFrameResize({},'#paytriframe');</script>
	<!-- Ödeme formunun açılması için gereken HTML kodlar / Bitiş -->

</div>










</body>
</html>
