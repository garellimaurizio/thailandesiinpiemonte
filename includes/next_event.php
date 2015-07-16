<?php 
	
	if ($_SESSION['lang'] == 'it')
		setlocale(LC_TIME, 'ita', 'it_IT');
	else
		setlocale(LC_TIME, 'th', 'th_TH.utf8');

?>

	<section class="event white-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h3><?php echo $pages['next_event']['sectionTitle']; ?></h3>
					<hr />
					<div class="col-sm-6 col-xs-height">
						<h3><?php echo strtoupper( $nextEvent['title'] ); ?></h3>
						<h6><?php 
							
							if ($_SESSION['lang'] == 'th') {
									$dayName = strftime("%A", strtotime($nextEvent['date']));
									$day = strftime("%d", strtotime($nextEvent['date']));
									$month = strftime("%m", strtotime($nextEvent['date']));
									$year = strftime("%Y", strtotime($nextEvent['date']));
									echo strtoupper(getThaiDay($dayName)." ".$day." ".getThaiMonth($month)." ".$year);
							}
							else
								echo strtoupper( strftime("%A %d %B %Y", strtotime($nextEvent['date'])) ); ?></h6>
						<?php echo $nextEvent['text'] ?>
					</div>
					<div class="col-sm-6 col-xs-height col-middle">
							<img src="<?php echo $nextEvent['featuredImg']; ?>" alt="<?php echo $nextEvent['altImg']; ?>" class="img-responsive">							
					</div>

				</div>
			</div><!-- end row -->
		</div><!-- end container -->
	</section><!-- end description -->