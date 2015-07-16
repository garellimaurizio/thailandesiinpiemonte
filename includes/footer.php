	<!-- FOOTER
	=============================================== -->
	<section class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<h6><?php echo $navItems['about']['title']; ?></a></h6>
					<hr>
					<?php 
						foreach ($navItems['about']['slug'] as $link){
							echo "<p><a href=\"$link[slug]\">$link[title]</a></p>";
						}
					?>
				</div>
				<div class="col-sm-2">
					<h6><?php echo $navItems['events']['title']; ?></h6>
					<hr>
					<?php
						foreach ($eventsCategory as $event => $category) {
							echo "<p><a href=\"events.php?event=$event\">$category</a></p>";
						}
					?>
				</div>
				<div class="col-sm-2">
					<h6><?php echo $navItems['gallery']['title']; ?></h6>
					<hr>
					
					<?php 
						foreach ($navItems['gallery']['slug'] as $link){
							echo "<p><a href=\"$link[slug]\">$link[title]</a></p>";
						}
					?>
				</div>
				<div class="col-sm-2">
					<address>
						<h6><?php echo $pages['footer']['contactUs']; ?></h6>
						<hr>
						<p><?php echo PHONE; ?> - <?php echo MOBILE; ?></p>
						<p><?php echo EMAIL; ?></p>
					</address>
				</div>
				<div class="col-sm-2 col-sm-offset-2">
					<h6><?php echo $pages['footer']['followUs']; ?></h6>
					<?php include('includes/social.php'); ?>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Isotope Plugin Filter -->
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/my-isotope.js"></script>

	<!-- GridLoadingEffects -->
<!--<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/imagesloaded.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/AnimOnScroll.js"></script>
	<script>
		new AnimOnScroll( document.getElementById( 'grid' ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
				} );
	</script>
-->		
	
	<!-- Magnific Popup core JS file -->
	<script src="js/jquery.magnific-popup.js"></script>
	
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>		TOLTO PER GALLERIA IMMAGINI  -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    
    <!-- Autohide the collapsed navbar after user clic -->
	<script type="text/javascript">
	$('.navbar-collapse a').click(function (e) {
 	   if($('.navbar-toggle').css('display') == 'block' && !$(this).siblings().length){
    	    $('.navbar-collapse').collapse('toggle');
		}
	});
	</script>

  </body>
</html>