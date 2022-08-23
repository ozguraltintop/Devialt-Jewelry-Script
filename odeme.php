<?php 

include("admin/include/baglan.php");
include("admin/include/fonksiyonlar.php");
?>


<!doctype HTML>
<html lang="tr">
<head>
    <meta charset="UTF-8">



    <title>Ödeme Sayfası - <?=$ayar['site_title']?></title>

  		<meta charset="utf-8" />
		<meta name="description" content="<?=$des?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
      
		 <link rel="icon" type="image/png" href="resimler/<?=$favicon?>">
        <link href="assets/css/styles.css" rel="stylesheet">

</head>
<body class="preload">
    

<?php 

include("inc/header.php");

$id = $_POST['id'];

$urun=$db->query("select * from urunler where id='$id'")->fetch(PDO::FETCH_ASSOC);
class Paymax_light_api
{
	private $userName,$password,$shopCode,$hash;
	public function __construct($userName,$password,$shopCode,$hash)
	{
		$this->userName = "umuttamirci_api";
		$this->password = "526e3bfd3fa00949d4bad89d0c0143080015b3d7";
		$this->shopCode = "5719";
		$this->hash = "fx4mcMef";
	}
	private function hash_generate($string)
	{
		$hash = base64_encode(pack('H*',sha1($this->userName.$this->password.$this->shopCode.$string.$this->hash)));
		return $hash;
	}
	public function create_payment_link($order_data)
	{
		$post_data = array(
			'userName' => $this->userName,
			'password' => $this->password,
			'shopCode' => $this->shopCode,
			'productName' => $order_data['productName'],
			'productData' => $order_data['productData'],
			'productType' => $order_data['productType'],
			'productsTotalPrice' => $order_data['productsTotalPrice'],
			'orderPrice' => $order_data['orderPrice'],
			'currency' => $order_data['currency'],
			'orderId' => $order_data['orderId'],
			'locale' => $order_data['locale'],
			'conversationId' => $order_data['conversationId'],
			'buyerName' => $order_data['buyerName'],
			'buyerSurName' => $order_data['buyerSurName'],
			'buyerGsmNo' => $order_data['buyerGsmNo'],
			'buyerIp' => $order_data['buyerIp'],
			'buyerMail' => $order_data['buyerMail'],
			'buyerAdress' => $order_data['buyerAdress'],
			'buyerCountry' => $order_data['buyerCountry'],
			'buyerCity' => $order_data['buyerCity'],
			'buyerDistrict' => $order_data['buyerDistrict'],
			'callbackOkUrl' => 'https://www.utwebtasarim.com/odeme-tamamlandi',
			'callbackFailUrl' => 'https://www.utwebtasarim.com/odeme-tamamlanmadi',
		);
		$post_data['hash'] = $this->hash_generate($post_data['orderId'].$post_data['currency'].$post_data['orderPrice'].$post_data['productsTotalPrice'].$post_data['productType'].$post_data['callbackOkUrl'].$post_data['callbackFailUrl']);
		
		$response = $this->send_post('https://apiv1.paymax.com.tr/api/create-payment-link',$post_data);
		if ($response['status']=='success' && isset($response['payment_page_url']))
		{
			return $response;
		}
		else
		{
			print_r($response);
			/*Hatayı Sisteminiz için Yönetin ve Döndürün*/
		}
	}
	private function send_post($post_url,$post_data)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$post_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1) ;
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 20);
		curl_setopt($ch, CURLOPT_REFERER, $_SERVER['SERVER_NAME']);
		
		$response = array();
		if (curl_errno($ch))
		{
			/*Curl sırasında bir sorun oluştu*/
			$response = array(
				'status'=>'error',
				'errorMessage'=>'Curl Geçersiz bir cevap aldı',
			);
		}
		else
		{
			/*Curl Cevabını Alın*/
			$result_origin = curl_exec($ch);
			/*Curl Cevabını jsondan array'a dönüştür*/
			$result = json_decode($result_origin,true);
			if (is_array($result))
			{
				$response = (array) $result;
			}
			else
			{
				$response = array(
					'status'=>'error',
					'errorMessage'=>'Dönen cevap Array değildi',
				);
			}
		}
		curl_close($ch);
		return $response;
	}
}



/*Sınıfı Api bilgilerinizle başlatın*/
$paymax = new Paymax_light_api("umuttamirci_api","526e3bfd3fa00949d4bad89d0c0143080015b3d7","5719","fx4mcMef");
/*Sipariş Bilgilerinizi Tanımlayın*/
$order_data = array(
	'productName' => "UT WEB TASARIM",
	'productData' => array(
		array(
			'productName'=>"UT WEB TASARIM",
			'productPrice'=>$_POST['fiyat'],
			'productType'=>'FIZIKSEL_URUN',
		),
	),
	'productType' => 'FIZIKSEL_URUN',
	'productsTotalPrice' => $_POST['fiyat'],
	'orderPrice' => $_POST['fiyat'],
	'currency' => 'TRY',
	'orderId' => "UT".$urun['id'],
	'locale' => 'tr',
	'conversationId' => $urun['id'],
	'buyerName' => $_POST['adsoyad'],
	'buyerSurName' => 'tamirci',
	'buyerGsmNo' => $_POST['telefon'],
	'buyerIp' => $_SERVER['REMOTE_ADDR'],
	'buyerMail' => $_POST['email'],
	'buyerAdress' => '',
	'buyerCountry' => '',
	'buyerCity' => '',
	'buyerDistrict' => '',
);
/*Sipariş Bilgilerinizi link oluşturmak için sınıfa gönderin*/
$request = $paymax->create_payment_link($order_data);

if($request['status']=='success' && isset($request['payment_page_url']))
{
	/*status==success ve payment_page_url varsa başarılı bir işlem yürüttünüz*/
	$uid = $_POST['urun_id'];
	$uid = implode(',',$uid);
	
	$ekle =$db->prepare("insert into siparisler set adsoyad=:adsoyad,urun=:urun,telefon=:telefon,eposta=:eposta,fiyat=:fiyat,tarih=:tarih,durum=:durum,uye=:uye");
	$simdi =$ekle->execute(array("adsoyad"=>$order_data['buyerName'],"telefon"=>$order_data['buyerGsmNo'],"durum"=>"Ödendi","eposta"=>$order_data['buyerMail'],"urun"=>$uid,"fiyat"=>$_POST['fiyat'],"tarih"=>$tarih,"uye"=>$_POST['uye']));
	
	if($simdi){
	   	$odeme_link = $request['payment_page_url'];
	    	
	    	echo '<iframe src='.$odeme_link.' style="position:fixed; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;">';

	    
	}
	

}
else
{
	/*Hatalı bir cevap alındı*/
	echo 'Ödeme linki üretilirken bir sorun oluştu';
	print_r($request);
}

include("inc/footer.php");
?>



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

</body>
</html>















