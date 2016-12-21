<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

			<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
			<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
			<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
			<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
			<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
			<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
			<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
			<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
			<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
			<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
			<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
			<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
			<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
			<link rel="manifest" href="/manifest.json">
			<meta name="msapplication-TileColor" content="#ffffff">
			<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
			<meta name="theme-color" content="#ffffff">


		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

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

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<?php get_template_part('nav'); ?>
			<!-- /header -->
