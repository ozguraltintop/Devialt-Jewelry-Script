<?php


include "../admin/include/baglan.php";
include "../admin/include/fonksiyonlar.php";

ob_start();
session_start();
	## 2. ADIM için örnek kodlar ##

	## ÖNEMLİ UYARILAR ##
	## 1) Bu sayfaya oturum (SESSION) ile veri taşıyamazsınız. Çünkü bu sayfa müşterilerin yönlendirildiği bir sayfa değildir.
	## 2) Entegrasyonun 1. ADIM'ında gönderdiğniz merchant_oid değeri bu sayfaya POST ile gelir. Bu değeri kullanarak
	## veri tabanınızdan ilgili siparişi tespit edip onaylamalı veya iptal etmelisiniz.
	## 3) Aynı sipariş için birden fazla bildirim ulaşabilir (Ağ bağlantı sorunları vb. nedeniyle). Bu nedenle öncelikle
	## siparişin durumunu veri tabanınızdan kontrol edin, eğer onaylandıysa tekrar işlem yapmayın. Örneği aşağıda bulunmaktadır.

	$post = $_POST;

	####################### DÜZENLEMESİ ZORUNLU ALANLAR #######################
	#
	## API Entegrasyon Bilgileri - Mağaza paneline giriş yaparak BİLGİ sayfasından alabilirsiniz.
	$merchant_id 	= "282110";
	$merchant_key 	= "6aLkUEHjQEx7Me1y";
	$merchant_salt	= "u9bz54cCwWgCDN3d";
	###########################################################################

	####### Bu kısımda herhangi bir değişiklik yapmanıza gerek yoktur. #######
	#
	## POST değerleri ile hash oluştur.
	$hash = base64_encode( hash_hmac('sha256', $post['merchant_oid'].$merchant_salt.$post['status'].$post['total_amount'], $merchant_key, true) );
	#
	## Oluşturulan hash'i, paytr'dan gelen post içindeki hash ile karşılaştır (isteğin paytr'dan geldiğine ve değişmediğine emin olmak için)
	## Bu işlemi yapmazsanız maddi zarara uğramanız olasıdır.
	if( $hash != $post['hash'] )
		die('PAYTR notification failed: bad hash');
	###########################################################################

	## BURADA YAPILMASI GEREKENLER
	## 1) Siparişin durumunu $post['merchant_oid'] değerini kullanarak veri tabanınızdan sorgulayın.
	## 2) Eğer sipariş zaten daha önceden onaylandıysa veya iptal edildiyse  echo "OK"; exit; yaparak sonlandırın.

	/* Sipariş durum sorgulama örnek
 	   $durum = SQL
	   if($durum == "onay" || $durum == "iptal"){
			echo "OK";
			exit;
		}
	 */

	if( $post['status'] == 'success' ) { ## Ödeme Onaylandı


		## BURADA YAPILMASI GEREKENLER
		## 1) Siparişi onaylayın.
		## 2) Eğer müşterinize mesaj / SMS / e-posta gibi bilgilendirme yapacaksanız bu aşamada yapmalısınız.
		## 3) 1. ADIM'da gönderilen payment_amount sipariş tutarı taksitli alışveriş yapılması durumunda
		## değişebilir. Güncel tutarı $post['total_amount'] değerinden alarak muhasebe işlemlerinizde kullanabilirsiniz.
		
		$query = $db->prepare("SELECT * FROM siparisler where paytr=:paytr LIMIT 1");
        $gel = $query->execute(array(":paytr"=>$post['merchant_oid']));
        $gel = $query->fetch(PDO::FETCH_ASSOC);

        if($gel){
          
            
        	$islem = $db->prepare("UPDATE siparisler SET durum = ? WHERE id = ?");
            $islem = $islem->execute(array("1",$gel['id']));
            echo "OK";
        }
		

	} else { ## Ödemeye Onay Verilmedi
	
	
		$query = $db->prepare("SELECT * FROM siparisler where paytr=:paytr LIMIT 1");
        $gel = $query->execute(array(":paytr"=>$post['merchant_oid']));
        $gel = $query->fetch(PDO::FETCH_ASSOC);
    	$islem1 = $db->prepare("UPDATE siparisler SET durum = ?  WHERE id = ?");
            $islem11 = $islem1->execute(array("0",$gel['id']));
            
            
            
          
            
      
                    
                    
            echo "OK";

		## BURADA YAPILMASI GEREKENLER
		## 1) Siparişi iptal edin.
		## 2) Eğer ödemenin onaylanmama sebebini kayıt edecekseniz aşağıdaki değerleri kullanabilirsiniz.
		## $post['failed_reason_code'] - başarısız hata kodu
		## $post['failed_reason_msg'] - başarısız hata mesajı

	}

	## Bildirimin alındığını PayTR sistemine bildir.

	exit;
?>