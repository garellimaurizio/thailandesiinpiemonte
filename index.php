<?php
	include('includes/header.php');
?>

   <!--  HERO
	=============================================== -->
	<section class="header-img cd-fixed-bg cd-bg-1">
		<h1>Thailandesi in Piemonte</h1>
		<h1>ชมรมชาวไทย แคว้นปิมอนเต</h1>
	</section><!-- end hero -->
	
	<!--  DESCRIPTION
	=============================================== -->
	<section class="description">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<p><?php echo $pages['home']['description']; ?></p>
					<a id="my-triangle" class="hidden-xs" href="#"></a>
				</div><!-- end col-sm-8 col-sm-offset-2 -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section><!-- end description -->
	
	<!--  NEXT EVENT
	=============================================== -->
	<?php include('includes/next_event.php'); ?>
	
	<!--  PAST EVENTS
	=============================================== -->
	<?php include('includes/past_events.php'); ?>

<?php include('includes/footer.php'); ?>
