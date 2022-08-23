<section class="middle">
				<div class="container">
					<div class="row align-items-start justify-content-between">
					
					<?php include("detay/hesabim-sol.php");?>
						
						<div class="col-12 col-md-12 col-lg-8 col-xl-8">
							<!-- row -->
							<div class="row align-items-center">
								<form class="row m-0" method="post" action="admin/include/fonksiyonlar.php">
									
									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="small text-dark ft-medium">Ad Soyad*</label>
											<input type="text" class="form-control" name="adsoyad" value="<?=$uyesec['adsoyad']?>" />
										</div>
									</div>
									<input type="hidden" name="link" value="../../hesabim">
									<input type="hidden" name="id" value="<?=$_SESSION['id']?>">
									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="small text-dark ft-medium">Telefon*</label>
											<input type="text" class="form-control" name="telefon" value="<?=$uyesec['telefon']?>" />
										</div>
									</div>
									
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="small text-dark ft-medium">Email  *</label>
											<input type="text" class="form-control" name="email" value="<?=$uyesec['email']?>" />
										</div>
									</div>
									
								
									
									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="small text-dark ft-medium">Eski Şifre *</label>
											<input type="text" class="form-control"  name="eskisifre" />
										</div>
									</div>
									
									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="small text-dark ft-medium">Yeni Şifre *</label>
											<input type="text" class="form-control" name="sifre" />
										</div>
									</div>
									
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<button type="submit" class="btn btn-dark" name="profil-guncelle">Hesabımı Güncelle </button>
										</div>
									</div>
									
								</form>
							</div>
							<!-- row -->
						</div>
						
					</div>
				</div>
			</section>