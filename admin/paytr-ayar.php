<?php
include("include/baglan.php");
include("include/fonksiyonlar.php");

ob_start();
session_start();
oturumkontrolana();

if($_POST['kaydet']){
	
	
	
	$id = 1;
	
	








$ekle = $db->prepare("update paytr set test_modu=:test_modu,ok_url=:ok_url,fail_url=:fail_url,merchand_id=:merchand_id,merchand_key=:merchand_key,merchand_salt=:merchand_salt where id=:id");

$simdi = $ekle->execute(array("test_modu"=>$_POST['test_modu'],"fail_url"=>$_POST['fail_url'],"ok_url"=>$_POST['ok_url'],"merchand_id"=>$_POST['merchand_id'],"merchand_key"=>$_POST['merchand_key'],"merchand_salt"=>$_POST['merchand_salt'],"id"=>$id));



	
}


$guncelle = $db->query("select * from paytr where id='1'")->fetch(PDO::FETCH_ASSOC);



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
        <title>PayTr Ayarları - <?=$ayar['site_title']?></title>




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
                                    <h5 class="card-title">PayTr Ayarları</h5>
                                    <p class="card-description">Lütfen boş alan bırakmayın.</p>
                                    <?=$mesaj?>
                                    <form method="post" enctype="multipart/form-data" >
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="merchand_id" placeholder="Site Mail" value="<?=$guncelle['merchand_id']?>">
                                        <label for="floatingInput">PayTr Merchant Id </label>
                                      </div>
                                      
                                      
                                          <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="merchand_key" placeholder="Site Mail Şifre" value="<?=$guncelle['merchand_key']?>">
                                        <label for="floatingInput">PayTr Merchant Key</label>
                                      </div>
                                      
                                      <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="merchand_salt" placeholder="Site Mail Host" value="<?=$guncelle['merchand_salt']?>">
                                        <label for="floatingInput">PayTr Merchant Salt</label>
                                      </div>
                                      
                                      
                                        <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="ok_url" placeholder="Site Mail Host" value="<?=$guncelle['ok_url']?>">
                                        <label for="floatingInput">Merchant Ok Url (Ödeme Başarılı Linki)</label>
                                      </div>
                                      
                                       <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="fail_url" placeholder="Site Mail Host" value="<?=$guncelle['fail_url']?>">
                                        <label for="floatingInput">Merchant Fail Url (Ödeme Hatalı Linki)</label>
                                      </div>
                                      
                                       <div class="mb-3">
                                  <label for="floatingInput">Mağaza Test Modu</label>
                                          <select class="form-select" name="test_modu" >
                                      
                                       
                                        <option value="0" <?php if($guncelle['test_modu']==0){?> selected <?php }?>>Pasif</option>
                            <option value="1" <?php if($guncelle['test_modu']==1){?> selected <?php }?>>Aktif</option>
                                      </select>
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