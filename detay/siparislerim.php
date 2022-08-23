<section class="middle">
				<div class="container">
					<div class="row align-items-start justify-content-between">
					
					<?php include("detay/hesabim-sol.php");?>
						
						<div class="col-12 col-md-12 col-lg-8 col-xl-8 text-center">
						
						 <?php
                                $idd = $_SESSION['id'];
                                $temacek=$db->query("select * from siparisler where uye='$idd' and durum='0'")->fetchAll(PDO::FETCH_ASSOC);
                                if($temacek){
                                foreach($temacek as $tema){
                                    $temaid =$tema['urun'];
                                    $temaid =explode(',',$temaid);
                                   
                                ?>
							<div class="ord_list_wrap border mb-4 mfliud">
								<div class="ord_list_head gray d-flex align-items-center justify-content-between px-3 py-3">
									<div class="olh_flex">
										<p class="m-0 p-0"><span class="text-muted">Sipariş Kodu</span></p>
										<h6 class="mb-0 ft-medium">#<?=$tema['siparis_kodu']?></h6>
									</div>	
									
										<div class="olh_flex">
										<p class="m-0 p-0"><span class="text-muted">Sipariş Notu</span></p>
										<h6 class="mb-0 ft-medium"><?=$tema['siparis_notu']?></h6>
									</div>	
									
								</div>
								<div class="ord_list_body text-left">
							
							<?php
							 foreach($temaid as $tt =>$deger){
                                        $uruntema=$db->query("select * from urunler where id='$deger'")->fetch(PDO::FETCH_ASSOC);
                                        
                                        $uruntemakatid=$uruntema['kategori'];
                                        
                                        $urunkatsec=$db->query("select * from urun_kategori where id='$uruntemakatid'")->fetch(PDO::FETCH_ASSOC);
							?>
							
									<div class="row align-items-center justify-content-center m-0 py-4 br-bottom">
										<div class="col-xl-5 col-lg-5 col-md-5 col-12">
											<div class="cart_single d-flex align-items-start mfliud-bot">
												<div class="cart_selected_single_thumb">
													<a href="<?=$uruntema['seo']?>"><img src="resimler/<?=$uruntema['resim']?>" width="75" class="img-fluid rounded" alt="<?=$uruntema['adi']?>"></a>
												</div>
												<div class="cart_single_caption pl-3">
													<p class="mb-0"><span class="text-muted small"><?=$urunkatsec['adi']?></span></p>
													<h4 class="product_title fs-sm ft-medium mb-1 lh-1"><?=$uruntema['adi']?></h4>
													
													<?php
													
													$sepetid = $tema['sepetid'];
													$sepetid= explode(',',$sepetid);
													foreach($sepetid as $sep =>$deger2){
													    
													    
													    $sepetsec = $db->query("select * from sepet where id ='$deger2' and urun='$deger'")->fetch(PDO::FETCH_ASSOC);
													   
													    
													?>
													<?php
													 if($sepetsec['varyant']!=''){
													        
													    $vyid = $sepetsec['varyant'];
													    $vysec=$db->query("select * from varyant where id='$vyid'")->fetch(PDO::FETCH_ASSOC);
													    
													    $vykatid = $vysec['kategori'];
													    $vykatsec=$db->query("select * from varyant_kategori where id='$vykatid'")->fetch(PDO::FETCH_ASSOC);
													?>
													<p class="mb-2"> <span class="text-dark medium"><?=$vykatsec['adi']?>: <?=$vysec['adi']?></span></p>
												<?php } ?>
														<?php } ?>
													<h4 class="fs-sm ft-bold mb-0 lh-1"></h4>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-3 col-md-3 col-6">
											<p class="mb-1 p-0"><span class="text-muted">Sipariş Durumu</span></p>
											<div class="delv_status"><span class="ft-medium small text-warning bg-light-warning rounded px-3 py-1"><?=$tema['siparis_durumu']?></span></div>
											<div class="delv_status"><span class="ft-medium small text-warning bg-light-warning rounded px-3 py-1"><?=$tema['kargoadi']?></span></div>
											<div class="delv_status"><span class="ft-medium small text-warning bg-light-warning rounded px-3 py-1"><?=$tema['kargotakipno']?></span></div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-6">
											<p class="mb-1 p-0"><span class="text-muted">Sipariş Tarihi:</span></p>
											<h6 class="mb-0 ft-medium fs-sm"><?=$tema['tarih']?></h6>
										</div>
									</div>	
									<?php }?>
								
									
								</div>
								<div class="ord_list_footer d-flex align-items-center justify-content-between br-top px-3">
									
									<div class="col-xl-12 col-lg-12 col-md-8 pr-0 py-2 olf_flex d-flex align-items-center justify-content-between">
										<div class="olf_flex_inner hide_mob"><p class="m-0 p-0"><span class="text-muted medium"><h5 class="mb-0 fs-sm ft-bold">Adres</h5><?=$tema['adres']?></span></p></div>
										<div class="olf_inner_right"><h5 class="mb-0 fs-sm ft-bold">Toplam : <?=$tema['fiyat']?>TL</h5></div>
									</div>
								</div>
							</div>
						
							  <?php }  }else { echo "Şuan da siparişiniz yoktur.";}?>
						</div>
						
					</div>
				</div>
			</section>