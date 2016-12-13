<?php get_header(); ?>

<main role="main" class="page">
	<div class="top-logo screen fullheight light_background">
		<section class="container col-md-8 col-md-offset-2">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<?php
			$image_args = array(
				'w'     => 1050,
				'h'     => 350
			);
			mapi_featured_img($image_args); ?>


		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post title -->
			<h1><?php the_title(); ?></h1>
			<!-- /post title -->

			<!-- post details
			<div class="post_details col-md-12">
				<span class="date"><?php the_time('F j, Y'); ?></span>
				<span class="cats"><?php the_category(', '); ?></span>
			</div>
			 -->
			<div class="social_icons col-md-4 col-md-offset-4">
				<?php
				$networks = array(
					'facebook',
					'twitter',
					'instagram',
				);
				mapi_social_links($networks); ?>
			</div>
			<!-- /post details -->
			<div class="col-md-12">
				<?php the_content(); // Dynamic Content ?>
			</div>
			<?php smore_edit_link(); ?>
		</article>
		<!-- /article -->

	<?php endwhile; endif; ?>

	</section>
	</div>
	</main>
<?php get_footer(); ?>
