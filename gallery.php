<?php get_header();
?>
<?php /* Template Name: Gallery */ ?>


<div id="main-container" class="container">

<div class="row row-centered" id="post-row">
		<?php
		$classes = array(
			'col-xs-6',
			'col-sm-4',
			'col-md-3',
			'col-centered',
			'gallery-post-col',
		);

		// The Loop
		$args = array(
			'post_type' => 'post',
		);
		$query = new WP_query($args);
		if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
		?>

			<div <?php post_class($classes); ?>>

			<div id="post-<?php the_ID(); ?>" >


				<div class="image-container">
				<span class="helper"></span>
				<?php if (has_post_thumbnail()) { ?>
				<a class="post-link" href="<?php the_permalink(); ?>?post_id=post-<?php the_ID(); ?>" ><img class="featured-image" src="<?php the_post_thumbnail_url(); ?>"></a>
				<?php }  ?>
				<h2 class="post-title"> <?php the_title(); ?> </h2>
				</div>

			</div>

	</div>

		   <?php


			  endwhile;
				endif; ?>

		</div>
	</div>
