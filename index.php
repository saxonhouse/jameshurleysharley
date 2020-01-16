<?php get_header(); ?>

<div id="main-container" class="container">

<div class="row row-centered" id="post-row">
		<?php
		$classes = array(
			'col-xs-12',
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
				</div>

			</div>

	</div>

		   <?php $count++;
				endwhile; ?>

				<script>
				jQuery('#collapsed-button').hide();
				bigLogo();

				function homepage_posts(category, load) {


					category_class = '.category-' + category;
					post_count = jQuery(category_class).length;
					jQuery('.post-col').animate({'opacity':'0'}, 600, function() {
						jQuery(category_class).removeClass('col-sm-6 col-md-6 col-md-4');
						if (post_count == 2) {
							jQuery(category_class).addClass('col-sm-6 col-md-6');
						}
						else if (post_count > 2) {
							jQuery(category_class).addClass('col-sm-6 col-md-4');
						}
						jQuery('.post-col').hide()
						jQuery(category_class).show();
						if (load != true) {
							var page = jQuery('html, body')
							page.on("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove", function(){
	       			page.stop();
	   					});
							page.animate({ scrollTop: jQuery(".post-col").offset().top }, 300, function(){
	       			page.off("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove");
	   					});
						}
					});
					jQuery(category_class).animate({'opacity':'1'}, 600)
					};



					homepage_posts('page1', true);
				</script>

		</div>
	</div>


					<div class="homefoot container">
						<div class="homefoot_inner col-md-12 text-center">
							<ul class="nav nav-pills center-pills homefoot_nav ">
								<li onclick="homepage_posts('page1', false)"><a  href="#"><img class="symbol" src="<?php echo get_template_directory_uri(); ?>/img/1.gif"></a></li>
								<li onclick="homepage_posts('page2', false)"><a  href="#"><img class="symbol" src="<?php echo get_template_directory_uri(); ?>/img/2.png"></a></li>
								<li onclick="homepage_posts('page3', false)"><a  href="#"><img class="symbol" src="<?php echo get_template_directory_uri(); ?>/img/3.gif"></a></li>
								<li onclick="homepage_posts('page4', false)"><a  href="#"><img class="symbol" src="<?php echo get_template_directory_uri(); ?>/img/4.gif"></a></li>
								<li onclick="homepage_posts('page5', false)"><a  href="#"><img class="symbol" src="<?php echo get_template_directory_uri(); ?>/img/5.gif"></a></li>
							</ul>
						</div>
					</div>



		<?php else : ?>

		<div class="alert alert-info">
		  <strong>No content in this loop</strong>
		</div>

		<?php endif; ?>



<?php get_footer(); ?>
