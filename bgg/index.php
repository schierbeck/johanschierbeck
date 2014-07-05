<!DOCTYPE html>

<!--[if lt IE 7 ]> <html dir="ltr" lang="en" class="ie6 ie"> <![endif]-->
<!--[if IE 7 ]> <html dir="ltr" lang="en" class="ie7 ie"> <![endif]-->
<!--[if IE 8 ]> <html dir="ltr" lang="en" class="ie8 ie"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="ie9 ie"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html dir="ltr" lang="en"> <!--<![endif]-->

<head>
	<!-- Encoding & language
	////////////////////////////// -->
  	<meta charset="utf-8">

  	<!-- Page info
	////////////////////////////// -->
  	<title>Mina sällskapsspel</title>
  	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="canonical" href="">

  	<!-- Mobile
  	////////////////////////////// -->
  	<meta name="HandheldFriendly" content="true">
  	<meta name="MobileOptimized" content="320"><!--  -->
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

	<!-- Stylesheets
	////////////////////////////// -->
	<link rel="stylesheet" type="text/css" media="screen" href="library/css/style.css">

	<!-- Favicons
	////////////////////////////// -->
	<link rel="apple-touch-icon" sizes="144x144" href="library/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="114x114" href="library/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="library/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" href="library/favicons/touchicon.png">
	<link rel="icon" href="library/favicons/favicon.png">

	<!-- Analytics
	////////////////////////////// -->
	<script type="text/javascript">

	</script>

</head>
<body>

	<div class="wrap">
	
		<div class="overlay"></div>
	

		<main class="stack2 full image-grid" role="main">

		<?php
			$rated = 'http://www.boardgamegeek.com/xmlapi/collection/schierbeck?own=1';
			$rateXML = simplexml_load_file($rated);
			$gameurl = 'http://boardgamegeek.com/xmlapi/boardgame/103885?stats=1';
			$xml = simplexml_load_file($gameurl);
			$items = count($rateXML->item);

			$i = 0;
			for ($i = 0; $i < $items; $i++) { ?>

				<div class="image">
					<div style="background-image: url('<?php echo $rateXML->item[$i]->image; ?>'); background-size: cover; background-position: top center;">
					</div>
					<section>
						<h1><?php echo $rateXML->item[$i]->name . ' (' . $rateXML->item[$i]->yearpublished  . ')'; ?></h1>
						<span class="rate">
							<?php echo number_format((float)$rateXML->item[$i]->stats->rating->average['value'], 2, '.', ''); ?>
						</span>
						<a href="http://boardgamegeek.com/boardgame/<?php echo $rateXML->item[$i]->attributes()->objectid;; ?>" target="_blank">Länk till BoardGameGeek</a>

					</section>
				</div>
			<?php } ?>
		</main>

   	</div><!-- end of .wrap -->

<!-- Javascript ////////////////////////////// -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="library/js/jquery.js">\x3C/script>')</script>
<script type="text/javascript" src="library/js/script.js"></script>

</body>
</html>