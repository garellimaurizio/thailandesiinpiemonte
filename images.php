<?php
	include('includes/header.php');
	
?>

<!--  IMMAGINI
	=============================================== -->
	<section class="image-gallery white-bg">
		<div class="container">
			<div class="row">
				<h3><?php echo $pages['images']['sectionTitle']; ?></h3>
				<hr />
				<BR />
			</div><!-- end row -->
			
			<!-- MULTIMEDIA FILTER -->
 			<div class="multimediaFilter text-center">
				<ul class="nav nav-pills center-pills">
					
					<?php
						$activeFlag = "class=\"active\"";
						$imageList = array();
						foreach ($events as $key => $event) {
							if ($event[imgFolder] != ''){
								echo "<li $activeFlag><a href=\"#\" data-filter=\".$key\">".$event['title']."</a></li>";
								$imageList[] = $key;
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
					
					foreach ($imageList as $item) {
						
						echo "<div class=\"zoom-gallery$startFlag image $item\">";
						
						$images = getImages($events[$item]['imgFolder']);
						foreach ($images as $img) {
							echo "<a href=\"" . $events[$item]['imgFolder'] . $img['imgFull'] . "\" title=\"". $events[$item]['title'] ."\"><img src=\"" . $events[$item]['imgFolder'] . $img['thumb'] . "\"></a>";
						}	
						
						echo "</div><!-- end col-sm-12 -->";
						
						if ($startFlag != '')
							$startFlag = '';
						
					}

				?>

			</div><!-- end row -->
			
			<?php include('includes/magnific_popup.php'); ?>

			
		</div><!-- end container -->

	</section><!-- end description -->


<?php include('includes/footer.php'); ?>