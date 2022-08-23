<section class="gray">
				<div class="container">
					
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center">
								<h2 class="off_title">Yorumlar</h2>
								<h3 class="ft-bold pt-3">Müşteri Yorumları</h3>
							</div>
						</div>
					</div>
					
					<div class="row justify-content-center">
						<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
							<div class="reviews-slide px-3">
								
								<?php
                                foreach($yorumcek as $yorum){
								?>
								<div class="single_review">
									<div class="sng_rev_thumb"><figure><img src="resimler/<?=$yorum['resim']?>" class="img-fluid circle" alt="<?=$yorum['adi']?>" /></figure></div>
									<div class="sng_rev_caption text-center">
										<div class="rev_desc mb-4">
											<p class="fs-md"><?=$yorum['aciklama']?></p>
										</div>
										<div class="rev_author">
											<h4 class="mb-0"><?=$yorum['adi']?></h4>
											<span class="fs-sm"><?=$yorum['unvan']?></span>
										</div>
									</div>
								</div>
								
					<?php }?>
								
							</div>
						</div>
					</div>
				</div>
			</section>