

<?php get_header(); ?>




<div id="main-container" class="container">
  <div class="row row-centered">
    <?php woocommerce_content(); ?>
  </div>
</div>

<div id="basket-bar">
    <button class="btn btn-default"><a id="single-back-link" href="<?php echo home_url(), '/index.php/basket'; ?>">
    <i class="fa fa-shopping-cart" aria-hidden="true"></i> </a></li>
</div>

<?php get_footer(); ?>
