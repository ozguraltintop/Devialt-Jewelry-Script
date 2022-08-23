<div class="home-slider hide-navigation margin-bottom-0"  style="display:none">
<?php
foreach($slidercek as $slider){
?>
				<div data-background-image="resimler/<?=$slider['resim']?>" class="item" data-overlay="3">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="home-slider-container">

									<div class="home-slider-desc text-center">
										<div class="home-slider-title mb-4">
											<h5 class="text-light fs-lg ft-medium mb-0"><?=$title?></h5>
											<h1 class="mb-1 ft-bold lg-heading"><?=$slider['adi']?></h1>
										</div>
										
										<p class="mb-0">
											<a href="hakkimizda" class="btn stretched-link light-borders mx-2 my-3 ft-bold">Hakkımızda</a>
											<a href="iletisim" class="btn stretched-link light-borders mx-2 my-3 ft-bold">İletişim</a>
										</p>
										
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				
	<?php }?>		

			</div>
			
			<section class="pb-60">
				<div class="container">
					<div class="row">
					
					
						
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="home-slider auto-slider mb-3 mt-3">
<?php
foreach($slidercek as $slider){
?>
							
								<div data-background-image="resimler/<?=$slider['resim']?>" class="item">
									<div class="container">
										<div class="row">
											<div class="col-md-12">
												<div class="home-slider-container">

													<!-- Slide Title -->
													<div class="home-slider-desc">
														<div class="home-slider-title mb-4">
															<h5 class="fs-sm ft-ragular mb-2"><?=$title?></h5>
															<h1 class="mb-2 ft-bold"><?=$slider['adi']?></h1>
															<span class="trending"><?=$slider['aciklama']?></span>
														</div>

														<a href="<?=$slider['linki']?>" class="btn btn-white stretched-link hover-black">İnceleyin<i class="lni lni-arrow-right ml-2"></i></a>
													</div>
													<!-- Slide Title / End -->

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