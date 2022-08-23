	<section class="px-0 py-3 br-top">
				<div class="container">
				    	    <h4 style="margin-left:0px!important">En Çok Arananlar</h4>
					<div class="row">
				
								<?php foreach($etiketcek as $etiket){?>
						<div class="">
							<div class="d-flex align-items-center justify-content-start py-2">
						
								<div class="d_capt">
								    
								    
								    <a href="<?=$etiket['linki']?>">
									<h5 class="mb-0" style="border:1px solid #ccc;border-radius:8px 8px 8px 8px;padding:5px;margin-left:5px"><?=$etiket['adi']?></h5>
								</a>
									
								</div>
							</div>
						</div>
							<?php }?>
					
				
					</div>
				</div>
			</section>
	