<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<div class="col-md-4">
			<?php $image_args = array(
				'w'     => 250,
				'h'     => 250
			);
			mapi_featured_img($image_args); ?>
		</div>
		<!-- /post thumbnail -->
		<div class="col-md-8">
			<!-- post title -->
			<h2>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /post title -->

			<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

			<?php smore_edit_link(); ?>
		</div>


	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
