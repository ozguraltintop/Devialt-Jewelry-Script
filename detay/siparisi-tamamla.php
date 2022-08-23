<section class="middle">
				<div class="container">
				
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="text-center d-block mb-5">
								<h2>Siparişi Tamamlayın</h2>
							</div>
						</div>
					</div>
					<form method="post" action="iyzico/index.php">
					<div class="row justify-content-between">
						<div class="col-12 col-lg-7 col-md-12">
							
								<h5 class="mb-4 ft-medium">Sipariş Bilgileri</h5>
								<div class="row mb-2">
									
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
										
											<input type="text" class="form-control" placeholder="Ad Soyad " name="adsoyad" value="<?=$uyesec['adsoyad']?>"/>
										</div>
									</div>
								
								
									
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
										
											<input type="email" class="form-control" placeholder="Email" name="eposta"  value="<?=$uyesec['email']?>"/>
										</div>
									</div>
									
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
									
											<input type="text" class="form-control" placeholder="Telefon Numaranız" name="telefon"  value="<?=$uyesec['telefon']?>"/>
										</div>
									</div>
									
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
											<label class="text-dark">Detaylı Adresiniz</label>
											<textarea class="form-control ht-50" name="adres"></textarea>
										</div>
									</div>
								
									
								
									
								
									
								
									
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
											<label class="text-dark">Sipariş Notunuz</label>
											<textarea class="form-control ht-50" name="siparis_notu"></textarea>
										</div>
									</div>
									
								</div>
								
						
						
						</div>
						
						<!-- Sidebar -->
						<div class="col-12 col-lg-4 col-md-12">
							<div class="d-block mb-3">
								<h5 class="mb-4">Sepet İçeriği </h5>
								<ul class="list-group list-group-sm list-group-flush-y list-group-flush-x mb-4">
										<?php
									$ip = $_SERVER['REMOTE_ADDR'];
									$sepetcek =$db->query("select * from sepet where ip='$ip'")->fetchAll(PDO::FETCH_ASSOC);
									foreach($sepetcek as $sepet){
									    
									    $toplam += $sepet['fiyat'];
									    $urunsecid = $sepet['urun'];
									    $urunsec = $db->query("select * from urunler where id='$urunsecid' and durum='on' ")->fetch(PDO::FETCH_ASSOC);
									?>
									
									<input type="hidden" value="<?=$sepet['id']?>" name="sepetid[]">
                    <input type="hidden" value="<?=$sepet['urun']?>" name="urun_id[]">
									<li class="list-group-item">
										<div class="row align-items-center">
											<div class="col-3">
										
												<a href="<?=$urunsec['seo']?>"><img src="resimler/<?=$urunsec['resim']?>" alt="<?=$urunsec['adi']?>" class="img-fluid"></a>
											</div>
											<div class="col d-flex align-items-center">
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
													<h4 class="fs-md ft-medium mb-3 lh-1"><?=$urunsec['fiyat']?>TL x <?=$sepet['adet']?> Adet</h4>
												</div>
											</div>
										</div>
									</li>
										<?php }?>
								
									
								</ul>
							</div>
								<input type="hidden" name="fiyat" value="<?=$toplam?>">
								<input type="hidden" name="uye" value="<?=$_SESSION['id']?>">
							<div class="card mb-4 gray">
							  <div class="card-body">
								<ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
								  <li class="list-group-item d-flex text-dark fs-sm ft-regular">
									<span>Toplam</span> <span class="ml-auto text-dark ft-medium"><?=$toplam?>TL</span>
								  </li>
								  
								  <li class="list-group-item fs-sm text-center">
									50 TL Üzeri ücretsiz kargo *
								  </li>
								</ul>
							  </div>
							</div>
							
							<button class="btn btn-block btn-dark mb-3" type="submit" >Siparişi tamamlayın</button>
						</div>
						
					</div>
					</form>
				</div>
			</section>