<?php
include("include/baglan.php");
include("include/fonksiyonlar.php");
if($_GET['sil']){
	$idd=$_GET['sil'];
	 
	 $resim_sorgu=$db->query("select * from sayfalar where id='$idd'")->fetch(PDO::FETCH_ASSOC);
	 unlink('../resimler/'.$resim_sorgu['resim']);
	$simdi=$db->query("delete from sayfalar where id='$idd'")->fetch(PDO::FETCH_ASSOC);
	
	


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
        <meta name="author" content="https://www.umuttamirci.com">
<link rel="icon" type="image/png" href="../resimler/<?=$ayar['favicon']?>">

        <title>Sayfa Listele - <?=$ayar['site_title']?></title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&amp;display=swap" rel="stylesheet">
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
        <link href="assets/plugins/DataTables/datatables.min.css" rel="stylesheet">   

      

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
                                <h5 class="card-title">Sayfa Listele</h5>
                           
                                <a href="sayfa-ekle.php"  class="btn btn-primary m-b-md">Sayfa Ekle</a>
                                <table class="table invoice-table ">
                                            <thead>
                                              <tr>
                                                <th scope="col">Sayfa S??ras??</th>
                                                <th scope="col">Sayfa Resmi</th>
                                                <th scope="col">Sayfa Ad??</th>
                                                
                                                <th scope="col">Eklenme Tarihi</th>
                                                <th scope="col">????lem</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $urunlistele = $db->query("select * from sayfalar order by id desc",PDO::FETCH_ASSOC);
											if($urunlistele->rowCount()){foreach($urunlistele as $urungoster){
											?>
                                              <tr>
                                                <th scope="row"><?=$urungoster['sira']?></th>
                                                <td><img src="../resimler/<?=$urungoster['resim']?>" alt="<?=$urungoster['adi']?>"> </td>
                                                <td><?=$urungoster['adi']?></td>
                                             
                                                <td><span class="badge bg-primary"><?=$urungoster['eklenme_tarihi']?></span></td>
                                                <td>
                                                  <a href="sayfa-ekle.php?islem=duzenle&id=<?=$urungoster['id']?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                                  <a href="../<?=$urungoster['seo']?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a>
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
                </div>
                </div>
        </div>
        

        <script src="assets/plugins/jquery/jquery-3.4.1.min.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
        <script src="assets/plugins/DataTables/datatables.min.js"></script>
        <script src="assets/js/main.min.js"></script>
        <script src="assets/js/pages/datatables.js"></script>
           <script src="https://use.fontawesome.com/ca9a29c061.js"></script>
    </body>

</html>