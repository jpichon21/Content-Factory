<!---------------------------------------->
<!---------------------------------------->
<!--- DEVELOPPEMENT PAR NCP MULTIMEDIA --->
<!------https://ncpmultimedia.com/-------->
<!---------------------------------------->
<!---------------------------------------->
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-MZWDQGN');</script>
		<!-- End Google Tag Manager -->
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162004483-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-162004483-1');
		</script>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Creative Factory</title>

		<meta name="description" content="Creative Factory">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://use.typekit.net/zuv7hqs.css">
		<link rel="stylesheet" src="main.css">

		<link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/spectre.min.css'; ?>">
		<link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/slick.css'; ?>">
		<link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/slick-theme.css'; ?>">
		<link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/lightbox.css'; ?>">

		<script src="<?php echo get_template_directory_uri() . '/js/jquery-3.4.1.min.js'; ?>"></script>
		<script src="<?php echo get_template_directory_uri() . '/js/slick.min.js'; ?>"></script>
		<script src="<?php echo get_template_directory_uri() . '/js/lightbox.js'; ?>"></script>

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
			<header class="header clear" role="banner">

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
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
