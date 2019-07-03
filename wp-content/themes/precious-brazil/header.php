<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/images/icon.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
			<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/css/CSS.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/css/Tablet.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/css/Mobile.css" rel="stylesheet" type="text/css">
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/JsCode.js" type="text/javascript"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/jssor.slider-26.1.5.min.js" type="text/javascript"></script>
  	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/slick/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/slick/slick/slick-theme.css">


		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

	<?php if(!is_home()){?>
		<section id="Desktop">
			<div class="container-fluid">
				<header>					
					<div class="row">
						<div style="position:absolute; width: 100%; z-index: 99999">
      				<a href="/">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home/logo.png" style="width: 185px; z-index: 9999; margin-top: 40px; margin-left: 10%;">
							</a>
							<nav class="desktop">				  
								<?php wp_nav_menu();?>
	      			</nav>							
      			</div>
							
						</div>
					</div>

				</header>

			</div>
	  		
		</section>
		<section id="Responsive">
			<div class="header">

			<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/home/logo.png"></a>
	
			<div class="icon-menu">
				<div class="line-icon"></div>
				<div class="line-icon"></div>
				<div class="line-icon"></div>		
			</div>

		</div>

		<div class="menu-animate">

			<div class="seta"></div>
    
  		<div class="menu-line"></div>
    
    	<nav class="nav">		  
				<?php wp_nav_menu();?>
    	</nav>

		</div>
		</section>

	<?php }?>

	