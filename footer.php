<footer class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row flex-flow">
					<div class="col-sm-12 col-md-4 footer-sidebar">
						<div class="widget contact-info">
							<span class="text-primary PlayfairDisplay">İletişime Geçin !</span>
							<h3 class="widget-title">İletişim</h3>
							<div class="content">
								<p class="address"><?=$adres1?></p>
								<p class="phone"><i class="fa fa-phone"></i><?=$telefon1?><br><?=$email1?></p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 footer-sidebar">
						<div class="widget our-service">
							<span class="text-primary PlayfairDisplay">İletişime Geçin !</span>
							<h3 class="widget-title">Kurumsal</h3>
							<div class="content">
								<ul class="footer-menu">
                                    <?php
                                    foreach($sayfacek as $sa){
									?>
										<li><a href="<?=$sa['seo']?>"><?=$sa['adi']?></a></li><br>
									<?php }?>
									</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 footer-sidebar">
						<div class="widget widget_social">
							<span class="text-primary PlayfairDisplay">İletişime Geçin !</span>
							<h3 class="widget-title">TAKİP EDİN</h3>
							<div class="content">
								<div class="social">
			                        <a href="#"><i class="fa fa-facebook"></i></a>
			                        <a href="#"><i class="fa fa-twitter"></i></a>
			                        <a href="#"><i class="fa fa-google-plus"></i></a>
			                        <a href="#"><i class="fa fa-instagram"></i></a>
			                        <a href="#"><i class="fa fa-pinterest"></i></a>
			                    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
			<div class="payment">
				<div class="head"><span><?=$copyright?></span><span class="PlayfairDisplay">Online Ödeme</span></div>
					<?php foreach($refcek as $ref){?>
								<div class="list">
									<img src="resimler/<?=$ref['resim']?>" class="item" alt="<?=$ref['adi']?>" style="width:100px"/>
								</div>
							<?php }?>
			</div>
			</div>
		</div>
	</footer>

	