<?php
	include('includes/header.php');
?>

   <!--  CONTATTI
	=============================================== -->
	<section class="contatti white-bg">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12">
					<h3><?php echo $pages['contacts']['sectionTitle']; ?></h3>
					<hr />
						<p><?php echo $pages['contacts']['text']; ?></p>
						<p><?php echo $pages['contacts']['phone']; ?> <?php echo PHONE; ?> - <?php echo MOBILE; ?></p>
						<p><?php echo $pages['contacts']['email']; ?> <?php echo EMAIL; ?></p>

						<BR />
						
						<div class="row" id="social-bottom">
							<div class="col-sm-5 col-sm-offset-4">
			    				
								<div id="social-contacts" class="col-xs-6">
									<p><?php echo $pages['contacts']['facebook']; ?></p>
									<p><?php echo $pages['contacts']['instagram']; ?></p>
									<p><?php echo $pages['contacts']['youtube']; ?></p>
								</div>
								
								<div id="social-contacts-lnk"class="col-xs-6">
									<p><a href="<?php echo FACEBOOK; ?>" target="_blank">Thailandesi in Piemonte</a></p>
									<p><a href="<?php echo INSTAGRAM; ?>" target="_blank">@thailandesiinpiemonte</a></p>
									<p><a href="<?php echo YOUTUBE; ?>" target="_blank">TIP CHANNEL</a></p>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-3">
								<h4><span class="glyphicon glyphicon-map-marker"></span> <?php echo $pages['contacts']['place']; ?></h4>
								<address><p>Via Paolo Sarpi 120,<BR />10135 Torino</p></address>
							</div>
							<div class="col-sm-9">
																
								<iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2819.665934316504!2d7.642939900000001!3d45.0317066!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47881327791c7063%3A0x495e0a7c72a431cc!2sVia+Paolo+Sarpi%2C+120%2C+10135+Torino!5e0!3m2!1sit!2sit!4v1427824095140"></iframe>



							</div>
						</div>
						
								
								

				</div>
			</div><!-- end row -->
		</div><!-- end container -->
	</section><!-- end description -->

	

<?php include('includes/footer.php'); ?>
