<section class="middle">
				<div class="container">
				
				
					<div class="row align-items-center">
				<?php
				
                $urunkatcek=$db->query("select * from urunler where adi like '%$adi%'  order by id desc")->fetchAll(PDO::FETCH_ASSOC);
				foreach($urunkatcek as $urunka){
				?>
						<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
							<div class="product_grid card b-0">
								<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">YENİ</div>
								<button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i class="far fa-heart"></i></button> 
								<div class="card-body p-0">
									<div class="shop_thumb position-relative">
										<a class="card-img-top d-block overflow-hidden ovr-hide" href="<?=$urunka['seo']?>"><img class="card-img-top" src="resimler/<?=$urunka['resim']?>" alt="<?=$urunka['adi']?>"></a>
                                        <?php
										$uid = $urunka['id'];
                                        $urunimgcek =$db->query("select * from urun_img where urun_id='$uid' and tur='urunler' limit 1")->fetchAll(PDO::FETCH_ASSOC);
										foreach($urunimgcek as $urunimg){
										?>
										<a class="card-img-top d-block overflow-hidden ovr-show" href="<?=$urunka['seo']?>"><img class="card-img-top" src="resimler/<?=$urunimg['img']?>" alt="<?=$urunka['adi']?>"></a>
                                        <?php }?>
										<div class="product-hover-overlay btn d-flex align-items-center justify-content-center">
											<div class="group_btn">
												<a href="<?=$urunka['seo']?>" class="prd_btn_square"><i class="ti-fullscreen"></i></a>
												
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer b-0 p-3 pb-0 bg-white d-flex align-items-start justify-content-center">
									<div class="text-left">
										<div class="text-center">
											<h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="<?=$urunka['seo']?>"><?=$urunka['adi']?></a></h5>
											<div class="elis_rty"><span class="ft-bold theme-cl fs-md"><?=$urunka['fiyat']?>₺</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					<?php }?>
						
					</div>
					
				
				</div>
			</section>