<?php get_header(); ?>

<main role="main" class="page">
	<div class="top-logo screen fullheight light_background">
		<section class="container col-md-8 col-md-offset-2">

			<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
	</div>
	</main>
<?php get_footer(); ?>
