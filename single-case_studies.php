<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
				$services = get_field('services');
				$client = get_field('client');
				$link = get_field('site_link');
				$size = "full"; ?>
			
	<article class="case-study">
		<aside class="case-study-sidebar">
			<h2><?php the_title(); ?></h2>
			<h4><?php echo $services; ?></h4>
		
			<?php the_content(); ?>
		
			<p class="read-more-link"><a href="<?php echo $link; ?>">Visit Live Site ></a></p>
		</aside>
	</article>
		<div class="case-study-images">
			<?php endwhile; // end of the loop. ?>
			<div class="case-study-images">
			<?php if($image_1) { ?>
				echo wp_get_attachment_image( $image_1 );
			<?php } ?>
			<?php if($image_2) { ?>
				echo wp_get_attachment_image( $image_2 );
			<?php } ?>
			<?php if($image_3) { ?>
				echo wp_get_attachment_image( $image_3 );
			<?php } ?>
		</div>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>