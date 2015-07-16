<!--  PAST EVENTS
	=============================================== -->
	<section class="past-events">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">

					<div class="carousel-reviews">
						<div class="container">
							<div class="row">
								<div id="carousel-reviews" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<?php
											$eventNum = 1;
											$activeFlag = "active";
											foreach ($events as $key => $event) {

												if ($eventNum == 1) {
													echo "<div class=\"item $activeFlag\">";
													echo "	<div class=\"col-md-4 col-sm-6\">";
													$activeFlag = "";
												}
												elseif ($eventNum == 2)
													echo "	<div class=\"col-md-4 col-sm-6 hidden-xs\">";
												elseif ($eventNum == 3) {
													echo "	<div class=\"col-md-4 col-sm-6 hidden-sm hidden-xs\">";
												}
												echo "		<div class=\"thumb-news\">";
												echo "			<img src=\"$event[featuredImg]\" alt=\"$event[altImg]\">";
												echo "			<div class=\"thumb-align\">";
												echo "				<div class=\"thumb-text\">";
												echo "					<h5>".$pages['past_events']['category']." $event[category]</h5>";
												echo "					<p>$event[title]</p>";
/*												echo "					<p><a href=\"$event[slug]\">Leggi... &raquo;</a></p>";*/
												echo "					<p><a href=\"event.php?name=$key\">".$pages['past_events']['readMore']."... &raquo;</a></p>";
												echo "				</div><!-- end thumb-text -->";
												echo "			</div><!-- end thumb-align -->";
												echo "		</div><!-- end thumb-news -->";
												echo "	</div><!-- col-md-4 col-sm-6 -->";
												$eventNum++;
												if($eventNum > 3) {
													echo "</div><!-- end item -->";
													$eventNum = 1;
												}
											}
										?>
									</div><!-- end carousel-inner -->
								</div><!-- end carousel slide -->
									<a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
									</a>
									<a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
									</a>
								
							</div><!-- end row -->
						</div><!-- end container -->
					</div><!-- carousel-reviews -->
				</div><!-- end col-sm-12 -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
