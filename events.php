<?php
	include('includes/header.php');
?>

	<!--  EVENTO
	=============================================== -->
	<section class="events white-bg">
		<div class="container">
			<div class="row">
				<h3><?php echo $pages['events']['sectionTitle']; ?></h3>
				<hr />

				<main id="content" class="col-sm-10" role="main">
				
				<?php
					
					$param = array (
								"var" => '',
								"value" => ''
							);
					
					if(isset($_GET['event'])) {
						$param['value'] = strip_bad_chars( $_GET['event'] );
						$param['var'] = "event";
					}
					
					if(isset($_GET['category'])) {
						$param['value'] = strip_bad_chars( $_GET['category'] );
						$param['var'] = "category";
						
					}
					if(isset($_GET['date'])) {
						$param['value'] = strip_bad_chars( $_GET['date'] );
						$param['var'] = "date";
					}
					
					
					//Sort post in descending order by data, using uasort for maintain index association
					uasort($events, 'compare_data_desc');
					
					foreach ($events as $key => $event) {

						if ($param['var'] != '')
						{
							
							if ($param['var'] == "event")
							{
								if ($param['value'] != substr($key, 0, strlen($key)-5))
									continue;
							}

							if ($param['var'] == "category")
							{
								if ($param['value'] != $event['category'])
									continue;
							}
							
							if ($param['var'] == "date")
							{
								if ( $param['value'] != substr($event['date'], 3, strlen($event['date'])) )
									continue;
							}

						}

						echo "<article class=\"post\">";
						echo "	<header>";
						echo "		<h3>$event[title]</h3>";
						echo "		<img src=\"$event[eventImg]\" alt=\"$event[altImg]\" class=\"img-responsive\">";
						echo "		<h6>$event[stringData]</h6>";
						echo "		<h5>$event[place]</h5>";
						echo "		<BR />";
						echo "	</header>";
						echo "	<div class=\"post-excerpt\">";
						echo "		<p>$event[excerpt] [...] <a href=\"event.php?name=$key\">".$pages['events']['readMore']." &raquo;</a></p>";
						echo "	</div>";
						echo "</article>";
					}

				?>

				</main>

				<?php include("includes/events_sidebar.php"); ?>

			</div><!-- end row -->			
		</div><!-- end container -->

	</section><!-- end description -->
	
	<?php include('includes/footer.php'); ?>

	<?php 
		function compare_data_desc($a, $b)
		{
    		return $a['date'] < $b['date'];
		}
	?>
