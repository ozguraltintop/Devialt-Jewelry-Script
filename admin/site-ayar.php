<?php
include("include/baglan.php");
include("include/fonksiyonlar.php");

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
        <title>Site Ayarları - <?=$ayar['site_title']?></title>



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
                           
                              
                                <table class="table invoice-table">
                                            <thead>
                                              <tr>
                                                <th scope="col">Sayfa Adı</th>
                                                <th scope="col">İşlem </th>
                                               
                                              </tr>
                                            </thead>
                                            <tbody>
                                           
                                              <tr>
                                                <th scope="row">İletişim</th>
                                                <td>  <div class="mb-3">
                                 
                                          <select class="form-select" name="iletisim" >
                                        <option value="0" selected>Göster  </option>
                                        <option value="1" selected>Gizle  </option>
                                      
                                      </select>
                                      </div> </td>
                                               
                                              </tr>
                                              
                                               <tr>
                                                <th scope="row">Galeri</th>
                                                <td>  <div class="mb-3">
                                 
                                          <select class="form-select" name="galeri" >
                                        <option value="0" selected>Göster  </option>
                                        <option value="1" selected>Gizle  </option>
                                      
                                      </select>
                                      </div> </td>
                                               
                                              </tr>
                                              
                                              <tr>
                                                <th scope="row">Video Galeri</th>
                                                <td>  <div class="mb-3">
                                 
                                          <select class="form-select" name="video" >
                                        <option value="0" selected>Göster  </option>
                                        <option value="1" selected>Gizle  </option>
                                      
                                      </select>
                                      </div> </td>
                                               
                                              </tr>
                                              
                                               <tr>
                                                <th scope="row">Blog </th>
                                                <td>  <div class="mb-3">
                                 
                                          <select class="form-select" name="blog" >
                                        <option value="0" selected>Göster  </option>
                                        <option value="1" selected>Gizle  </option>
                                      
                                      </select>
                                      </div> </td>
                                               
                                              </tr>
                                              
                                               <tr>
                                                <th scope="row">Hizmetler </th>
                                                <td>  <div class="mb-3">
                                 
                                          <select class="form-select" name="hizmetler" >
                                        <option value="0" selected>Göster  </option>
                                        <option value="1" selected>Gizle  </option>
                                      
                                      </select>
                                      </div> </td>
                                               
                                              </tr>
                                              
                                               <tr>
                                                <th scope="row">Ürünler </th>
                                                <td>  <div class="mb-3">
                                 
                                          <select class="form-select" name="urunler" >
                                        <option value="0" selected>Göster  </option>
                                        <option value="1" selected>Gizle  </option>
                                      
                                      </select>
                                      </div> </td>
                                               
                                              </tr>
                                              
                                              <tr>
                                                <th scope="row">Referans </th>
                                                <td>  <div class="mb-3">
                                 
                                          <select class="form-select" name="referans" >
                                        <option value="0" selected>Göster  </option>
                                        <option value="1" selected>Gizle  </option>
                                      
                                      </select>
                                      </div> </td>
                                               
                                              </tr>
                                              
                                               <tr>
                                                <th scope="row">Referans </th>
                                                <td>  <div class="mb-3">
                                 
                                          <select class="form-select" name="referans" >
                                        <option value="0" selected>Göster  </option>
                                        <option value="1" selected>Gizle  </option>
                                      
                                      </select>
                                      </div> </td>
                                               
                                              </tr>
                                      
                                      
                                              
                                              
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