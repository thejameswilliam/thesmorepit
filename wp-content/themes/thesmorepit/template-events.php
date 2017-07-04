<?php /* Template Name: Events Template */ ?>
<?php get_header(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=1450599258511514";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


	<main role="main" class="page">
		<div class="top-logo screen red_background">

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
        <div class="col-sm-6">
          <?php the_content(); ?>
        </div>
        <div class="col-sm-6">
          <div class="fb-page" data-href="https://www.facebook.com/thesmorepit/" data-tabs="events" data-width="500" data-height="1000" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/thesmorepit/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thesmorepit/">The S&#039;More Pit</a></blockquote></div>
        </div>
				
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
