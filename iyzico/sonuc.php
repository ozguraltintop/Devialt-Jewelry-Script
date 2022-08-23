<?php

ob_start();
session_start();
require_once('iyzico/config.php');
require_once('../admin/include/baglan.php');
require_once('../admin/include/fonksiyonlar.php');
 $token=$_POST['token'];
$siparis_no=$_GET['siparis_no'];


$request = new \Iyzipay\Request\RetrieveCheckoutFormRequest();
$request->setLocale(\Iyzipay\Model\Locale::TR);
$request->setConversationId("$siparis_no");
$request->setToken("$token");
$checkoutForm = \Iyzipay\Model\CheckoutForm::retrieve($request, Config::options());

//print_r($checkoutForm->getStatus());
echo $odeme_durum=$checkoutForm->getPaymentStatus();
echo "<br>";
//gonderılen orderid
$orderid=$checkoutForm->getbasketId();




if ($odeme_durum=="FAILURE") {
	
	$query = $db->prepare("SELECT * FROM siparisler where paytr=:paytr LIMIT 1");
        $gel = $query->execute(array(":paytr"=>$_GET['id']));
        $gel = $query->fetch(PDO::FETCH_ASSOC);
    	$islem1 = $db->prepare("UPDATE siparisler SET durum = ?  WHERE id = ?");
            $islem11 = $islem1->execute(array("0",$gel['id']));
            
            echo '<meta http-equiv="refresh" content="0;URL=../siparis-tamamlanmadi">
';
            


} elseif ($odeme_durum=="SUCCESS") {

		$query = $db->prepare("SELECT * FROM siparisler where paytr=:paytr LIMIT 1");
        $gel = $query->execute(array(":paytr"=>$_GET['id']));
        $gel = $query->fetch(PDO::FETCH_ASSOC);
        
         	$islem = $db->prepare("UPDATE siparisler SET durum = ? WHERE id = ?");
            $islem = $islem->execute(array("1",$gel['id']));
            
 echo '<meta http-equiv="refresh" content="0;URL=../siparis-tamamlandi">
';

	
}
?>
