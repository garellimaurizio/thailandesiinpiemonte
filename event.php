<?php
	include('includes/header.php');
	
	if(isset($_GET['name'])) {
		$key = strip_bad_chars( $_GET['name'] );
		$event = $events[$key];
	}
	
?>
	
<!--  EVENTO
=============================================== -->
<section class="event white-bg">
	<div class="container">
		<div class="row">
				<h3><?php echo $event[title]; ?></h3>
				<hr />
				<img src="<?php echo $event[eventImg]; ?>" alt="<?php echo $event[altImg]; ?>" class="img-responsive">
				<h6><?php echo $event[stringData]; ?></h6>
				<h5><?php echo $event[place]; ?></h5>
				<BR />
				<p><?php echo $event[description]; ?></p>
			</div><!-- end row -->
			
			<p><?php getImages($event[imgFolder]); ?></p>
			
			<!-- MULTIMEDIA FILTER -->
 			<div class="multimediaFilter text-center">
				<ul class="nav nav-pills center-pills">
					<?php
						$activeFlag = " class=\"active\"";
						if ($event[imgFolder] != '') {
							echo "<li$activeFlag><a href=\"#\" data-filter=\".image\">".IMAGES."</a></li>";
							$activeFlag = '';
						}

						if ( !empty($event['videos']) )
							echo "<li$activeFlag><a href=\"#\" data-filter=\".video\">".VIDEOS."</a></li>";
					?>
				</ul>
			</div><!-- FINE multimediaFilter -->

			
			<div class="row imageContainer">
				<?php 
					$startFlag = " start";

					if ($event[imgFolder] != '') {
						echo "<div class=\"zoom-gallery".$startFlag." image\">";
						$startFlag = '';
						
						$images = getImages($event[imgFolder]);
						foreach ($images as $img) {
							echo "<a href=\"" . $event[imgFolder] . $img['imgFull'] . "\" title=\"".$event[title]."\"><img src=\"" . $event[imgFolder] . $img['thumb'] . "\"></a>";
						}							
						echo "</div><!-- end col-sm-12 -->";
					}
				?>

				<?php 
					
					if ( !empty($event['videos']) ){
					
						echo "<div class=\"video".$startFlag."\">";
	
						foreach ($event[videos] as $video) {
							echo "<div class=\"row\">";
							echo "	<div class=\"col-xs12 col-sm-8 col-sm-offset-2\">";
							echo "		<iframe width=\"100%\" height=\"400\"class=\"embed-responsive-item\" src=\"$video\" frameborder=\"0\" allowfullscreen></iframe>";
							echo "	</div>";
							echo "</div>";
						}
						echo "</div><!-- end video -->";
					}
				?>

				</div><!-- end row -->

		</div><!-- end container -->
		
		<?php include('includes/magnific_popup.php'); ?>

	</section><!-- end description -->

<?php include('includes/footer.php'); ?>