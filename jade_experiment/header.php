<?php $tdir = get_bloginfo('template_directory'); ?><!DOCTYPE html><!--[if lt IE 7]><html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"></html><![endif]--><!--[if IE 7]><html lang="en" class="no-js lt-ie9 lt-ie8"></html><![endif]--><!--[if IE 8]><html lang="en" class="no-js lt-ie9"></html><![endif]--><!-- [if gt IE 8] <!--><html lang="en" class="no-js"><!-- <![endif]--><head><link rel="stylesheet" href="<?php echo $tdir; ?>/assets/css/normalize.css" /><!-- link(rel="stylesheet",href="assets/console/console_css/console.css")--><link rel="stylesheet" href="<?php echo $tdir; ?>/assets/css/app.css")</head><!-- need to use normal syntax here because of dynamic class--><body <?php body_class(); ?>><header class="site"><span class="branding"><a href="<?php bloginfo('url'); ?>" title="The YMC">
<img src="<?php echo $tdir; ?>/assets/img/ymc_logo.png", alt="The YMC" /></span><nav class="site"><?php wp_nav_menu(); ?></nav></header></html>