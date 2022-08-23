<section class="middle">
				<div class="container">
				
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="text-center d-block mb-5">
								<h2>Sepetim</h2>
							</div>
						</div>
					</div>
					
					<?php if($sepetsay!='0'){?>
					<div class="row justify-content-between">
						<div class="col-12 col-lg-7 col-md-12">
							<ul class="list-group list-group-sm list-group-flush-y list-group-flush-x mb-4">
									
									<?php
									$ip = $_SERVER['REMOTE_ADDR'];
									$sepetcek =$db->query("select * from sepet where ip='$ip'")->fetchAll(PDO::FETCH_ASSOC);
									foreach($sepetcek as $sepet){
									    
									    $toplam += $sepet['fiyat'];
									    $urunsecid = $sepet['urun'];
									    $urunsec = $db->query("select * from urunler where id='$urunsecid' and durum='on' ")->fetch(PDO::FETCH_ASSOC);
									?>
								<li class="list-group-item">
									<div class="row align-items-center">
										<div class="col-3">
										
											<a href="<?=$urunsec['seo']?>"><img src="resimler/<?=$urunsec['resim']?>" alt="<?=$urunsec['adi']?>" class="img-fluid"></a>
										</div>
										<div class="col d-flex align-items-center justify-content-between">
											<div class="cart_single_caption pl-2">
												<h4 class="product_title fs-md ft-medium mb-1 lh-1"><?=$urunsec['adi']?></h4>
												<?php
												if($sepet['varyant']!=''){
												    
												     $vyid = $sepet['varyant'];
												    $vysec = $db->query("select * from varyant where id='$vyid'")->fetch(PDO::FETCH_ASSOC);
												    
												    
												    
												    $vykatid = $vysec['kategori'];
												    $vykatsec = $db->query("select * from varyant_kategori where id='$vykatid'")->fetch(PDO::FETCH_ASSOC);
												    
												  
												    
												?>
												<p class="mb-1 lh-1"><span class="text-dark"><?=$vykatsec['adi']?>: <?=$vysec['adi']?></span></p>
											
<?php }?>												
												
												<h4 class="fs-md ft-medium mb-3 lh-1"><?=$urunsec['fiyat']?>TL</h4>
												<select class="mb-2 custom-select w-auto">
												  <option value="<?=$sepet['adet']?>" selected=""><?=$sepet['adet']?></option>
												 
												</select>
											</div>
											<form method="post" action="admin/include/fonksiyonlar.php">
											    <input type="hidden" name="id" value="<?=$sepet['id']?>">
											    <input type="hidden" name="link" value="../../sepet">
											<div class="fls_last"><button class="close_slide gray" type="submit" name="sepet-sil"><i class="ti-close"></i></button></div>
											</form>
										</div>
									</div>
								</li>
								<?php }?>
							
								
							</ul>
							
						
						</div>
						
						<div class="col-12 col-md-12 col-lg-4">
							<div class="card mb-4 gray mfliud">
							  <div class="card-body">
								<ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
								  <li class="list-group-item d-flex text-dark fs-sm ft-regular">
									<span>Toplam Tutar</span> <span class="ml-auto text-dark ft-medium"><?=$toplam?>TL</span>
								  </li>
								 
								  <li class="list-group-item fs-sm text-center">
									50 TL ve Üzeri Kargo Ücretsizdir *
								  </li>
								</ul>
							  </div>
							</div>
							
							<a class="btn btn-block btn-dark mb-3" href="siparisi-tamamla">Siparişi Tamamla</a>
							
							<a class="btn-link text-dark ft-medium" href="./">
							  <i class="ti-back-left mr-2"></i> Alışverişe Geri Dön
							</a>
						</div>
						
					</div>
					<?php } else {?>
					<p>Sepetiniz Boş , 5 Saniye İçinde Anasayfaya Yönlendiriliyorsunuz.</p>
					<meta http-equiv="refresh" content="5;URL=./"/>
					<?php }?>
				</div>
			</section>