
<?php get_header(); ?>

<div class="container">
<div class="row row-centered" id="post-row">
		<?php
		$classes = array(
			'col-xs-9',
			'col-centered',
			'single-post-col',
		);
		if(have_posts()) :
			 		while(have_posts()) : the_post(); ?>

			<div <?php post_class($classes); ?>>

			<div id="post-<?php the_ID(); ?>" >


				<div class="image-container">

				<?php if (has_post_thumbnail()) { ?>
				<a class="post-link" href="<?php the_permalink(); ?>?post_id=post-<?php the_ID(); ?>" ><img class="featured-image" src="<?php the_post_thumbnail_url(); ?>"></a>
				<?php }  ?>
				<h2 class="post-title"> <?php the_title(); ?> </h2>
				</div>

			</div>

	</div>

</div>

<div class="row">
  <div class="col-xs-12">
<?php previous_post_link(); ?>    <?php next_post_link(); ?>
  </div>
</div>
</div>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
