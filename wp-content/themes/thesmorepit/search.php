<?php get_header(); ?>

<main role="main" class="page">
	<div class="top-logo screen fullheight light_background">

		<section class="container col-md-8 col-md-offset-2">
			<?php get_template_part('searchform'); ?>
			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
	</div>
	</main>
<?php get_footer(); ?>
