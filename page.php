
<?php get_header(); ?>


<div id="main-container" class="container">
  <div class="row row-centered">
    <?php if ( have_posts() ) : ?>
      <?php while(have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile ; ?>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
