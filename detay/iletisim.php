<section class="middle">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center">
								<h2 class="off_title">İletişim</h2>
								<h3 class="ft-bold pt-3">Bize Ulaşabilirsiniz</h3>
							</div>
						</div>
					</div>
					
					<div class="row align-items-start justify-content-between">
					
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
							<div class="card-wrap-body mb-4">
								<h4 class="ft-medium mb-3 theme-cl">Adreslerimiz</h4>
								<p><?=$adres1?><br> <?=$adres2?></p>
								
							</div>
							
							<div class="card-wrap-body mb-3">
								<h4 class="ft-medium mb-3 theme-cl">Müşteri Hizmetleri</h4>
								<p class="mb-2"><?=$telefon1?></p>
								<p><?=$telefon2?></p>
							</div>
							
							<div class="card-wrap-body mb-3">
								<h4 class="ft-medium mb-3 theme-cl">Email Adreslerimiz</h4>
								<p class="lh-1 text-dark"><?=$email1?></p>
								<p class="lh-1 text-dark"><?=$email2?></p>
							</div>
						</div>
						
						<div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
							<form class="row" method="post" action="admin/include/fonksiyonlar.php">
									
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
									    <input type="hidden" name="link" value="../../iletisim">
										<input type="text" class="form-control" name="adsoyad" placeholder="Ad Soyad">
									</div>
								</div>
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
										<input type="text" class="form-control" name="email"  placeholder="Email">
									</div>
								</div>
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
										<input type="text" class="form-control" name="konu"  placeholder="Konu">
									</div>
								</div>
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
										<textarea class="form-control ht-80" name="mesaj" placeholder="Mesaj"></textarea>
									</div>
								</div>
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
										<button type="submit" name="iletisim-formu" class="btn btn-dark">Gönder </button>
									</div>
								</div>
								
							</form>
						</div>
						
						<div class="col-md-12"><?=$googlemaps?></div>
						
					</div>
				</div>
			</section>