<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title>
		<?php wp_title(''); ?>
		<?php if(wp_title('', false)) { echo ' :'; 
    } ?>
		<?php bloginfo('name'); ?>
	</title>

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
	<div class="container-fluid">
		<div class="row full-width-row">
			<!-- header -->
			<div class="col-md-3 col-lg-2 sticky-top">
				<header class="header clear h-100  snav" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">


						<div class="row w-100 marg0 ">

							<div class="col-md-4 w-25">
							</div>

							<div class="col-md-4 w-50 text-center">
								<?php html5blank_nav(); ?>
							</div>

							<div class="col-md-4 w-25">
							</div>
						</div>





					</nav>
					<!-- /nav -->

						</br>

					<!-- footer -->
					<div class="h-25 text-center ">

						<!-- copyright -->
						<p>
							&copy;
							<?php echo date('Y'); ?> Copyright
							<?php bloginfo('name'); ?>.
							</br>
							<?php _e('Powered by', 'html5blank'); ?>
							<a href="//wordpress.org" title="WordPress">WordPress</a>
							<a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
						</p>
						<!-- /copyright -->

					</div>
					<!-- /footer -->

				</header>

			</div>

			<!-- /header -->
