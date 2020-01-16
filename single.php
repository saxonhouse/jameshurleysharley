
<?php get_header(); ?>

<div class="container">
<div class="row row-centered" id="post-row">
		<?php
		$classes = array(
			'col-xs-12',
			'col-centered',
			'single-post-col',
		);
		if(have_posts()) :
			 		while(have_posts()) : the_post(); ?>

			<div <?php post_class($classes); ?>>

			<div id="post-<?php the_ID(); ?>" >


				<div class="image-container">

				<?php if (has_post_thumbnail()) { ?>
				<a class="post-link" href="<?php the_permalink(); ?>?post_id=post-<?php the_ID(); ?>" >
					<img class="featured-image" src="<?php the_post_thumbnail_url(); ?>"></a>
				<?php }  ?>
				<h2 class="post-title"> <?php the_title(); ?> </h2>
				</div>
				<?php if( '' !== get_post()->post_content ) { ?>
				<div class="row">
				<div class="col-xs-12">

					<div class="body"> <?php the_content(); ?> </div>
				</div>
				</div>
			<?php } ; ?>

			</div>

	</div>

</div>

<div class="row post-links">
  <div class="col-xs-12">
		<div style="float: left">
<?php previous_post_link('<div class="post-link">%link</div>', '<i class="fa fa-arrow-left" aria-hidden="true"></i> Previous'); ?>
		</div>
		<div style="float:right; text-align: right;">
			<?php next_post_link('<div class="post-link">%link</div>', 'Next <i class="fa fa-arrow-right" aria-hidden="true"></i> '); ?>
  	</div>
</div>
</div>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
