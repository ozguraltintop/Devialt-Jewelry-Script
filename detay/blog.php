<section class="middle">
				<div class="container">
					
					
					
					<div class="row">
						<?php
                        foreach($blogcek as $blog){
						?>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
							<div class="_blog_wrap">
								<div class="_blog_thumb mb-2">
									<a href="<?=$blog['seo']?>" class="d-block"><img src="resimler/<?=$blog['resim']?>" class="img-fluid rounded" alt="<?=$blog['adi']?>" /></a>
								</div>
								<div class="_blog_caption">
									<span class="text-muted"><?=$blog['eklenme_tarihi']?></span>
									<h5 class="bl_title lh-1"><a href="<?=$blog['seo']?>"><?=$blog['adi']?></a></h5>
									<p><?=$blog['onaciklama']?></p>
									<a href="<?=$blog['seo']?>" class="text-dark fs-sm">Tümünü okuyun..</a>
								</div>
							</div>
						</div>
			
			<?php }?>			
					</div>
					
			
					
				</div>
			</section>