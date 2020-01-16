<?php get_header();
?>
<?php /* Template Name: LuckyDip */ ?>


<div id="main-container" class="container">

<div class="row row-centered" id="post-row">
		<?php
		$classes = array(
			'col-xs-12',
			'col-centered',
			'single-post-col',
		);
		// The Loop
    $args = array(
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 1,
    );
		$query = new WP_query($args);
		if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
		?>

			<div <?php post_class($classes); ?>>

			<div id="post-<?php the_ID(); ?>" >


				<div class="image-container">
				<span class="helper" id="diceroll"></span>
				<?php if (has_post_thumbnail()) { ?>
				<a class="post-link" href="<?php the_permalink(); ?>?post_id=post-<?php the_ID(); ?>" ><img class="featured-image" src="<?php the_post_thumbnail_url(); ?>"></a>
			<?php }  ?>
				<h2 class="post-title"> <?php the_title(); ?> </h2>
				</div>

			</div>

	</div>

		   <?php
			  endwhile;

			else : ?>
			<p> Not Found </p>
			<?php
				endif; ?>

		</div>
		<div class="row row-centered">
			<div class="col-xs-12 col-centered"><a class="dicefoot" href="<?php echo home_url() ;?>/index.php/lucky-dip#diceroll"><img class="dicefoot" src="<?php echo get_template_directory_uri(); ?>/img/dice.png"> </a></div>
		</div>
	</div>

	<script>
	jQuery(document).ready(function() {
	var rotations = [0, 45, 90, 135, 180, 225, 270, 315];
	rotation = Math.floor( (Math.random() * 8) + 1 );
	degrees = rotations[rotation];
	jQuery('.dicefoot').css({'transform' : 'rotate('+ degrees +'deg) scale(0.99)', '-webkit-transform' : 'rotate('+ degrees +'deg) scale(0.99)'});
	});
	</script>


	<?php get_footer(); ?>
