<?php get_header(); ?>

	<main id="main" role="main">
		<div class="top-logo screen light_background">
			<div class="fullheight ">
				<div class="logo col-md-6 col-md-offset-3">
					<?php
					$img_src = array(
						'src' => get_template_directory_uri() . '/img/logo.png',
						'w'   => 600,

					); ?>

					<img src="<?php echo mapi_thumb($img_src); ?>" alt="The S'more Pit">
				</div>

				<div class="social_icons col-md-4 col-md-offset-4">
					<?php
					$networks = array(
						'facebook',
						'twitter',
						'instagram',
					);
					mapi_social_links($networks); ?>
				</div>
			</div>
		</div>
		<div class="red_background screen ">

			<div class="container fullheightcol-md-8 col-md-offset-2">
			<blockquote><?php echo get_bloginfo('description'); ?></blockquote>
			<?php smore_menu(); ?>
			</div>
		</div>
		<div class="brown-background screen ">
			<div class="container fullheightcol-md-8 col-md-offset-2">
				<h1>Instagram</h1>
				<?php echo do_shortcode('[instagram-feed]'); ?>
			</div>
		</div>

		<div class="light-background screen">
			<h1>Today's Location</h1>
			<p align="center"><a href="/events/">Take a look at our calendar for our next location.</a></p>
			<?php
			$location = get_field('current_location', 'options');
			if( !empty($location) ): ?>
				<div class="acf-map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
			<?php endif; ?>
		</div>




	</main>
<?php get_template_part('footer'); ?>
