<?php get_header();
?>
<?php /* Template Name: About */ ?>
<script>
clicked_image = "<?php get_template_directory_uri() ?>/img/aboutclick.png"
jQuery('#about-image').attr('src', clicked_image);
</script>

<div class="container" id="about">
  <div class="row">
    <div class="col-xs-11 col-sm-5 col-md-6">
      <img id="profile-image" src="<?php echo get_template_directory_uri(); ?>/img/profile.jpg">
    </div>
    <div id="profile-text" class="col-xs-12 col-sm-7 col-md-6">
      <h2 class="profile-title"> <?php the_title(); ?> </h2>
      <h3 class="profile-subtitle"> <?php the_subtitle(); ?></h3>
        <div class="profile-body">
          <?php while ( have_posts() ) : the_post(); ?>
          <div class="entry-content-page">
           <?php the_content(); ?>
         <?php endwhile ; ?>

        </div>
    </div>
  </div>
</div>
