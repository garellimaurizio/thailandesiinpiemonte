<?php
	include('includes/header.php');
?>

<!--  CHI SIAMO
	=============================================== -->
	<section class="chi-siamo white-bg">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12">
					<h3><?php echo $pages['about']['sectionTitle']; ?></h3>
					<hr />
					
					<img class="img-responsive" id="members" src="assets/img/group.jpg" alt="Membri TIP">
					<BR />
						<?php echo $about['intro1'] ?>
						<?php echo $about['intro2'] ?>


						<ul>
							<?php echo $about['point1'] ?>
							<?php echo $about['point2'] ?>
							
							<?php echo $about['point11'] ?>
							<?php echo $about['point22'] ?>
							<?php echo $about['point33'] ?>
							<?php echo $about['point44'] ?>
							<?php echo $about['point55'] ?>
							<div class="row">
								<div class="col-sm-6 feste">
									<img class="img-responsive" src="<?php echo $about['img3'] ?>" alt="<?php echo $about['imgAlt3'] ?>">
								</div>
								<div class="col-sm-6 feste">
									<img class="img-responsive" src="<?php echo $about['img4'] ?>" alt="<?php echo $about['imgAlt4'] ?>">
								</div>
							</div>
							<?php echo $about['point66'] ?>
							<?php echo $about['point3'] ?>
							<div class="row">
								<div class="col-sm-6 feste">
									<img class="img-responsive" src="<?php echo $about['img1'] ?>" alt="<?php echo $about['imgAlt1'] ?>">
								</div>
								<div class="col-sm-6 feste">
									<img class="img-responsive" src="<?php echo $about['img2'] ?>" alt="<?php echo $about['imgAlt2'] ?>">
								</div>
							</div>
							<?php echo $about['point4'] ?>
							<?php echo $about['point5'] ?>
							<?php echo $about['point6'] ?>

							

							
						
						</ul>
						
						<?php echo $about['intro3'] ?>
						<?php echo $about['intro4'] ?>
						
						
						
						<?php echo $about['end'] ?>
				</div>
			</div><!-- end row -->
		</div><!-- end container -->
	</section><!-- end description -->



<?php include('includes/footer.php'); ?>
