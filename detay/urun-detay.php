		<section class="middle">
				<div class="container">
					<div class="row justify-content-between">
					
						<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
							<div class="quick_view_slide">
								<div class="single_view_slide"><a href="resimler/<?=$urunler['resim']?>" data-lightbox="roadtrip" class="d-block mb-4"><img src="resimler/<?=$urunler['resim']?>" class="img-fluid rounded" alt="<?=$urunler['adi']?>" /></a></div>
								<?php
                                $urunimgcek =$db->query("select * from urun_img where urun_id='$id' and tur='urunler'")->fetchAll(PDO::FETCH_ASSOC);
								foreach($urunimgcek as $urunimg){
								?>
                                
                                <div class="single_view_slide"><a href="resimler/<?=$urunimg['img']?>" data-lightbox="roadtrip" class="d-block mb-4"><img src="resimler/<?=$urunimg['img']?>" class="img-fluid rounded" alt="<?=$urunler['adi']?>" /></a></div>
								<?php }?>
							
							</div>
						</div>
						
						<div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
							<div class="prd_details pl-3">
								<?php if($urunler['urun_kodu']!=''){?>
								<div class="prt_01 mb-1"><span class="text-light bg-info rounded px-2 py-1"><?=$urunler['urun_kodu']?></span></div>
								<?php }?>
								<div class="prt_02 mb-3">
									<h2 class="ft-bold mb-1"><?=$urunler['adi']?></h2>
									<div class="text-left">
										<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
										</div>
										<div class="elis_rty"><span class="ft-bold theme-cl fs-lg mr-2"><?=$urunler['fiyat']?>₺</span></div>
									</div>
								</div>
								
								<div class="prt_03 mb-4">
									<p><?=$urunler['onaciklama']?></p>
								</div>
								<form method="post" action="admin/include/fonksiyonlar.php">
							
								<?php if($urunler['stok']!=0){?>
								<?php if($urunler['varyant']!=''){?>
								<div class="prt_04 mb-4">
								    
								    <?php
								    $varyantid = $urunler['varyant'];
								    $vykatsec=$db->query("select * from varyant_kategori where id='$varyantid'")->fetchAll(PDO::FETCH_ASSOC);
								    foreach($vykatsec as $vykat){
								    ?>
									<p class="d-flex align-items-center mb-0 text-dark ft-medium"><?=$vykat['adi']?>:</p>
								
									<div class="text-left pb-0 pt-2">
									    
									    	<?php
									$vykatid = $vykat['id'];
									$vcek=$db->query("select * from varyant where kategori='$vykatid'")->fetchAll(PDO::FETCH_ASSOC);
									foreach($vcek as $vgoster){
									?>
										<div class="form-check size-option form-option form-check-inline mb-2">
											<input class="form-check-input" type="radio" name="varyant" value="<?=$vgoster['id']?>" id="<?=$vgoster['id']?>" checked="">
											<label class="form-option-label" for="<?=$vgoster['id']?>"><?=$vgoster['adi']?></label>
										</div>
										
									<?php  }?>
									</div>
									<?php  }?>
								</div>
							<?php }?>
								
								
								<div class="prt_05 mb-4">
									<div class="form-row mb-7">
										<div class="col-12 col-lg-auto">
										<input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>">
										<input type="hidden" name="urun" value="<?=$id?>">
										<input type="hidden" name="fiyat" value="<?=$urunler['fiyat']?>">
										<input type="hidden" name="link" value="../../<?=$seo?>">
											<select class="mb-2 custom-select" name="adet">
											  <option value="1" selected="">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											</select>
										</div>
										<div class="col-12 col-lg">
											<button type="submit"  name="sepet-ekle" class="btn btn-block custom-height bg-dark mb-2">
												<i class="lni lni-shopping-basket mr-2"></i>Sepete Ekleyin
											</button>
										</div>
										<div class="col-12 col-lg-auto">
										
											<button class="btn custom-height btn-default btn-block mb-2 text-dark" type="submit" name="favori-ekle" >
												<i class="lni lni-heart mr-2"></i>Favori Ekle
											</button>
										</div>
								  </div>
								</div>
								<?php }else{?>
								
								<p style="text-align:center"><img src="resimler/<?=$ayar['stok']?>"></p>
								<?php }?>
								
								</form>
								
								
								
								
								
								
								<div class="prt_05 mb-4">
									<div class="form-row mb-7">
										
										<div class="col-12 col-lg">
									
										<a href="https://wa.me/<?=$whatsapp?>" target="_blank"  class="btn btn-block custom-height bg-dark mb-2">
												<i class="lni lni-shopping-basket mr-2"></i>Whatsapp İle Satın Al
											</a>
										</div>
										
								  </div>
								</div>
								
								
								
							</div>
						</div>
					</div>
				</div>
			</section>
	
			<section class="middle">
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="col-xl-11 col-lg-12 col-md-12 col-sm-12">
							<ul class="nav nav-tabs b-0 d-flex align-items-center justify-content-center simple_tab_links mb-4" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<a class="nav-link active" id="description-tab" href="#description" data-toggle="tab" role="tab" aria-controls="description" aria-selected="true">Ürün Açıklaması</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" href="#reviews" id="reviews-tab" data-toggle="tab" role="tab" aria-controls="reviews" aria-selected="false">Yorumlar</a>
								</li>
							</ul>
							
							<div class="tab-content" id="myTabContent">
								
								<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
									<div class="description_info">
										<p class="p-0 mb-2"><?=$urunler['aciklama']?></p>
									</div>
								</div>
									<div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
									<div class="reviews_info">
									    
									    <?php
									    $urunyorumcek=$db->query("select * from urun_yorum where urun_id='$id'")->fetchAll(PDO::FETCH_ASSOC);
									    foreach($urunyorumcek as $urunyorum){
									    ?>
										<div class="single_rev d-flex align-items-start br-bottom py-3">
											<div class="single_rev_thumb"><img src="resimler/<?=$favicon?>" class="img-fluid circle" width="90" alt="<?=$adi?>" /></div>
											<div class="single_rev_caption d-flex align-items-start pl-3">
												<div class="single_capt_left">
												
													<span class="small"><?=$urunyorum['tarih']?></span>
													<p><?=$urunyorum['yorum']?></p>
												</div>
												<div class="single_capt_right">
													<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
													</div>
												</div>
											</div>
										</div>
										<?php }?>
									
									
										
									</div>
									<?php if($_SESSION['email']==true){?>
									<div class="reviews_rate">
										<form class="row" method="post" action="admin/include/fonksiyonlar.php">
										
										
											
											
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label class="medium text-dark ft-medium">Yorumunuz</label>
													<textarea class="form-control" name="yorum"></textarea>
												</div>
											</div>
											<input type="hidden" name="uye" value="<?=$_SESSION['id']?>">
											<input type="hidden" name="link" value="../../<?=$urunler['seo']?>">
											<input type="hidden" name="urun_id" value="<?=$urunler['id']?>">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
												<div class="form-group m-0">
													<button class="btn btn-white stretched-link hover-black" type="submit" name="yorum-ekle">Yorum Gönder  <i class="lni lni-arrow-right"></i></button>
												</div>
											</div>
											
										</form>
									</div>
									<?php } else { echo "Üye Girişi Yapmanız Gerekiyor";}?>
								</div>
								
							</div>
						
						</div>
					</div>
				</div>
			</section>
		
			<section class="middle pt-0">
				<div class="container">
					
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center">
								<h2 class="off_title">Diğer Ürünler </h2>
								<h3 class="ft-bold pt-3">Benzer Ürünler</h3>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="slide_items">
								
								<?php
                                foreach($uruncek as $urun){
								?>
								<div class="single_itesm">
									<div class="product_grid card b-0 mb-0">
										<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">YENİ</div>
									<form method="post" action="admin/include/fonksiyonlar.php">
								    <input type="hidden" name="urun" value="<?=$urun['id']?>">
								    <input type="hidden" name="link" value="../../<?=$urunler['seo']?>">
								    <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>">
								<button type="submit" name="favori-ekle" class=" btn btn_love position-absolute ab-right"><i class="far fa-heart"></i></button> 
								</form>
										<div class="card-body p-0">
											<div class="shop_thumb position-relative">
												<a class="card-img-top d-block overflow-hidden" href="<?=$urun['seo']?>"><img class="card-img-top" src="resimler/<?=$urun['resim']?>" alt="<?=$urun['adi']?>"></a>
												<div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
													<div class="edlio"><a href="<?=$urun['seo']?>" class="text-white fs-sm ft-medium"><i class="fas fa-eye mr-1"></i>İnceleyin</a></div>
												</div>
											</div>
										</div>
										<div class="card-footer b-0 p-3 pb-0 d-flex align-items-start justify-content-center">
											<div class="text-left">
												<div class="text-center">
													<h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="<?=$urun['seo']?>"><?=$urun['adi']?></a></h5>
													<div class="elis_rty"><span class="ft-bold fs-md text-dark"><?=$urun['fiyat']?>₺</span></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
					<?php }?>
								
							</div>
						</div>
					</div>
					
				</div>
			</section>