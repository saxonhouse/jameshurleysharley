<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Lobster|Noto+Sans|Vollkorn+SC" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sidebar.css">
    <?php wp_enqueue_script( 'general', get_template_directory_uri() . '/js/general.js', array ( 'jquery' )); ?>
    <?php wp_enqueue_script( 'varysize', get_template_directory_uri() . '/js/varysize.js', array ( 'jquery' )); ?>
    <?php wp_enqueue_script( 'bootstrapscript', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' )); ?>
    <?php wp_head(); ?>
	</head>

  <body <?php body_class(isset($class) ? $class : ''); ?>>

    <nav id="header" class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->

      <div class="navbar-header logo-head">
        <div id="niall">
          <a href="<?php echo home_url(); ?>"> <img id="logoimg" src="<?php echo get_template_directory_uri(); ?>/img/header.png"></a>
        </div>
        <?php if(is_home()||is_single()) { ?>
          <style>
          #niall {
            text-align: center;
            display: block;
            margin: auto;
          }
          </style>
        <?php }
        else { ?>
        <div id="mobile-title">
          <img class="navlinkimg" src="<?php echo get_template_directory_uri(); ?>/img/<?php
          if(is_page_template('gallery.php')) { ?>gallery<?php }
          elseif(is_page_template('about.php')) { ?>about<?php }
          elseif(is_woocommerce()) { ?>shop<?php }
          elseif(is_page_template('luckydip.php')) {?>luckydip<?php }; ?>click.png">
        </div>
        <?php }; ?>

        <button id="collapsed-button" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>

      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="big-menu">
        <ul class="nav nav-justified header-nav">
          <li><a href="<?php echo home_url() ;?>" <?php if (is_home()) {?>class="active-page"<?php }; ?>><img class="navlinkimg" src="<?php echo get_template_directory_uri(); ?>/img/home<?php if(is_home()) {?>click<?php }; ?>.png"></a></li>
          <li><a href="<?php echo home_url() ;?>/index.php/gallery" <?php if (is_page_template('gallery.php')) {?>class="active-page"<?php };?>><img  class="navlinkimg" src="<?php echo get_template_directory_uri(); ?>/img/gallery<?php if(is_page_template('gallery.php')) {?>click<?php }; ?>.png"></a></li>
          <li><a href="<?php echo home_url() ;?>/index.php/about" <?php if (is_page_template('about.php')) {?>class="active-page"<?php };?>><img class="navlinkimg" src="<?php echo get_template_directory_uri(); ?>/img/about<?php if(is_page_template('about.php')) {?>click<?php }; ?>.png"></a></li>
          <li><a href="<?php echo home_url() ;?>/index.php/shop" <?php if (is_woocommerce()) {?>class="active-page"<?php };?>><img class="navlinkimg" src="<?php echo get_template_directory_uri(); ?>/img/shop<?php if(is_woocommerce()) {?>click<?php }; ?>.png"></a></li>
          <li><a href="<?php echo home_url() ;?>/index.php/lucky-dip" <?php if (is_page_template('luckydip.php')) {?>class="active-page"<?php };?>><img class="navlinkimg" src="<?php echo get_template_directory_uri(); ?>/img/luckydip<?php if(is_page_template('luckydip.php')) {?>click<?php }; ?>.png"></a></li>
        </ul>
        <ul class="mobile-li nav nav-justified">
          <li class="mobile-inner-li">
              <a class="mobile-social" href="https://instagram.com/nialldraws/" target="_blank"><img class="mobile-social-image" src="<?php echo get_template_directory_uri(); ?>/img/sidetab1mob.png"></a>
              <a class="mobile-social" href="https://twitter.com/nialldraws" target="_blank"><img class="mobile-social-image" src="<?php echo get_template_directory_uri(); ?>/img/sidetab2mob.png"></a>
              <a class="mobile-social" href="https://behance.net/niallmcgonagle" target="_blank"><img class="mobile-social-image" src="<?php echo get_template_directory_uri(); ?>/img/sidetab3mob.png"></a>
          </li>
        <ul>
      </div><!-- /.navbar-collapse -->

    </nav>


    <div id="sidebar">
      <a href="https://instagram.com/nialldraws/" target="_blank"><img class="sidebar-image" src="<?php echo get_template_directory_uri(); ?>/img/sidetab1.png"></a>
      <a href="https://twitter.com/nialldraws" target="_blank"><img class="sidebar-image" src="<?php echo get_template_directory_uri(); ?>/img/sidetab2.png"></a>
      <a href="https://behance.net/niallmcgonagle" target="_blank"><img class="sidebar-image" src="<?php echo get_template_directory_uri(); ?>/img/sidetab3.png"></a>
    </div>


    <?php if (is_cart()) { ?>
      <div class="navbar">
        <ul class="nav">
          <li><a id="single-back-link" href="<?php echo home_url(), '/index.php/shop'; ?>">
             Back to shop </a></li>
        </ul>
      </div>

    <?php ;} ?>
