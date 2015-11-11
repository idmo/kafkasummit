<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes() ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes() ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes() ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes() ?>><!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title( '|', true, 'right' ) ?></title>
		<meta name="author" content="">
		<link rel="author" href="">
		<?php wp_head() ?>
    </head>
    <body <?php body_class() ?>>
		<header id="page-header">
			<?php wp_nav_menu(array(
				'theme_location' => 'main-nav',
				'container'      => 'nav',
				'container_id'   => 'global-nav',
				'container_class' => 'navbar',
				'menu_class' => 'nav nav-justified'
			)) ?>
		</header>


		<div class="slide">
		<div class="container">
			<div class="row">
			<div class="col-md-11 col-md-offset-1"> 
				<img src="/content/themes/kafkasummit/images/kafka-summit-2016-logo.png" alt="Kafka Summit 2016 March 12, 2016" class="img-responsive">       
			</div>
			</div>        
		</div>
		</div>	


		



