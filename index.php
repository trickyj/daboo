<!DOCTYPE html>
<html>
<head>
	<title>Fusion -- home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="_/css/bootstrap.css">
	<link rel="stylesheet" type="tex/css" href="_/components/css/_mystyles.less">
	<link rel="stylesheet" type="text/css" href="_/css/mystyles.css">
</head>
<body id="home">
	<section class="container">
		<div class="content row">
			<?php include "_/components/php/header.php"; ?>
			<?php include "_/components/php/snippet-carousel.php"; ?>
		<section class="main col col-lg-8">  
			<?php include "_/components/php/article-intro.php"; ?>
			<?php include "_/components/php/article-abouttheartists.php"; ?>
			<?php include "_/components/php/article-aboutthevenue.php"; ?>
		</section> <!-- main -->

		<section class="sidebar col col-lg-4">
			<?php include "_/components/php/aside-register.php"; ?>
			<?php include "_/components/php/aside-lastyear.php"; ?>
			<?php include "_/components/php/aside-accordian.php";?>

			
		</section><!-- sidebar -->	

		</div><!-- content -->
			<?php include "_/components/php/footer.php"; ?>
		</section><!-- containter -->	
 
	<script type="text/javascript" src="_/components/js/jquery.js"></script>
	<script type="text/javascript" src="_/components/js/bootstrap.js"></script>
	<script type="text/javascript" src="_/components/js/modal.js"></script>
	<script type="text/javascript" src="_/js/myscript.js"></script>
</body>
</html>



