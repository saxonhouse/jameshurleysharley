

<?php get_header(); ?>




<div id="main-container" class="container">
  <div class="row row-centered">
    <?php woocommerce_content(); ?>
  </div>
</div>

<div class="navbar" id="basket-bar">
  <ul class="nav">
    <li><a id="single-back-link" href="<?php echo home_url(), '/index.php/shop'; ?>">
       View Basket </a></li>
  </ul>
</div>

<?php get_footer(); ?>
