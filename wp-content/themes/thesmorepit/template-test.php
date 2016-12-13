<?php /* Template Name: Test Template */ ?>
<?php get_header(); ?>
				<?php
				$image_args = array(
					'w'     => 1050,
				  'h'     => 350
				);
				mapi_featured_img($image_args); ?>
				<!-- section -->

				<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>


				<?php the_content(); ?>
				<br class="clear">

				<?php smore_edit_link(); ?>

			<!-- /article -->

		<?php endwhile; endif; ?>

		<!-- /section -->


<?php get_footer(); ?>
