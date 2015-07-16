<?php 
//	include('includes/db.it.php');
	include('includes/common.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TIP | Associazione Thailandesi in Piemonte</title>
    <meta name="description" content="Associazione di cittadini Thailandesi residenti in Piemonte" />
	<meta name="keywords" content="piemonte, thailandia, thailandesi, italia, associazione" />
    
    

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- My main CSS file -->
	<link href="css/custom.css" rel="stylesheet">
	

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
	
	<!-- Font Awesome Icons -->
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
	
	<!-- GridLoadingEffects -->
<!-- <link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>
 -->
	
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	
	<!-- Languages for Bootstrap 3 -->
	<link rel="stylesheet" href="css/languages.css"/>
	
	<!-- flag-icon-css -->
	<link rel="stylesheet" href="css/flag-icon.css"/>
   
    
  </head>
  <body>
	  
  	<!--  HEADER
	=============================================== -->
    <header>

	    <!-- NAVBAR
		================================================== -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-tip">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand visible-xs-block" href="#"><?php echo BRAND ?></a>
				</div><!-- navbar-header -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-tip">

					<!--  SOCIAL
					=============================================== -->
					<div class="social-navbar pull-right hidden-xs">
						<?php include('includes/social.php'); ?>
					</div>
					
					<!-- LANGUAGE -->
					<div class="btn-group pull-left language-btn">
						
						<?php if ($_SESSION['lang'] == 'it')
								echo "<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><span class=\"flag-icon flag-icon-it\"></span> IT <span class=\"caret\"></span></button>";
								else
									echo "<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><span class=\"flag-icon flag-icon-th\"></span> TH <span class=\"caret\"></span></button>";
						?>
						<ul class="dropdown-menu" role="menu">
							
							<?php if ($_SESSION['lang'] == 'it')
								echo "<li><a href=\"index.php?lang=th\"><span class=\"flag-icon flag-icon-th\"></span> TH</a></li>";
								else
								echo "<li><a href=\"index.php?lang=it\"><span class=\"flag-icon flag-icon-it\"></span> IT</a></li>";
								
						?>
							
						</ul>
					</div>
		
				<ul class="nav navbar-nav">
					<?php include('includes/nav.php'); ?>
				</ul>					

				</div><!-- /.navbar-collapse -->

			</div><!-- /.container-fluid -->
		</nav>
		
		
		 
		
 </header>
	
