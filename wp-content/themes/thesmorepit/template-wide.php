<?php /* Template Name: Wide Page Template */ ?>
<?php get_header(); ?>

	<main role="main" class="page">
		<div class="top-logo screen fullheight red_background">

			<section class="container col-md-10 col-md-offset-1">
				<?php
				$image_args = array(
					'w'     => 1050,
				  'h'     => 350
				);
				mapi_featured_img($image_args); ?>
				<!-- section -->

				<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>
				<br class="clear">

				<?php smore_edit_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; endif; ?>

		</section>
		<!-- /section -->
	</div>
	</section>
	</main>

<?php get_footer(); ?>
