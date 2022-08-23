<?php
include("include/baglan.php");
include("include/fonksiyonlar.php");

ob_start();
session_start();
oturumkontrolana();

if($_POST['kaydet']){
	
	
	
	$id = 1;
	
	






	
	
$gonderen_mail=$_POST['gonderen_mail'];
$site_mail=$_POST['site_mail'];	
$site_mail_sifre=$_POST['site_mail_sifre'];
$site_mail_host=$_POST['site_mail_host'];	
$site_mail_port =$_POST['site_mail_port'];

$ekle = $db->prepare("update mail set gonderen_mail=:gonderen_mail,site_mail=:site_mail,site_mail_sifre=:site_mail_sifre,site_mail_host=:site_mail_host,site_mail_port=:site_mail_port where id=:id");

$simdi = $ekle->execute(array("gonderen_mail"=>$gonderen_mail,"site_mail"=>$site_mail,"site_mail_sifre"=>$site_mail_sifre,"site_mail_host"=>$site_mail_host,"site_mail_port"=>$site_mail_port,"id"=>$id));



	
}


$guncelle = $db->query("select * from mail where id='1'")->fetch(PDO::FETCH_ASSOC);



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
        <title>Mail Ayarları - <?=$ayar['site_title']?></title>




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
                                    <h5 class="card-title">Mail Ayarları</h5>
                                    <p class="card-description">Lütfen boş alan bırakmayın.</p>
                                    <?=$mesaj?>
                                    <form method="post" enctype="multipart/form-data" >
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="site_mail" placeholder="Site Mail" value="<?=$guncelle['site_mail']?>">
                                        <label for="floatingInput">Site Mail</label>
                                      </div>
                                      
                                      
                                          <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="site_mail_sifre" placeholder="Site Mail Şifre" value="<?=$guncelle['site_mail_sifre']?>">
                                        <label for="floatingInput">Site Mail Şifre</label>
                                      </div>
                                      
                                           <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="site_mail_host" placeholder="Site Mail Host" value="<?=$guncelle['site_mail_host']?>">
                                        <label for="floatingInput">Site Mail Host</label>
                                      </div>
                                      
                                       <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="site_mail_port" placeholder="Site Meta" value="<?=$guncelle['site_mail_port']?>">
                                        <label for="floatingInput">Site Mail Port</label>
                                      </div>
                                      
                                      
                                      
                                      
                                          <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="gonderen_mail" placeholder="Footer Copyright " value="<?=$guncelle['gonderen_mail']?>">
                                        <label for="floatingInput">Gonderen Mail </label>
                                      </div>
                                      
                                      
                                
                                 
                                  
                                    
                                      
                                      
                                    
                                      
                                      
                                      
                                  
                                      
                                    
                                      
                                       
                                       
                                       
                                       
                                       
                                    
                                      
                                      

                                      
                                      
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