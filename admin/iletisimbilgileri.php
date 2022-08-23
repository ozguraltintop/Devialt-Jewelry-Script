<?php
include("include/baglan.php");
include("include/fonksiyonlar.php");

ob_start();
session_start();
oturumkontrolana();

if($_POST['kaydet']){
	
	$telefon1= $_POST['telefon1'];
	$telefon2=$_POST['telefon2'];
	$adres1= $_POST['adres1'];
	$adres2 = $_POST['adres2'];
	$email1 = $_POST['email1'];
	$email2 = $_POST['email2'];
	
	$google_maps=$_POST['google_maps'];
	$id=1;
	
	$simdi =$db->prepare("update iletisimbilgileri set whatsapp=:whatsapp,yanreklam=:yanreklam,google_maps=:google_maps,telefon1=:telefon1,telefon2=:telefon2,adres1=:adres1,adres2=:adres2,email1=:email1,email2=:email2 where id=:id");
	$hemen = $simdi->execute(array("whatsapp"=>$_POST['whatsapp'],"yanreklam"=>$_POST['yanreklam'],"google_maps"=>$google_maps,"telefon1"=>$telefon1,"telefon2"=>$telefon2,"adres1"=>$adres1,"adres2"=>$adres2,"email1"=>$email1,"email2"=>$email2,"id"=>$id));

}

$i = $db->query("select * from iletisimbilgileri where id='1'")->fetch(PDO::FETCH_ASSOC);
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
        <title>İletişim Bilgileri - <?=$ayar['site_title']?></title>


        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&amp;display=swap" rel="stylesheet">
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">

   
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
                                <div class="card-body">
                                    <h5 class="card-title">İletişim Bilgileri</h5>
                                    <p class="card-description">Lütfen boş alan bırakmayın.</p>
                                    <?=$mesaj?>
                                    <form method="post" enctype="multipart/form-data" >
                           
                            
                                             <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class=" fa fa-phone"></i></span>
                                        <input type="text" class="form-control" name="telefon1" placeholder="Telefon 1" value="<?=$i['telefon1']?>" aria-label="Telefon 1" aria-describedby="basic-addon1">
                                      </div>
                                      
                                             <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class=" fa fa-phone"></i></span>
                                        <input type="text" class="form-control" name="telefon2" placeholder="Telefon 2" aria-label="Telefon 2" value="<?=$i['telefon2']?>"  aria-describedby="basic-addon1">
                                      </div>
                                      
                                      <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class=" fa fa-whatsapp"></i></span>
                                        <input type="text" class="form-control" name="whatsapp" placeholder="Whatsapp" aria-label="Whatsapp" value="<?=$i['whatsapp']?>"  aria-describedby="basic-addon1">
                                      </div>
                                      
                                      
                                           <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class=" fa fa-envelope"></i></span>
                                        <input type="text" class="form-control" name="email1" placeholder="Email 1"  value="<?=$i['email1']?>" aria-label="Email 1" aria-describedby="basic-addon1">
                                      </div>
                                      
                                      <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class=" fa fa-envelope"></i></span>
                                        <input type="text" class="form-control" name="email2" placeholder="Email 2"  value="<?=$i['email2']?>" aria-label="Email 2" aria-describedby="basic-addon1">
                                      </div>
                                      
                                           <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class=" fa fa-map-marker"></i></span>
                                        <input type="text" class="form-control" name="adres1" placeholder="Adres 1" value="<?=$i['adres1']?>"  aria-label="Adres 1" aria-describedby="basic-addon1">
                                      </div>
                                      
                                               <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class=" fa fa-map-marker"></i></span>
                                        <input type="text" class="form-control" name="adres2" placeholder="Adres 2"  value="<?=$i['adres2']?>" aria-label="Adres 2" aria-describedby="basic-addon1">
                                      </div>
                                      
                                      
                                      <div class="input-group">
                                        <span class="input-group-text">Google Maps</span>
                                        <textarea class="form-control" name="google_maps" aria-label="Google Maps"><?=$i['google_maps']?></textarea>
                                      </div>
                                             <br>
                                         <div class="input-group">
                                        <span class="input-group-text">Yan Reklam  </span>
                                        <textarea class="form-control" name="yanreklam" aria-label="Yan Reklam"><?=$i['yanreklam']?></textarea>
                                      </div>
                                      
                                      <br><br>
                                      
                                      
                                      
                                      
                                    
                                      
                                      
                                      
                                  
                                      
                                    
                                      
                                       
                                       
                                       
                                       
                                       
                                    
                                      
                                      

                                      
                                      
                                        <div class="mb-3">
                                 
                                           <input type="submit" name="kaydet" class="btn btn-primary" value="Kaydet">
                                      </div>
                                      </div>
                                        
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                  
                    
                    
                    
                    
                    


                </div>
                                  
                </div>
              
            </div>
         <script src="ckeditor-2/ckeditor.js"></script>
        <script src="assets/plugins/jquery/jquery-3.4.1.min.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
        <script src="assets/js/main.min.js"></script>
        
        
	
        <script src="https://use.fontawesome.com/ca9a29c061.js"></script>

    </body>

</html>