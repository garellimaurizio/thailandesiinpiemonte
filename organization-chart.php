<?php
	include('includes/header.php');
?>

<!--  ORGANIGRAMMA
	=============================================== -->
	<section class="organigramma white-bg">
		<div class="container">
			<div class="row">
				<h3><?php echo $pages['organization-chart']['sectionTitle']; ?></h3>
				<hr />
				
				
				<?php 
					foreach ($organizationChart as $member) {
						
						echo "<div class=\"row team\">";
						echo "	<div class=\"col-sm-3 col-sm-offset-2\">";
						echo "		<img src=\"$member[imgPath]\" alt=\"$member[imgAlt]\" class=\"img-circle\">";
						echo "	</div>";
						echo "	<div class=\"col-sm-6 col-sm-offset-1\">";
						echo "		<h4>$member[name]</h4>";
						echo "		<h4><small>$member[role]</small></h4>";
						echo "	</div>";
						echo "</div>";
						echo "";
					}
				?>

				</div><!-- end row -->
		</div><!-- end container -->
	</section><!-- end description -->



<?php include('includes/footer.php'); ?>
