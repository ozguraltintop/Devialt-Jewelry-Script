<header id="header" class="header style1">
	<div class="top-header">
		<div class="container">
			<div class="inner">
				<div class="main-menu-wapper">
					<div class="row">
						<div class="col-sm-8">
							<ul class="boutique-nav main-menu clone-main-menu">                                      
								<li class="active menu-item-has-children item-megamenu">
									<a href="index.php">Anasayfa</a>
								
								</li>
									<li class="menu-item-has-children"><a href="#">Kurumsal</a>
									<ul class="sub-menu">
                                    <?php
                                    foreach($sayfacek as $sa){
									?>
										<li><a href="<?=$sa['seo']?>"><?=$sa['adi']?></a></li>
										<?php }?>
									</ul>
								</li>

								<li class="menu-item-has-children"><a href="javascript:void(0);">Ürünler</a>
									<ul class="sub-menu">
										  <?php
                                    foreach($kategoricek as $kategori){
									?>
										<li><a href="<?=$kategori['seo']?>"><?=$kategori['adi']?> </a>
											
										</li>
										<?php }?>
									</ul>
								</li>


								
							

								<li class="menu-item-has-children item-megamenu">
									<a href="#">Shop</a>
								<!-- 	<div style="width:820px; background-image:url('images/bg-megamenu.png'); " class="sub-menu megamenu megamenu-bg" >
										<div class="row">
											<div class="col-sm-3">
												<div class="mega-custom-menu">
													<h2 class="title">CATEGORIES</h2>
													<ul>
			                                            <li><a href="category-left-sidebar.html">Left sidebar</a></li>
			                                            <li><a href="category-right-sidebar.html">Right sidebar</a></li><li><a href="category-list.html">Category list</a></li>
			                                            <li><a href="category-2columns.html">2 columns</a></li>
			                                            <li><a href="category-3columns.html">3 columns</a></li>
			                                            <li><a href="category-4columns.html">4 columns</a></li>
			                                            <li><a href="category-6columns.html">6 columns</a></li>
			                                            <li><a href="category2-leftsidebar.html">Categorie Style 2</a></li>
			                                            <li><a href="category3-leftsidebar.html">Categorie Style 3</a></li>
			                                            <li><a href="category4-leftsidebar.html">Categorie Style 4</a></li>
		                                            </ul>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="mega-custom-menu">
													<h2 class="title">PRODUCT</h2>
													<ul>
														<li><a href="product-1.html">Product Simple</a></li>
			                                            <li><a href="product-2.html">Out of Stock</a></li>
			                                            <li><a href="product-3.html">Product Fullwidth</a></li>
			                                            <li><a href="product-4.html">Product Left Sidebar</a></li>
			                                            <li><a href="product-5.html">External/Affiliate product</a></li>
			                                            <li><a href="product-6.html">Grouped product</a></li>
			                                        </ul>
			                                    </div>
											</div>
										</div>
									</div> -->
								</li>
								<li class="menu-item-has-children item-megamenu">
									<a href="#">Özellikler</a>
									<div style="width:1500px;" class="sub-menu megamenu">
										<div class="row">
											<div class="col-sm-6">
												<div class="element-icon">
													<div class="icon"><img src="images/icons/icon-custom.png" alt=""></div>
													<div class="content">
														<h4 class="title">EASY CUSTOMIZE</h4>
													<div class="text"><p>Maecenas sit amet lectus vulputate, tristique mi a, lobortis erat. Nunc quis malesuada urna. Ut in blandit diam. Sed diam sem, imperdiet id enim blandit, vehicula blandit libero.</p></div>
													</div>
												</div>
												<div class="element-icon">
													<div class="icon"><img src="images/icons/icon-color.png" alt=""></div>
													<div class="content">
														<h4 class="title">UNLIMITED COLOR</h4>
													<div class="text"><p>Maecenas sit amet lectus vulputate, tristique mi a, lobortis erat. Nunc quis malesuada urna. Ut in blandit diam. Sed diam sem, imperdiet id enim blandit, vehicula blandit libero.</p></div>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="element-icon">
													<div class="icon"><img src="images/icons/icon-responsive.png" alt=""></div>
													<div class="content">
														<h4 class="title">RESPONSIVE DESIGN</h4>
													<div class="text"><p>Maecenas sit amet lectus vulputate, tristique mi a, lobortis erat. Nunc quis malesuada urna. Ut in blandit diam. Sed diam sem, imperdiet id enim blandit, vehicula blandit libero.</p></div>
													</div>
												</div>
												<div class="element-icon">
													<div class="icon"><img src="images/icons/icon-document.png" alt=""></div>
													<div class="content">
														<h4 class="title">EASY DOCUMENT</h4>
													<div class="text"><p>Maecenas sit amet lectus vulputate, tristique mi a, lobortis erat. Nunc quis malesuada urna. Ut in blandit diam. Sed diam sem, imperdiet id enim blandit, vehicula blandit libero.</p></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<!-- <li class="menu-item-has-children">
									<a href="blogs.php">BLOG</a>
									<ul class="sub-menu">
										<li><a href="blogs.php">Blog List</a></li>
										<li><a href="blogpost.php">Blog Single</a></li>
									</ul>
								</li> -->
							</ul>
						</div>
						<div class="col-sm-4">
							<span class="mobile-navigation"><i class="fa fa-bars"></i></span>
							<div class="box-control">
								<form  class="box-search">
									<input type="text" class="search" placeholder="<?=$telefon1?>">
									<button class="button-search"><span class="pe-7s-search"></span></button>
								</form>
								<div class="box-settings">
	                                <span class="icon pe-7s-config"></span>
	                                <div class="settings-wrapper">
	                                    <div class="setting-content">
	                                        <div class="select-language">
	                                            <div class="language-title">Dil Seçiniz</div>
	                                            <div class="language-topbar">                                                
	                                                <div class="lang-list">
	                                                    <ul class="clearfix">
	                                                        <li class="active"><a href="#"> <img src="images/flag1.png" alt=""> </a></li>
	                                                        <li><a href="#"> <img src="images/flag2.png" alt=""></a></li>
	                                                        <li><a href="#"> <img src="images/flag3.png" alt=""></a></li>
	                                                        <li><a href="#"> <img src="images/flag4.png" alt=""></a></li>
	                                                    </ul>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="select-currency">
	                                            <div class="currency-title">Birim	</div>
	                                            <div class="currency-topbar">                                                
	                                                <div class="currency-list">
	                                                    <ul class="clearfix">
	                                                        <li><a href="#"><span class="sym"><i class="fa fa-usd"></i></span></a></li>
	                                                        <li class="active"><a href="#"><span class="sym"><i class="fa fa-eur"></i></span></a></li>
	                                                        <li><a href="#"><span class="sym"><i class="fa fa-gbp"></i></span></a></li>
	                                                    </ul>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="setting-option">
	                                            <ul>
	                                                <li><a href="#"><i class="icon-heart icons"></i><span>Wishlist</span></a></li>
	                                                <li><a href="#"><i class="icon-user icons"></i><span> Hesabım</span></a></li>                                               
	                                                <li><a href="#"><i class="icon-note icons"></i><span>Checkout</span></a></li>
	                                                 <li><a href="#"><i class="icon-handbag icons"></i><span>Şirket</span></a></li>
	                                                 <li><a href="#"><i class="icon-lock-open icons"></i><span>Giriş</span></a></li>
	                                            </ul>
	                                        </div>
	                                	</div>
	                            	</div>
								</div>
                        	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="main-header">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-3">
					<div class="logo">
						<a href="#"><img src="resimler/<?=$logo?>" alt=""></a>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-9">
					<ul class="category-menu">


					

								
						  <?php
                                    foreach($kategoricek as $kategori){
									?>		
						<li>
							<a href="<?=$kategori['seo']?>">
							<img src="<?=$kategori['resim']?>" alt="">
							<?=$kategori['adi']?>
							</a>
						</li><?php }?>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>