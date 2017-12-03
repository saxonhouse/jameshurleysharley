<?php get_header(); ?>

<div id="main-container" class="container">

<div class="row row-centered" id="post-row">
		<?php
		$classes = array(
			'col-xs-10',
			'col-centered',
			'post-col',
		);
		if(have_posts()) : ?>
		   <?php $count = 0;
			 		while(have_posts()) : the_post(); ?>

			<div style="display: none" <?php post_class($classes); ?>>

			<div id="post-<?php the_ID(); ?>" >


				<div class="image-container">
				<?php if (has_post_thumbnail()) { ?>
				<a class="post-link" href="<?php the_permalink(); ?>?post_id=post-<?php the_ID(); ?>" ><img class="featured-image" src="<?php the_post_thumbnail_url(); ?>"></a>
				<?php }  ?>
				<h2 class="post-title"> <?php the_title(); ?> </h2>
				</div>

			</div>

	</div>

		   <?php $count++;
				endwhile; ?>

				<script>
				bigLogo();
				function homepage_posts(category) {


					category_class = '.category-' + category;

					post_count = jQuery(category_class).length;
					jQuery(category_class).removeClass('col-sm-6 col-md-6 col-md-4');
					if (post_count == 2) {
						jQuery(category_class).addClass('col-sm-6 col-md-6');
					}
					else if (post_count > 2) {
						jQuery(category_class).addClass('col-sm-6 col-md-4');
					}
					jQuery.each(jQuery('.post-col'), function() {jQuery(this).fadeOut();});
					jQuery.each(jQuery(category_class), function() {jQuery(this).fadeIn();});
				}

					homepage_posts('page1');
				</script>

		</div>
	</div>

				<footer>
					<div class="homefoot container">
						<div class="homefoot_inner col-md-12 text-center">
							<ul class="nav nav-pills center-pills homefoot_nav ">
								<li><a onclick="homepage_posts('page1')" href="#"><img class="symbol" src="<?php echo get_template_directory_uri(); ?>/img/1.gif"></a></li>
								<li><a onclick="homepage_posts('page2')" href="#"><img class="symbol" src="<?php echo get_template_directory_uri(); ?>/img/2.png"></a></li>
								<li><a onclick="homepage_posts('page3')" href="#"><img class="symbol" src="<?php echo get_template_directory_uri(); ?>/img/3.png"></a></li>
								<li><a onclick="homepage_posts('page4')" href="#"><img class="symbol" src="<?php echo get_template_directory_uri(); ?>/img/4.gif"></a></li>
								<li><a onclick="homepage_posts('page5')" href="#"><img class="symbol" src="<?php echo get_template_directory_uri(); ?>/img/5.gif"></a></li>
							</ul>
						</div>
					</div>
				</footer>


		<?php else : ?>

		<div class="alert alert-info">
		  <strong>No content in this loop</strong>
		</div>

		<?php endif; ?>


	<div class="col-md-4">

		<?php
		 if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')) : //  Sidebar name
		?>
		<?php
		     endif;
		?>
	</div>


<?php get_footer(); ?>
