<?php
	include('includes/header.php');
	
?>

<!--  VIDEO
	=============================================== -->
	<section class="video-gallery white-bg">
		<div class="container">
			<div class="row">
				<h3><?php echo $pages['videos']['sectionTitle']; ?></h3>
				<hr />
				<BR />
			</div><!-- end row -->
			
			<!-- MULTIMEDIA FILTER -->
 			<div class="multimediaFilter text-center">
				<ul class="nav nav-pills center-pills">
					
					<?php
						$activeFlag = "class=\"active\"";
						$videoList = array();
						foreach ($events as $key => $event) {
							
							if ( !empty($event['videos']) ){
								echo "<li $activeFlag><a href=\"#\" data-filter=\".$key\">".$event['title']."</a></li>";
								$videoList[] = $key;
								if ($activeFlag != '')
									$activeFlag = '';
							}
						}
					?>
					
				</ul>
			</div><!-- FINE multimediaFilter -->



			
			<div class="row imageContainer">

					<?php
						$startFlag = " start";
				
						foreach ($videoList as $item) {
						
							echo "<div class=\"video$startFlag $item\">";
						
							foreach ($events[$item]['videos'] as $video) {
								echo "<div class=\"row\">";
								echo "	<div class=\"col-xs12 col-sm-8 col-sm-offset-2\">";
								echo "		<iframe width=\"100%\" height=\"400\"class=\"embed-responsive-item\" src=\"$video\" frameborder=\"0\" allowfullscreen></iframe>";
								echo "	</div>";
								echo "</div>";
							}

							echo "</div>";
						
							if ($startFlag != '')
								$startFlag = '';
						}
					?>
				</div><!-- end row -->


		</div><!-- end container -->

	</section><!-- end description -->






<?php include('includes/footer.php'); ?>