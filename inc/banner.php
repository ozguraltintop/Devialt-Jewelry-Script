<section class="middle">
				<div class="container">
					<div class="row no-gutters exlio_gutters">
						
						<?php foreach($galericek as $galeri){?>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="single_cats">
								<a href="<?=$galeri['seo']?>" class="cards card-overflow card-scale md_height">
									<div class="bg-image" style="background:url(resimler/<?=$galeri['resim']?>)no-repeat;"></div>
									<div class="ct_body">
										<div class="ct_body_caption left">	
											<h2 class="m-0 ft-bold lh-1 fs-md text-upper"><?=$galeri['adi']?></h2>
											<span><?=$galeri['aciklama']?></span>
										</div>
										<div class="ct_footer left">
											<span class="stretched-link fs-md">İnceleyin <i class="ti-arrow-circle-right"></i></span>
										</div>
									</div>
								</a>
							</div>
							
						
							
						</div>
						<?php }?>
					
					</div>
				</div>
			</section>