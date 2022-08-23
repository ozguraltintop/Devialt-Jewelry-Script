<section class="p-0">
				<div class="container">
					<div class="row overlio">
					<?php
                    foreach($kategoricek as $kategori){
						
						$katid=$kategori['id'];
						
						
                  $katss = $db->query("select * from urunler where kategori='$katid'",PDO::FETCH_ASSOC);
				  if($katss->rowCount()){foreach($katss as $katss321312321){
				  }
				  }
				  $katsay = $katss->rowCount();
				
					?>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
							<div class="cats_caption_wrap">
								<div class="cats_caption_thumb mb-2">
									<a href="<?=$kategori['seo']?>" class="d-block"><img src="resimler/<?=$kategori['resim']?>" class="img-fluid rounded" alt="<?=$kategori['adi']?>" /></a>
								</div>
								<div class="cats_caption text-center">
									<h4 class="m-0"><?=$kategori['adi']?></h4>
									<span class="text-muted"><?=$katsay?> Ürün Eklendi</span>
								</div>
							</div>
						</div>
						
						<?php }?>
						
						
						
						
						
					</div>
				</div>
			</section>