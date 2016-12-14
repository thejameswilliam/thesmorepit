<?php get_header(); ?>

<main role="main" class="page">
	<div class="top-logo screen light_background">

		<section class="container fullheight col-md-8 col-md-offset-2">
			<?php get_template_part('searchform'); ?>
			<div class="col-md-12">
				<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
			</div>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
	</div>
	</main>
<?php get_footer(); ?>
