<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
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


        <button id="collapsed-button" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="big-menu">
        <ul class="nav nav-justified">
          <li><a href="<?php echo home_url() ;?>" <?php if (is_home()) {?>class="active-page"<?php };?>><img class="navlinkimg" src="<?php echo get_template_directory_uri(); ?>/img/home.png"></a></li>
          <li><a href="<?php echo home_url() ;?>/index.php/gallery" <?php if (is_page_template('gallery.php')) {?>class="active-page"<?php };?>><img  class="navlinkimg" src="<?php echo get_template_directory_uri(); ?>/img/gallery.png"></a></li>
          <li><a href="<?php echo home_url() ;?>/index.php/about" <?php if (is_page_template('about.php')) {?>class="active-page"<?php };?>><img class="navlinkimg" src="<?php echo get_template_directory_uri(); ?>/img/about.png"></a></li>
          <li><a href="<?php echo home_url() ;?>/index.php/shop" <?php if (is_woocommerce()) {?>class="active-page"<?php };?>><img class="navlinkimg" src="<?php echo get_template_directory_uri(); ?>/img/shop.png"></a></li>
          <li><a href="<?php echo home_url() ;?>/index.php/lucky-dip" <?php if (is_page_template('luckydip.php')) {?>class="active-page"<?php };?>><img id="dicenav" src="<?php echo get_template_directory_uri(); ?>/img/dice.png"></a></li>
        </ul>
      </div><!-- /.navbar-collapse -->

    </nav>

    <?php if (is_cart()) { ?>
      <div class="navbar">
        <ul class="nav">
          <li><a id="single-back-link" href="<?php echo home_url(), '/index.php/shop'; ?>">
             Back to shop </a></li>
        </ul>
      </div>

    <?php ;} ?>
