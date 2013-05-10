<?php $tdir = get_bloginfo('template_directory'); ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>
		<?php wp_title('|', true, 'right');
		bloginfo( 'name' ); ?>
	</title>
    <meta property="og:image" content="http://www.theymc.com/wp-content/themes/theymc/assets/images/ymc_logo_374.png"/>
    <meta property="fb:admins" content="676480219"/>

	<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" />
	<link rel="stylesheet" href="<?php echo $tdir; ?>/assets/css/app.css" />
	<!-- Media queries for new CSS files -->

	<?php wp_head(); ?>

	<!-- Google Analytics -->
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-3421933-13']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

</head>

<body <?php body_class(); ?>> 
	<header class="site">
      <span class="site_title"><a href="<?php bloginfo('url'); ?>" title="The YMC"><img src="<?php echo $tdir; ?>/assets/img/ymc_logo.png" alt="The YMC" /></a></span>
      <nav class="site">
        <?php 
        	wp_nav_menu(); 
        ?>
      </nav>
    </header>
		