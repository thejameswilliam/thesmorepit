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



	<?php if(get_field('content', 'options')) : ?>
		<div class="red_background screen">
			<div class="container col-md-8 col-md-offset-2">
				<?php the_field('content', 'options'); ?>
			</div>
		</div>
	<?php endif; ?>


	<?php
	// check if the repeater field has rows of data
	if( have_rows('front_page_images', 'options') ): ?>
	<div class="light_background screen ">
		<div class="container col-md-8 col-md-offset-2">
			<div class="row">
				<?php
				while ( have_rows('front_page_images', 'options') ) : the_row();
				$image = get_sub_field('image');
				$img_url = mapi_thumb($image['url'], 400, 280, 90);
				?>
				<div class="col-xs-4">
					<img src="<?php echo $img_url; ?>" alt="<?php echo $image['title']; ?>" />
				</div>

			<?php endwhile;
			echo '</div>';
			echo '</div>';
			echo '</div>';
		endif;
		?>


		<div class="light_background screen">
			<div class="container col-md-8 col-md-offset-2">
				<h1>Featured S'Mores</h1>
				<p align="center"><a class="btn btn-primary" href="/the-smore-shoppe/">The S'More Shoppe</a></p>

				<div class="col-sm-12">
					<p align="center"><small>*Delivery available for Santa Fe and select surrounding areas. New Mexico customers, please arrange for pick-up.</small></p>
				</div>
				<div class="col-sm-12">
					<?php
					echo apply_filters( 'the_content','[featured_products per_page="4" columns="4"]');
					//do_shortcode('[featured_products per_page="4" columns="4"]'); ?>
				</div>
			</div>
		</div>





		<div class="brown-background screen ">
			<div class="container fullheight col-md-8 col-md-offset-2">
				<h1>Instagram</h1>
				<?php echo do_shortcode('[instagram-feed]'); ?>
			</div>
		</div>


	</main>
	<?php get_template_part('footer'); ?>
