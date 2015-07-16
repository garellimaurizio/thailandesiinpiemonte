<aside class="col-sm-2">

	<div class="widget">
		<h4><?php echo $pages['events_sidebar']['events']; ?></h4>
		<ul>
			<?php
				foreach ($eventsCategory as $event => $category) {
					echo "<li><a href=\"events.php?event=$event\">$category</a></li>";
				}
			?>
		</ul>				
	</div>
			
	<div class="widget">
		<h4><?php echo $pages['events_sidebar']['category']; ?></h4>
		<ul>
			<?php
				$eventCatTagOrdered = array_unique($eventCatTag); 
				foreach ($eventsType as $key => $type) {
					echo "<li><a href=\"events.php?category=$type\">$type</a></li>";
				}
			?>
		</ul>				
	</div>


	<div class="widget">
		<h4><?php echo $pages['events_sidebar']['archive']; ?></h4>
		<ul>
			<?php 
				foreach ($events as $key => $event) {
					
					if ($_SESSION['lang'] == 'it')
						setlocale(LC_TIME, 'ita', 'it_IT');
//					else
//						setlocale(LC_TIME, 'th', 'th_TH.utf8');
						
					
					if ($_SESSION['lang'] == 'th') {
						setlocale(LC_TIME, 'th', 'th_TH.utf8');
						$month = strftime("%m", strtotime($event['date']));
						$year = strftime("%Y", strtotime($event['date']));
						$date = getThaiMonth($month)." ".$year;
					}
					else
						$date = strftime("%B %Y", strtotime($event['date']));

					$param = strftime("%m-%Y", strtotime($event['date']));
					echo "<li><a href=\"events.php?date=$param\">".$date."</a></li>";
				}
			?>
		</ul>
	</div>

</aside>