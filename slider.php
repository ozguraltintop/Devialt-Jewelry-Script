<!-- Home slide -->
	<div class="home-slide1 owl-carousel nav-style1" data-items="1" data-nav="true" data-dots="false" data-loop="true" data-autoplay="true">
		<?php
foreach($slidercek as $slider){
?>
		<img src="../resimler/<?=$slider['resim']?>" alt="" style="height: 520px;">
		
<?php }?>
	</div>
	<!-- ./Home slide -->