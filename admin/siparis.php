<?php
include("include/baglan.php");
include("include/fonksiyonlar.php");




$id = $_GET['id'];

$siparis =$db->query("select * from siparisler where id='$id'")->fetch(PDO::FETCH_ASSOC);

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
        <title>Sipariş Detay - <?=$ayar['site_title']?></title>



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
                                <form method="post" action="include/fonksiyonlar.php">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <h2>Sipariş Detay</h2>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="float-end">#<?=$siparis['paytr']?></h4>
                                        </div>
                                    </div>
                                  <div class="invoice-details">
                                    <div class="row">
                                        <div class="col">
                                            <p class="info">Sipariş Tarihi:</p>
                                            <p><?=$siparis['tarih']?></p>
                                        </div>
                                        <div class="col">
                                            <p class="info">ID:</p>
                                            <p><?=$siparis['id']?></p>
                                             <p><?=$siparis['adres']?></p>
                                        </div>
                                        <div class="col">
                                          <p class="info">Ad Soyad:</p>
                                          <p><?=$siparis['adsoyad']?></p>
                                          <p><?=$siparis['telefon']?></p>
                                          <p><?=$siparis['eposta']?></p>
                                        </div>
                                    </div>
                                  </div>
                                    <div class="row">
                                      <div class="table-responsive">
                                        <table class="table invoice-table">
                                            <thead>
                                              <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Resim</th>
                                                <th scope="col">Adı </th>
                                                <th scope="col">Fiyat</th>
                                                <th scope="col">Tarih</th>
                                               
                                              </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $urunid = $siparis['urun'];
                                                $urunid = explode(',',$urunid);
                                                foreach($urunid as $ut =>$deger){
                                                $urun=$db->query("select * from urunler where id='$deger'")->fetch(PDO::FETCH_ASSOC);
                                                ?>
                                              <tr>
                                                <th scope="row"><?=$urun['id']?></th>
                                                <td><img src="../resimler/<?=$urun['resim']?>" alt="<?=$urun['adi']?>"> 
                                                <td><?=$urun['adi']?>  &nbsp;&nbsp;	<?php
											
												    
												    
												$sepetid = $siparis['sepetid'];
												$sepetid = explode(',',$sepetid);
												foreach($sepetid as $sss =>$seper){
												    
												    $sepet = $db->query("select * from sepet where id='$seper'")->fetch(PDO::FETCH_ASSOC);
												     $vyid = $sepet['varyant'];
												    $vysec = $db->query("select * from varyant where id='$vyid'")->fetch(PDO::FETCH_ASSOC);
												    
												    
												    
												    $vykatid = $vysec['kategori'];
												    $vykatsec = $db->query("select * from varyant_kategori where id='$vykatid'")->fetch(PDO::FETCH_ASSOC);
												    
												  
												    if($sepet['varyant']!=''){
												?>
												<p class="mb-1 lh-1"><span class="text-dark"><?=$vykatsec['adi']?>: <?=$vysec['adi']?></span></p>
											
<?php }  ?>						
	<p class="mb-1 lh-1"><span class="text-dark"><?=$sepet['tekfiyat']?></span></p>

<?php }  ?>	
</td></td>
                                                <td><?=$urun['fiyat']?>TL</td>
                                                <td><span class="badge bg-primary"><?=$urun['eklenme_tarihi']?></span></td>
                                                
                                              </tr>
                                     <?php }?>
                                            </tbody>
                                          </table>
                                          </div>
                                    </div>
                                    <div class="row invoice-last">
                                        <div class="col-9">
                                            <input type="hidden" name="link" value="../siparis.php?islem=duzenle&id=<?=$siparis['id']?>">
                                            <input type="hidden" name="id" value="<?=$siparis['id']?>">
                                            <input type="hidden" name="email" value="<?=$siparis['eposta']?>">
                                            <div class="col-3">
                                            <input type="text" class="form-control" name="kargotakipno" placeholder="Kargo Takip Numarası" value="<?=$siparis['kargotakipno']?>">
                                              </div> <div class="col-3">
                                            <input type="text" class="form-control" name="kargoadi" placeholder="Kargo Adı" value="<?=$siparis['kargoadi']?>">
                                             </div> 
                                             <div class="col-3">
                                                 
                                                    <select class="form-select" name="siparis_durumu" >
                                       
                                       
                                        <option value="Hazırlanıyor" <?php if($siparis['siparis_durumu']=='Hazırlanıyor'){?> selected <?php }?>>Hazırlanıyor</option>
                                        <option value="Kargoya Verildi" <?php if($siparis['siparis_durumu']=='Kargoya Verildi'){?> selected <?php }?>>Kargoya Verildi</option>
                                        <option value="Sipariş Tamamlandı" <?php if($siparis['siparis_durumu']=='Sipariş Tamamlandı'){?> selected <?php }?>>Sipariş Tamamlandı </option>
                                        <option value="Sipariş İptal Edildi" <?php if($siparis['siparis_durumu']=='Sipariş İptal Edildi'){?> selected <?php }?>>Sipariş İptal Edildi </option>
                                
                                      </select>
                                             </div>
                                             
                                             <div class="col-3">
                                            <input type="submit" name="siparis-guncelle" class="btn btn-primary" value="Kaydet">
                                           </div>
                                             
                                 
                                       
                                    
                                        </div>
                                        
                                        <div class="col-3">
                                            <div class="invoice-info">
                                               
                                                <p class="bold">Ödenen Tutar <span><?=$siparis['fiyat']?>TL</span></p>
                                                <?php if($siparis['durum']==0){?>
                                                <div class="d-grid gap-2">
                                                  <button class="btn btn-danger m-t-xs" type="button">Ücret Ödenmedi </button>
                                                </div>
                                                <?php } else{?>
                                                 <div class="d-grid gap-2">
                                                  <button class="btn btn-success m-t-xs" type="button">Ücret Ödendi </button>
                                                </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
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
				        				  <img src="resimler/'+data+'" width="100%">\
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