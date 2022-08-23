<?php
include("include/baglan.php");
include("include/fonksiyonlar.php");


ob_start();
session_start();
oturumkontrolana();

if($_GET['sil']){
	$idd=$_GET['sil'];
	 
	 $resim_sorgu=$db->query("select * from siparisler where id='$idd'")->fetch(PDO::FETCH_ASSOC);
	 unlink('../resimler/'.$resim_sorgu['resim']);
	$simdi=$db->query("delete from siparisler where id='$idd'")->fetch(PDO::FETCH_ASSOC);
	
	


}
?>
<!DOCTYPE html>
<html lang="tr">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?=$ayar['site_description']?>">
        <meta name="keywords" content="<?=$ayar['site_keyword']?>">
        <meta name="author" content="<?=$ayar['site_author']?>">
        <link rel="icon" type="image/png" href="../resimler/<?=$ayar['favicon']?>">
        <title><?=$ayar['site_title']?></title>

 
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&amp;display=swap" rel="stylesheet">
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
        <link href="assets/plugins/apexcharts/apexcharts.css" rel="stylesheet">

      
       
        <link href="assets/css/main.min.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet">

        
    </head>
    <body>

        <div class="page-container">
            <div class="page-header">
                <?php include("include/header.php");?>
            </div>
            <?php include("include/menu.php");?>
            
            
         
            <div class="page-content">
              <div class="main-wrapper">
                  
                    <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body table-responsive">
                                <h5 class="card-title">Gelen Siparişler </h5>
                          
                                <table class="table invoice-table">
                                            <thead>
                                              <tr>
                                                <th scope="col">Sipariş Id</th>
                                                <th scope="col">Ad Soyad</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Ödeme Tutar  </th>
                                                  <th scope="col">Telefon</th>
                                                 <th scope="col">Tema Adı </th>
                                                 <th scope="col">Ödeme Durum  </th>
                                         
                                                <th scope="col">Eklenme Tarihi</th>
                                                <th scope="col">İşlem</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $urunlistele = $db->query("select * from siparisler order by id desc",PDO::FETCH_ASSOC);
											if($urunlistele->rowCount()){foreach($urunlistele as $urungoster){
											   
											?>
                                              <tr>
                                                <th scope="row"><?=$urungoster['id']?></th>
                                                <td><?=$urungoster['adsoyad']?>  </td>
                                                <td><?=$urungoster['eposta']?></td>
                                                  <td><?=$urungoster['fiyat']?>TL</td>
                                                  <td><?=$urungoster['telefon']?></td>
                                       <td><?php  $urunid = $urungoster['urun'];
											    $urunid = explode(',',$urunid);
											    foreach($urunid as $uid =>$deger)
											    {
											    $urunle=$db->query("select * from urunler where id='$deger'")->fetch(PDO::FETCH_ASSOC); echo $urunle['adi'];
											    
											   }?>
											   
											   
											   </td>
                                       <td><?php if($urungoster['durum']==0){ echo "Ödenmedi";}else{echo "Ödendi";}?></td>
                                                <td><span class="badge bg-primary"><?=$urungoster['tarih']?></span></td>
                                                <td>
                                                  <a href="siparis.php?islem=duzenle&id=<?=$urungoster['id']?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                               
                                                  <a href="?sil=<?=$urungoster['id']?>"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                              </tr>
                                              
                                              <?php } }?>
                                              
                                              
                                            </tbody>
                                          </table>
                            </div>
                        </div>      
                    </div>
                </div>
                <div class="row">
          
                  
                   <div class="col-md-6 col-xl-3">
                  <?php
                  $slidercek111 = $db->query("select * from urunler",PDO::FETCH_ASSOC);
				  if($slidercek111->rowCount()){foreach($slidercek111 as $slidergoster111){
				  }
				  }
				  $slidersay111 = $slidercek111->rowCount();
				  ?>
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Ürünler </h5>
                              <h2><?=$slidersay111?></h2>
                              <p>Toplam Ürün Kaydı(∞)</p>
                              <div class="progress">
                                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: <?=$slidersay111?>%" aria-valuenow="100000000" aria-valuemin="0" aria-valuemax="100000000"></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  
                  
                   
                   <div class="col-md-6 col-xl-3">
                  <?php
                  $slidercek111 = $db->query("select * from urun_kategori",PDO::FETCH_ASSOC);
				  if($slidercek111->rowCount()){foreach($slidercek111 as $slidergoster111){
				  }
				  }
				  $slidersay111 = $slidercek111->rowCount();
				  ?>
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Ürün Kategori </h5>
                              <h2><?=$slidersay111?></h2>
                              <p>Toplam Ürün Kategori Kaydı(∞)</p>
                              <div class="progress">
                                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: <?=$slidersay111?>%" aria-valuenow="100000000" aria-valuemin="0" aria-valuemax="100000000"></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  
                  
                  
                  
                   <div class="col-md-6 col-xl-3">
                  <?php
                  $kategoricek = $db->query("select * from referanslar",PDO::FETCH_ASSOC);
				  if($kategoricek->rowCount()){foreach($kategoricek as $kategorigoster){
				  }
				  }
				  $kategorisay = $kategoricek->rowCount();
				  ?>
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Referanslar </h5>
                              <h2><?=$kategorisay?></h2>
                              <p>Toplam Referans Kaydı(∞)</p>
                              <div class="progress">
                                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: <?=$kategorisay?>%" aria-valuenow="100000000" aria-valuemin="0" aria-valuemax="100000000"></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  
                  
                  <div class="col-md-6 col-xl-3">
                  <?php
                  $hizmetsec = $db->query("select * from hizmetler",PDO::FETCH_ASSOC);
				  if($hizmetsec->rowCount()){foreach($hizmetsec as $hizmetgoster){
				  }
				  }
				  $hizmetsay = $hizmetsec->rowCount();
				  ?>
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Hizmetler </h5>
                              <h2><?=$hizmetsay?></h2>
                              <p>Toplam Hizmet Kaydı(∞)</p>
                              <div class="progress">
                                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: <?=$hizmetsay?>%" aria-valuenow="100000000" aria-valuemin="0" aria-valuemax="100000000"></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  
                  
                   <div class="col-md-6 col-xl-3">
                  <?php
                  $habersec = $db->query("select * from haberler",PDO::FETCH_ASSOC);
				  if($habersec->rowCount()){foreach($habersec as $habergoster){
				  }
				  }
				  $habersay = $habersec->rowCount();
				  ?>
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Haberler </h5>
                              <h2><?=$habersay?></h2>
                              <p>Toplam Haber Kaydı(∞)</p>
                              <div class="progress">
                                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: <?=$habersay?>%" aria-valuenow="100000000" aria-valuemin="0" aria-valuemax="100000000"></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  
                  
                   <div class="col-md-6 col-xl-3">
                  <?php
                  $sayfasec = $db->query("select * from sayfalar",PDO::FETCH_ASSOC);
				  if($sayfasec->rowCount()){foreach($sayfasec as $sayfagoster){
				  }
				  }
				  $sayfasay = $sayfasec->rowCount();
				  ?>
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Sayfalar </h5>
                              <h2><?=$sayfasay?></h2>
                              <p>Toplam Sayfa Kaydı(∞)</p>
                              <div class="progress">
                                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: <?=$sayfasay?>%" aria-valuenow="100000000" aria-valuemin="0" aria-valuemax="100000000"></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  
                  
                  
                  
                 
                  
                  
                   <div class="col-md-6 col-xl-3">
                  <?php
                  $slidercek = $db->query("select * from slider",PDO::FETCH_ASSOC);
				  if($slidercek->rowCount()){foreach($slidercek as $slidergoster){
				  }
				  }
				  $slidersay = $slidercek->rowCount();
				  ?>
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Slider </h5>
                              <h2><?=$slidersay?></h2>
                              <p>Toplam Slider Kaydı(∞)</p>
                              <div class="progress">
                                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: <?=$slidersay?>%" aria-valuenow="100000000" aria-valuemin="0" aria-valuemax="100000000"></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  
                  
                  
                   <div class="col-md-6 col-xl-3">
                  <?php
                  $slidercek1 = $db->query("select * from sss",PDO::FETCH_ASSOC);
				  if($slidercek1->rowCount()){foreach($slidercek1 as $slidergoster1){
				  }
				  }
				  $slidersay1 = $slidercek1->rowCount();
				  ?>
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Sıkça Sorular Sorular </h5>
                              <h2><?=$slidersay1?></h2>
                              <p>Toplam S.S.S Kaydı(∞)</p>
                              <div class="progress">
                                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: <?=$slidersay1?>%" aria-valuenow="100000000" aria-valuemin="0" aria-valuemax="100000000"></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  
                  
                   
                   <div class="col-md-6 col-xl-3">
                  <?php
                  $slidercek11 = $db->query("select * from galeri",PDO::FETCH_ASSOC);
				  if($slidercek11->rowCount()){foreach($slidercek11 as $slidergoster11){
				  }
				  }
				  $slidersay11 = $slidercek11->rowCount();
				  ?>
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Galeri </h5>
                              <h2><?=$slidersay11?></h2>
                              <p>Toplam Galeri Kaydı(∞)</p>
                              <div class="progress">
                                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: <?=$slidersay11?>%" aria-valuenow="100000000" aria-valuemin="0" aria-valuemax="100000000"></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  
                  
                    <div class="col-md-6 col-xl-3">
                  <?php
                  $slidercek111 = $db->query("select * from video",PDO::FETCH_ASSOC);
				  if($slidercek111->rowCount()){foreach($slidercek111 as $slidergoster111){
				  }
				  }
				  $slidersay111 = $slidercek111->rowCount();
				  ?>
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Video </h5>
                              <h2><?=$slidersay111?></h2>
                              <p>Toplam Video Kaydı(∞)</p>
                              <div class="progress">
                                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: <?=$slidersay111?>%" aria-valuenow="100000000" aria-valuemin="0" aria-valuemax="100000000"></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  
                  
                   <div class="col-md-6 col-xl-3">
                  <?php
                  $slidercek111 = $db->query("select * from ekibimiz",PDO::FETCH_ASSOC);
				  if($slidercek111->rowCount()){foreach($slidercek111 as $slidergoster111){
				  }
				  }
				  $slidersay111 = $slidercek111->rowCount();
				  ?>
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Ekibimiz </h5>
                              <h2><?=$slidersay111?></h2>
                              <p>Toplam Ekibimiz Kaydı(∞)</p>
                              <div class="progress">
                                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: <?=$slidersay111?>%" aria-valuenow="100000000" aria-valuemin="0" aria-valuemax="100000000"></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  
                  
                    <div class="col-md-6 col-xl-3">
                  <?php
                  $slidercek111 = $db->query("select * from yorumlar",PDO::FETCH_ASSOC);
				  if($slidercek111->rowCount()){foreach($slidercek111 as $slidergoster111){
				  }
				  }
				  $slidersay111 = $slidercek111->rowCount();
				  ?>
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Müşteri Yorumu </h5>
                              <h2><?=$slidersay111?></h2>
                              <p>Toplam Müşteri Kaydı Kaydı(∞)</p>
                              <div class="progress">
                                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: <?=$slidersay111?>%" aria-valuenow="100000000" aria-valuemin="0" aria-valuemax="100000000"></div>
                              </div>
                        </div>
                    </div>
                  </div>
                  
                  
                  
                  
                </div>
                
                
              
              </div>
              
            </div>
        </div>
        
        <script src="assets/plugins/jquery/jquery-3.4.1.min.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
        <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="assets/js/main.min.js"></script>
        <script src="assets/js/pages/dashboard.js"></script>
    </body>
   <script src="https://use.fontawesome.com/ca9a29c061.js"></script>
</html>