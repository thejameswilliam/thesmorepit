<?php get_header(); ?>

<main role="main" class="page">
	<div class="top-logo screen light_background">

		<section class="container fullheight col-md-8 col-md-offset-2">

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Sorry, that page is not gooey enough yet.', 'html5blank' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</h2>

				<?php get_template_part('searchform'); ?>

			</article>
			<!-- /article -->

		</section>
	</div>
	</main>

<?php get_footer(); ?>
