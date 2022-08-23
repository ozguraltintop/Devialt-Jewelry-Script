		
 <script type="text/javascript">
    (function () {
        var options = {
            
            whatsapp: "<?=$whatsapp?>", // WhatsApp number
            
            call: "<?=$telefon1?>", // Call phone number
           
            call_to_action: "Bize mesaj gönderin", // Call to action
            button_color: "<?=$ayar['renk']?>", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,call", // Order of buttons
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
			<footer class="dark-footer skin-dark-footer">
				<div class="footer-middle">
					<div class="container">
						<div class="row">
							
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
								<div class="footer_widget">
									<img src="resimler/<?=$footerlogo?>" class="img-footer small mb-2" alt="<?=$title?>" />
									
									<div class="address mt-3">
										<?=$adres1?>
									</div>
									<div class="address mt-3">
										<?=$telefon1?><br><?=$email1?>
									</div>
									<div class="address mt-3">
										<ul class="list-inline">
											<li class="list-inline-item"><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-youtube"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<?php
                            $footerkatcek=$db->query("select * from urun_kategori where durum='on' and kategori='0' limit 2")->fetchAll(PDO::FETCH_ASSOC);
							foreach($footerkatcek as $footerkat){
							?>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title"><?=$footerkat['adi']?></h4>
									<ul class="footer-menu">
                                    <?php
									$kid =$footerkat['id'];
                                    $footeruruncek=$db->query("select * from urunler where kategori='$kid'")->fetchAll(PDO::FETCH_ASSOC);
									foreach($footeruruncek as $footerurun){
									?>
										<li><a href="<?=$footerurun['seo']?>"><?=$footerurun['adi']?></a></li>
										<?php }?>
									</ul>
								</div>
							</div>
								<?php }?>	
							
					
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">Kurumsal</h4>
									<ul class="footer-menu">
                                    <?php
                                    foreach($sayfacek as $sa){
									?>
										<li><a href="<?=$sa['seo']?>"><?=$sa['adi']?></a></li>
									<?php }?>
									</ul>
								</div>
							</div>
							
							
								
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6 ">
								<p class="mb-0"><?=$copyright?></p>
							</div>
								<div class="col-lg-6 col-md-6">
								<p class="mb-0"><img src="assets/img/odeme-yontemleri.png" width="60%"></p>
							</div>
						</div>
					</div>
				</div>
			</footer>

			<div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Search">
				<div class="rightMenu-scroll">
					<div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
						<h4 class="cart_heading fs-md ft-medium mb-0">Ürün Arayın </h4>
						<button onclick="closeSearch()" class="close_slide"><i class="ti-close"></i></button>
					</div>
						
					<div class="cart_action px-3 py-4">
						<form class="form m-0 p-0" action="arama" method="get">
							<div class="form-group">
								<input type="text" class="form-control" name="arama" placeholder="Ürün Adı.." />
							</div>
							
							<div class="form-group">
								<select class="custom-select">
								  <option value="1" selected="">Kategori Seçiniz </option>
                                  <?php
                                  foreach($kategoricek as $kategori){
								  ?>
								  <option value="<?=$kategori['id']?>"><?=$kategori['adi']?></option>
							<?php }?>
								</select>
							</div>
							
							<div class="form-group mb-0">
								<button type="submit" class="btn d-block full-width btn-dark">Ürünü Bul</button>
							</div>
						</form>
					</div>
					
					
					
				</div>
			</div>
			
			
			
		
			<div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Wishlist">
				<div class="rightMenu-scroll">
					<div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
						<h4 class="cart_heading fs-md ft-medium mb-0">Favorilere Eklenen Ürünler</h4>
						<button onclick="closeWishlist()" class="close_slide"><i class="ti-close"></i></button>
					</div>
						<form method="post" action="admin/include/fonksiyonlar.php">
					<div class="right-ch-sideBar">
						
						<div class="cart_select_items py-2">
						<?php
						$ipp= $_SERVER['REMOTE_ADDR'];
						$favcek=$db->query("select * from favori where ip='$ipp'")->fetchAll(PDO::FETCH_ASSOC);
						foreach($favcek as $fav){
						    
						    $fid = $fav['urun'];
						    $furun=$db->query("select * from urunler where id='$fid'")->fetch(PDO::FETCH_ASSOC);
						    
						
						?>
						<input type="hidden" name="id" value="<?=$fav['id']?>">
						<input type="hidden" name="link" value="../../">
							<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="<?=$furun['seo']?>"><img src="resimler/<?=$furun['resim']?>" width="60" class="img-fluid" alt="<?=$furun['adi']?>" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1"><?=$furun['adi']?></h4>
										<p class="mb-2"></p>
										<h4 class="fs-md ft-medium mb-0 lh-1"><?=$furun['fiyat']?>TL</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray" name="favori-sil" type="submit"><i class="ti-close"></i></button></div>
							</div>
							<?php }?>
							
						</div>
						
					
						
					</div>
							</form>
				</div>
			</div>
	