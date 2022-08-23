<?php
include"baglan.php";
function oturumkontrolana(){
	 if (empty($_SESSION["eposta"])){
		 echo '<script language="javascript">window.location="giris.php";</script>'; die();
	 }
	 
}

function oturumkontrolana1(){
	 if (empty($_SESSION["email"])){
		 echo '<script language="javascript">window.location="giris-yap";</script>'; die();
	 }
	 
}
$tarih = date("d.m.Y");
$saat = date("H:i");


$ayar= $db->query("SELECT * FROM ayarlar Where id='1'")->fetch(PDO::FETCH_ASSOC);

$sayfa= $db->query("SELECT * FROM sayfalar Where seo='hakkimizda'")->fetch(PDO::FETCH_ASSOC);
$iletisim= $db->query("SELECT * FROM iletisimbilgileri Where id='1'")->fetch(PDO::FETCH_ASSOC);

$sosyal= $db->query("SELECT * FROM sosyalmedya Where id='1'")->fetch(PDO::FETCH_ASSOC);

$paytr= $db->query("SELECT * FROM paytr Where id='1'")->fetch(PDO::FETCH_ASSOC);
$idd=$_SESSION['id'];
$hesabim=$db->query("select * from yonetici where id='$idd'")->fetch(PDO::FETCH_ASSOC);

$smtp=$db->query("select * from mail where id='1'")->fetch(PDO::FETCH_ASSOC);

$title = $ayar['site_title'];
$des = $ayar['site_description'];
$logo = $ayar['logo'];
$footerlogo = $ayar['footer_logo'];
$favicon  =$ayar['favicon'];
$telefon1 = $iletisim['telefon1'];
$telefon2 = $iletisim['telefon2'];
$adres1 = $iletisim['adres1'];
$adres2 = $iletisim['adres2'];
$email1 = $iletisim['email1'];
$email2 = $iletisim['email2'];
$copyright = $ayar['footer_copyright'];
$whatsapp = $iletisim['whatsapp'];
$googlemaps = $iletisim['google_maps'];
$slidercek= $db->query("SELECT * FROM slider Where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
$etiketcek= $db->query("SELECT * FROM etiket Where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
$hizmetcek= $db->query("SELECT * FROM hizmetler Where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
$ekipcek= $db->query("SELECT * FROM ekibimiz Where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
$yorumcek= $db->query("SELECT * FROM yorumlar Where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
$refcek= $db->query("SELECT * FROM referanslar Where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
$blogcek= $db->query("SELECT * FROM haberler Where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
$habercek3= $db->query("SELECT * FROM haberler Where durum='on' order by id desc limit 3")->fetchAll(PDO::FETCH_ASSOC);
$sayfacek= $db->query("SELECT * FROM sayfalar Where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
$ssscek= $db->query("SELECT * FROM sss Where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
$uruncek= $db->query("SELECT * FROM urunler Where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
$galericek= $db->query("SELECT * FROM galeri Where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
$istatikcek= $db->query("SELECT * FROM istatik Where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
$kategoricek= $db->query("SELECT * FROM urun_kategori Where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);


if(isset($_POST['iletisim-formu'])){
	
	$ekle = $db->prepare("insert into iletisimler set adsoyad=:adsoyad,konu=:konu,telefon=:telefon,mesaj=:mesaj,email=:email,tarih=:tarih");
	$hemen = $ekle->execute(array("adsoyad"=>$_POST['adsoyad'],"konu"=>$_POST['konu'],"telefon"=>$_POST['telefon'],"mesaj"=>$_POST['mesaj'],"tarih"=>$tarih,"email"=>$_POST['email']));
	
	if($hemen){
      
       include '../../class.phpmailer.php';
								$mail = new PHPMailer();
								$mail->IsSMTP();
								$mail->Host = $smtp['site_mail_host'];
                                $mail->Port = $smtp['site_mail_port'];
                                $mail->SMTPAuth = true;
                                $mail->SMTPSecure = 'ssl';
								$mail->Username = $smtp['site_mail'];
								$mail->Password = $smtp['site_mail_sifre'];
								$mail->SetFrom($mail->Username, "İletişim Formu");
								$mail->AddAddress($smtp['gonderen_mail'], $title);
								$mail->CharSet = 'UTF-8';
								$mail->Subject = $_POST['konu'];
								$mail->MsgHTML('İsim:'.$_POST["adsoyad"].'<br/>
												Konu:'.$_POST["konu"].'<br/>
												Telefon:'.$_POST["telefon"].'<br/>
													Mesaj:'.$_POST["mesaj"].'<br/>
												Email:'.$_POST["email"].'<br/>
												Tarih:' .$tarih. '<br/>');
					if($mail->Send()) 
					
					{ echo 
					
					' <br>  &nbsp;  &nbsp;&nbsp;  
					<font style="color:#24b802; font-size:16px;">  Mesajınız başarıyla gönderildi.   </font>
					<br><br>' 
					
					;} 
					
					
					else 
					{ 
					
					echo '<br> &nbsp; &nbsp; 
					
					<font style="color:#FF0004; font-size:16px;">  Mesaj gönderirken bir hata oluştu ve girmiş olduğunuz bilgiler alınamadı. </font> 
					
					<br><br>'. $mail->ErrorInfo;  
 					}
      
		header("location:".$_POST['link'].'?durum=Gönderildi');
		
		
	}else {
		header("location:".$_POST['link'].'?durum=Gönderilmedi');
	}
}


if(isset($_POST['sepet-ekle'])){
    
    $fiyat = $_POST['adet']*$_POST['fiyat'];
    $ekle = $db->prepare("insert into sepet set urun=:urun,ip=:ip,adet=:adet,tekfiyat=:tekfiyat,fiyat=:fiyat,varyant=:varyant");
    $hemen = $ekle->execute(array("urun"=>$_POST['urun'],"ip"=>$_POST['ip'],"adet"=>$_POST['adet'],"tekfiyat"=>$_POST['fiyat'],"fiyat"=>$fiyat,"varyant"=>$_POST['varyant']));
    if($hemen){
        	header("location:".$_POST['link'].'?durum=Basarili');
	}else {
		header("location:".$_POST['link'].'?durum=Basarisiz');
	
    }
    
}



if(isset($_POST['favori-ekle'])){
    
   if($sec = $db->query("select * from favori where urun='{$_POST["urun"]}' and ip='{$_POST["ip"]}'")->fetch(PDO::FETCH_ASSOC)){
       header("location:".$_POST['link'].'?durum=Basarisiz');
   }else {
    $ekle = $db->prepare("insert into favori set urun=:urun,ip=:ip");
    $hemen = $ekle->execute(array("urun"=>$_POST['urun'],"ip"=>$_POST['ip']));
    if($hemen){
        	header("location:".$_POST['link'].'?durum=Basarili');
	}else {
		header("location:".$_POST['link'].'?durum=Basarisiz');
	
    }
}
}

if(isset($_POST['favori-sil'])){
    
     $id =$_POST['id'];
    $sepet =$db->query("delete from favori where id='$id'")->fetch(PDO::FETCH_ASSOC);
    if($sepet){
         header("location:".$_POST['link'].'?durum=Silindi');
    }else{
         header("location:".$_POST['link'].'?durum=Silinmedi');
    }
    
}


if(isset($_POST['sepet-sil'])){
    
     $id =$_POST['id'];
    $sepet =$db->query("delete from sepet where id='$id'")->fetch(PDO::FETCH_ASSOC);
    if($sepet){
         header("location:".$_POST['link'].'?durum=Silindi');
    }else{
         header("location:".$_POST['link'].'?durum=tSilinmedi');
    }
    
}






if(isset($_POST['kayit-ol'])){
    $e=$_POST['email'];
    $esitle=$db->query("select * from uyeler where email='$e'")->fetch(PDO::FETCH_ASSOC);
    
    if($esitle){
        
        	header("location:".$_POST['link'].'?durum=EpostaKayitli');
    }else {
    
    $sifre = sha1($_POST['sifre']);
  $ekle =$db->prepare("insert into uyeler set adsoyad=:adsoyad,email=:email,telefon=:telefon,sifre=:sifre,normalsifre=:normalsifre,tarih=:tarih");
  $simdi = $ekle->execute(array("adsoyad"=>$_POST['adsoyad'],"email"=>$_POST['email'],"telefon"=>$_POST['telefon'],"sifre"=>$sifre,"normalsifre"=>$_POST['sifre'],"tarih"=>$tarih));
  
  	if($simdi){
		header("location:".$_POST['link'].'?durum=KayitOlundu');
	}else {
		header("location:".$_POST['link'].'?durum=KayitOlunmadi');
	}
	
} }


if(isset($_POST['profil-guncelle'])){
    
      $id = $_POST['id'];
    $esle =$db->query("select * from uyeler where id='$id'")->fetch(PDO::FETCH_ASSOC);
    
    if($_POST['eskisifre']==''){
        
         $sifre = sha1($_POST['sifre']);
  $ekle =$db->prepare("update uyeler set adsoyad=:adsoyad,email=:email,telefon=:telefon where id=:id");
  $simdi = $ekle->execute(array("adsoyad"=>$_POST['adsoyad'],"email"=>$_POST['email'],"telefon"=>$_POST['telefon'],"id"=>$id));
  
  	if($simdi){
		header("location:".$_POST['link'].'?durum=Guncellendi');
	}else {
		header("location:".$_POST['link'].'?durum=Guncellenmedi');
	}
        
    }
  
    else if($_POST['eskisifre']==$esle['normalsifre']){
    $sifre = sha1($_POST['sifre']);
  $ekle =$db->prepare("update uyeler set adsoyad=:adsoyad,email=:email,telefon=:telefon,sifre=:sifre,normalsifre=:normalsifre where id=:id");
  $simdi = $ekle->execute(array("adsoyad"=>$_POST['adsoyad'],"email"=>$_POST['email'],"telefon"=>$_POST['telefon'],"sifre"=>$sifre,"normalsifre"=>$_POST['sifre'],"id"=>$id));
  
  	if($simdi){
		header("location:".$_POST['link'].'?durum=Guncellendi');
	}else {
		header("location:".$_POST['link'].'?durum=Guncellenmedi');
	}
	
}else {
       header("location:".$_POST['link'].'?durum=SifrenizYanlis'); 
}

}

if (isset($_POST['giris-yap'])) {
    
    ob_start();
session_start();


 $sifre = sha1($_POST['sifre']);
	$sorgu=$db->prepare("SELECT * FROM uyeler WHERE email=:email AND sifre=:sifre");
	$sorgu->execute(array(
		'email' => $_POST['email'],
		'sifre' => ($sifre)
	));
	$sonuc=$sorgu->rowcount();
	$kullanici=$sorgu->fetch(PDO::FETCH_ASSOC);

	if ($sonuc==0) {
		header("location: ../../giris-yap?HesapBulunamadi");
        
	} else {
		$_SESSION['adsoyad'] = $kullanici['adsoyad'];
		$_SESSION['email'] = $kullanici['email'];
		$_SESSION['id'] = $kullanici['id'];
       
		header("location:../../hesabim");
	}
	exit;
}





if(isset($_POST['yorum-ekle'])){
    $yorum =$db->prepare("insert into urun_yorum set uye=:uye,yorum=:yorum,tarih=:tarih,urun_id=:urun_id");
    $ekle = $yorum->execute(array("uye"=>$_POST['uye'],"yorum"=>$_POST['yorum'],"tarih"=>$tarih,"urun_id"=>$_POST['urun_id']));
     if($ekle){
         header("location:".$_POST['link'].'?durum=YorumYap覺ld覺');
    }else{
         header("location:".$_POST['link'].'?durum=YorumYap覺lmad覺');
    }
    
}



if(isset($_POST['siparis-guncelle'])){
    
    $siparis = $db->prepare("update siparisler set kargotakipno=:kargotakipno,kargoadi=:kargoadi,siparis_durumu=:siparis_durumu where id=:id");
    $ekle = $siparis->execute(array("kargotakipno"=>$_POST['kargotakipno'],"kargoadi"=>$_POST['kargoadi'],"siparis_durumu"=>$_POST['siparis_durumu'],"id"=>$_POST['id']));
     if($ekle){
         
          include '../../class.phpmailer.php';
								$mail = new PHPMailer();
								$mail->IsSMTP();
								$mail->Host = $smtp['site_mail_host'];
                                $mail->Port = $smtp['site_mail_port'];
                                $mail->SMTPAuth = true;
                                $mail->SMTPSecure = 'ssl';
								$mail->Username = $smtp['site_mail'];
								$mail->Password = $smtp['site_mail_sifre'];
								$mail->SetFrom($mail->Username, "Sipariş Hatırlatma");
								$mail->AddAddress($_POST['email'], $title);
								$mail->CharSet = 'UTF-8';
								$mail->Subject = "Sipariş Hatırlatma";
								$mail->MsgHTML('Sitemizden vermiş olduğunuz siparişiniz:'.$_POST['siparis_durumu']);
					if($mail->Send()) 
					
					{ echo 
					
					' <br>  &nbsp;  &nbsp;&nbsp;  
					<font style="color:#24b802; font-size:16px;">  Mesajınız başarıyla gönderildi.   </font>
					<br><br>' 
					
					;} 
					
					
					else 
					{ 
					
					echo '<br> &nbsp; &nbsp; 
					
					<font style="color:#FF0004; font-size:16px;">  Mesaj gönderirken bir hata oluştu ve girmiş olduğunuz bilgiler alınamadı. </font> 
					
					<br><br>'. $mail->ErrorInfo;  
 					}
         header("location:".$_POST['link'].'?durum=Guncellendi');
    }else{
         header("location:".$_POST['link'].'?durum=Guncellenmedi');
    }
    
    
}






/*
$idd=$hizmetd_dizi["id"];
$ip=$_SERVER["REMOTE_ADDR"];
$sor=$db->query("select * from ip_adresi where ip='$ip' and urun_id='$idd'")->fetch(PDO::FETCH_ASSOC);
	if($sor==false){
		if($sor["urun_id"]!=$hizmetd_dizi["id"]){
		$urun_id=$hizmetd_dizi["id"];
		$query=$db->prepare("insert into ip_adresi set ip = :ip, urun_id = :urun_id, zaman = :zaman");
		$insert=$query->execute(array("ip" =>$ip, "urun_id" =>$urun_id, "zaman" =>$tarih ));	
		
		$hitsayisi=$hizmetd_dizi["hit"]+1;
		
		
		$artir = $db->prepare("UPDATE hizmetler SET
		hit = :hit
		WHERE id = :id");
		$update = $artir->execute(array(
			 "hit" => $hitsayisi,
			 "id" => $id
		));
		}
	}
*/



?>