<section class="px-0 py-3 br-top">
				<div class="container">
					<div class="row">
						<?php
                        foreach($istatikcek as $istatik){
						?>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-2">
								<div class="d_ico">
									<i class="<?=$istatik['linki']?>"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0"><?=$istatik['adi']?></h5>
									<span class="text-muted"><?=$istatik['aciklama']?></span>
								</div>
							</div>
						</div>
						
					
					<?php }?>	
					</div>
				</div>
			</section>