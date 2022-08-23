<section class="middle">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center">
								<h2 class="off_title">S.S.S</h2>
								<h3 class="ft-bold pt-3">Sıkça Sorulan Sorular</h3>
							</div>
						</div>
					</div>
					
					<div class="row align-items-center justify-content-between">
						<div class="col-xl-10 col-lg-11 col-md-12 col-sm-12">
							
							<div class="d-block position-relative border rounded py-3 px-3 mb-4">
								<div id="accordion" class="accordion">
                                <?php
                                foreach($ssscek as $sss){
								?>
									<div class="card">
										<div class="card-header" id="h<?=$sss['id']?>">
										  <h5 class="mb-0">
											<button class="btn btn-link" data-toggle="collapse" data-target="#ord<?=$sss['id']?>" aria-expanded="true" aria-controls="ord<?=$sss['id']?>">
												<?=$sss['adi']?>
											</button>
										  </h5>
										</div>

										<div id="ord<?=$sss['id']?>" class="collapse <?php if($sss['sira']==1){ echo "show";}?>" aria-labelledby="h<?=$sss['id']?>" data-parent="#accordion">
										  <div class="card-body">
											<?=$sss['aciklama']?>
										  </div>
										</div>
									</div>
									<?php }?>
									
								</div>
							</div>
							
							
							
							
							
						</div>
					</div>
				</div>
			</section>