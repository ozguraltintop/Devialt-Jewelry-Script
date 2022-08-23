<section class="middle">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center">
								<h2 class="off_title">Son Eklenen Ürünler </h2>
								<h3 class="ft-bold pt-3">Son Eklenen Ürünler</h3>
							</div>
						</div>
					</div>
					
					<div class="row align-items-center rows-products">
					<?php
                    foreach($uruncek as $urun){
					?>
						<div class="col-xl-3 col-lg-4 col-md-6 col-6">
							<div class="product_grid card b-0">
								<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">YENİ</div>
								<form method="post" action="admin/include/fonksiyonlar.php">
								    <input type="hidden" name="urun" value="<?=$urun['id']?>">
								    <input type="hidden" name="link" value="../../">
								    <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>">
								<button type="submit" name="favori-ekle" class=" btn btn_love position-absolute ab-right"><i class="far fa-heart"></i></button> 
								</form>
								<div class="card-body p-0">
									<div class="shop_thumb position-relative">
										<a class="card-img-top d-block overflow-hidden" href="<?=$urun['seo']?>"><img class="card-img-top" src="resimler/<?=$urun['resim']?>" alt="<?=$urun['adi']?>"></a>
										<div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
											<div class="edlio"><a href="<?=$urun['seo']?>"  class="text-white fs-sm ft-medium"><i class="fas fa-eye mr-1"></i>İnceleyin</a></div>
										</div>
									</div>
								</div>
								<div class="card-footer b-0 p-3 pb-0 bg-white d-flex align-items-start justify-content-center">
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
			</section>