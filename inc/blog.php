<section class="space min">
				<div class="container">
					
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center">
								<h2 class="off_title">Blog & Haberler</h2>
								<h3 class="ft-bold pt-3">Blog & Haberler</h3>
							</div>
						</div>
					</div>
					
					<div class="row">
						<?php foreach($habercek3 as $haber3){?>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
							<div class="_blog_wrap">
								<div class="_blog_thumb mb-2">
									<a href="<?=$haber3['seo']?>" class="d-block"><img src="resimler/<?=$haber3['resim']?>" class="img-fluid rounded" alt="<?=$haber3['adi']?>" /></a>
								</div>
								<div class="_blog_caption">
									<span class="text-muted"><?=$haber3['tarih']?></span>
									<h5 class="bl_title lh-1"><a href="<?=$haber3['seo']?>"><?=$haber3['adi']?></a></h5>
									<p><?=$haber3['onaciklama']?></p>
									<a href="<?=$haber3['seo']?>" class="text-dark fs-sm">Tümünü Okuyun</a>
								</div>
							</div>
						</div>
						<?php }?>
					
						
					</div>
					
				</div>
			</section>