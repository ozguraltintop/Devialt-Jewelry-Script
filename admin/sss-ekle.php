<?php
include("include/baglan.php");
include("include/fonksiyonlar.php");


ob_start();
session_start();
oturumkontrolana();



$adi = $_POST['adi'];
$sira=$_POST['sira'];
$aciklama = $_POST['aciklama'];

$durum = $_POST['durum'];






$id = $_GET['id'];






	  
 




if($_POST['kaydet'] and $_GET['islem']==''){
	
	
	 $simdi = $db->prepare("insert into sss set adi=:adi,sira=:sira,durum=:durum,aciklama=:aciklama");
	$ekle = $simdi->execute(array("adi"=>$adi,"sira"=>$sira,"aciklama"=>$aciklama,"durum"=>$durum));
	if($ekle){
		
		
		
		  
		
		
		$mesaj = "
		
		<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                          <strong>S.S.S Başarıyla Eklendi!</strong> 
                          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
		
		";
	}
	
}

if($_POST['kaydet'] and $_GET['islem']=='duzenle'){
	
		
		
		
		
		
	
		

	

		
		
		
	 $simdi1 = $db->prepare("update sss set adi=:adi,sira=:sira,durum=:durum,
	 aciklama=:aciklama where id=:id");
	$ekle1 = $simdi1->execute(array("adi"=>$adi,"sira"=>$sira,"aciklama"=>$aciklama,"durum"=>$durum,"id"=>$id));
	if($ekle1){
		
		
		
		
		
		
		
		
		
		$mesaj = "
		
		<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                          <strong>S.S.S Başarıyla Güncellendi!</strong>
                          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
		
		";
	}
	
	
	
	
}





if($_GET['islem']=='duzenle'){
	
	
	$gid = $_GET['id'];
	
	$guncelle = $db->query("select * from sss where id='$gid'")->fetch(PDO::FETCH_ASSOC);
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
        <title>S.S.S Ekle -<?=$ayar['site_title']?></title>
        
      

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
                                    <h5 class="card-title">S.S.S  Ekle</h5>
                                    <p class="card-description">Lütfen boş alan bırakmayın.</p>
                                    <?=$mesaj?>
                                    <form method="post" enctype="multipart/form-data" >
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="sira" placeholder="S.S.S Sırası" value="<?=$guncelle['sira']?>">
                                        <label for="floatingInput">S.S.S sırası</label>
                                      </div>
                                      
                                      
                                           <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="adi" placeholder="S.S.S Adı" value="<?=$guncelle['adi']?>">
                                        <label for="floatingInput">S.S.S Adı</label>
                                      </div>
                                      
                                     
                                      
                                      
                                  
                                    
                                           
                                       
                                       
                                      
                                  
                                      
                                      
                                  
                                      
                                    
                                      
                                            <div class="mb-3">
                                 
                                              <div class="form-check form-switch">
                                        <input class="form-check-input" name="durum" type="checkbox" id="flexSwitchCheckChecked" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Göster</label>
                                      </div>
                                      </div>
                                       
                                       
                                       
                                       
                                       
                                       
                                       
                                       <div class="mb-3">
                                 
                                               <textarea  class="ckeditor" name="aciklama"  rows="10"><?=$guncelle['aciklama']?></textarea>
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
        
        
	<link rel="stylesheet" href="assets/uploadfive/uploadifive.css" type="text/css">
    	<script src="assets/uploadfive/jquery.uploadifive.min.js" type="text/javascript"></script>
    		<script type="text/javascript">
	    $(document).ready(function(){

	      	var date = new Date();
	        var date_time = date.getTime();
	        $('.upload .icon span').uploadifive({
	            'auto'             : true,
	            'queueID'  : 'queue',
	            'fileSizeLimit' : '15360KB',
	            'fileExt'     : '*.jpg;*.jpeg;*.JPG;*.JPEG;*.png;*.PNG;*.svg;*.gif',
	            'width' : 25,
	            'buttonText' : " ",
	            'formData'         : {'timestamp' : date_time,'token' : 'sayim'+date_time+'sayim'},
	            'uploadScript'     : 'assets/uploadfive/uploadifive.php',
	            'removeCompleted' : true,
	            'onUploadComplete' : function(file, data) {
	                if(data == '2'){
	                    alert('Lütfen Geçerli Fortmatta Yükleme Yapınız.');
	                }else if(data == '3'){
	                    alert('İşlem Başarısız.(Dosya Boyutu İle Alakalı Olabilir.)');
	                }else{
	                    var id = $(this).attr('data-id');
	                    $('input[name="img'+id+'"]').val(data);
	                    $('#url').val('<?php echo $site; ?>resimler/'+data);
	                    $('.uploaddis[data-id="'+id+'"] .yuklendi img').attr('src','../resimler/'+data);
	                    $('.uploaddis[data-id="'+id+'"]').removeClass('aktif');
	                    $('.uploaddis[data-id="'+id+'"]').addClass('pasif');
	                }
	            }
	        });

	        $('.upload1 .icon span').uploadifive({
	            'auto'             : true,
	            'queueID'  : 'queue',
	            'fileSizeLimit' : '15360KB',
	            'fileExt'     : '*.jpg;*.jpeg;*.JPG;*.JPEG;*.png;*.PNG;*.svg;*.gif',
	            'width' : 25,
	            'buttonText' : " ",
	            'formData'         : {'timestamp' : date_time,'token' : 'sayim'+date_time+'sayim'},
	            'uploadScript'     : 'assets/uploadfive/uploadifive.php',
	            'removeCompleted' : true,
	            'onUploadComplete' : function(file, data) {
	                if(data == '2'){
	                    alert('Lütfen Geçerli Fortmatta Yükleme Yapınız.');
	                }else if(data == '3'){
	                    alert('İşlem Başarısız.(Dosya Boyutu İle Alakalı Olabilir.)');
	                }else{
	                    var say = $('#resimler .col-md-3').length;
	                    $('#resimler').append('\
	                    	<div class="col-md-3" data-resim-dis-id="'+say+'">\
				                    <div class="uploaddis pasif" style="float:left;">\
				        			  <div class="yuklendi">\
				        				  <img src="../resimler/'+data+'" width="100%">\
				        				  <div class="icon" data-resim-sil-id="'+say+'"><span class="fa fa-trash"></span></div>\
				        				  <input type="hidden" name="img[]" value="'+data+'" required="">\
				        			  </div>\
				        			</div>\
				                </div>\
				        ');

	                }
	            }
	        });
	        $(document).on('click','[data-resim-sil-id]', function(){
	        	$('[data-resim-dis-id="'+$(this).attr('data-resim-sil-id')+'"]').remove();
	        });

	        $('.yuklendi .icon').click(function(){
	            var id = $(this).attr('data-id');
	            $('.uploaddis[data-id="'+id+'"]').removeClass('pasif');
	            $('.uploaddis[data-id="'+id+'"]').addClass('aktif');
	            $('input[name="img'+id+'"]').val('');
	            $('.uploaddis[data-id="'+id+'"] .yuklendi img').attr('src','');
	        });
	      });
	    </script>
        <script src="https://use.fontawesome.com/ca9a29c061.js"></script>

    </body>

</html>