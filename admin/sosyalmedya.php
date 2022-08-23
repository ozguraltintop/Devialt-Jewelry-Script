<?php
include("include/baglan.php");
include("include/fonksiyonlar.php");


ob_start();
session_start();
oturumkontrolana();

if($_POST['kaydet']){
	

$id = 1;

$ekle = $db->prepare("update sosyalmedya set telegram=:telegram,whatsapp=:whatsapp,instagram=:instagram,twitter=:twitter,facebook=:facebook,linkedin=:linkedin,youtube=:youtube where id=:id");
$hemen = $ekle->execute(array("telegram"=>$_POST['telegram'],"whatsapp"=>$_POST['whatsapp'],"instagram"=>$_POST['instagram'],"twitter"=>$_POST['twitter'],"facebook"=>$_POST['facebook'],"linkedin"=>$_POST['linkedin'],"youtube"=>$_POST['youtube'],"id"=>$id));
}


$s = $db->query("select * from sosyalmedya where id='1'")->fetch(PDO::FETCH_ASSOC);

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
        <title>Sosyal Medya -  <?=$ayar['site_title']?></title>
        
   



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
                                    <h5 class="card-title">Sosyal Medya</h5>
                                    <p class="card-description">Lütfen boş alan bırakmayın.</p>
                                    <?=$mesaj?>
                                    <form method="post" enctype="multipart/form-data" >
                                   
                                      
                                      <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class=" fa fa-facebook"></i></span>
                                        <input type="text" class="form-control" name="facebook" placeholder="Facebook" value="<?=$s['facebook']?>" aria-label="Facebook" aria-describedby="basic-addon1">
                                      </div>
                                      
                                           <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class=" fa fa-instagram"></i></span>
                                        <input type="text" class="form-control" name="instagram" placeholder="İnstagram" value="<?=$s['instagram']?>"  aria-describedby="basic-addon1">
                                      </div>
                                       
                                           <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class=" fa fa-youtube"></i></span>
                                        <input type="text" class="form-control" name="youtube" placeholder="youtube"  value="<?=$s['youtube']?>" aria-label="Youtube" aria-describedby="basic-addon1">
                                      </div>
                                      
                                      
                                       <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class=" fa fa-twitter"></i></span>
                                        <input type="text" class="form-control" name="twitter" placeholder="twitter"  value="<?=$s['twitter']?>" aria-label="twitter" aria-describedby="basic-addon1">
                                      </div>
                                      
                                        <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class=" fa fa-whatsapp"></i></span>
                                        <input type="text" class="form-control" name="whatsapp" placeholder="whatsapp"  value="<?=$s['whatsapp']?>" aria-label="whatsapp" aria-describedby="basic-addon1">
                                      </div>
                                      
                                       <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class=" fa fa-telegram"></i></span>
                                        <input type="text" class="form-control" name="telegram" placeholder="telegram"  value="<?=$s['telegram']?>" aria-label="telegram" aria-describedby="basic-addon1">
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