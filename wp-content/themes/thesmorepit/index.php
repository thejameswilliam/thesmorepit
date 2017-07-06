<?php get_header(); ?>

<main id="main" role="main">


    <div class="top-logo screen light_background">
        <div class="fullheight ">
            <div class="logo col-md-6 col-md-offset-3">
                <?php
                $img_src = array(
                    'src' => get_template_directory_uri() . '/img/logo.png',
                    'w' => 600,

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
                mapi_social_links($networks, 'follow'); ?>
            </div>
        </div>
    </div>


    <?php if (get_field('content', 'options')) : ?>
        <div class="red_background screen">
            <div class="container col-md-8 col-md-offset-2">
                <?php the_field('content', 'options'); ?>
            </div>
        </div>
    <?php endif; ?>


    <?php
    // check if the repeater field has rows of data
    if (have_rows('front_page_images', 'options')): ?>
        <div class="dark-background screen ">
            <div class="container front-images col-md-8 col-md-offset-2">
                <div class="row">
                    <?php
                    while (have_rows('front_page_images', 'options')) : the_row();
                        $image = get_sub_field('image');
                        $img_url = mapi_thumb($image['url'], 400, 280, 90);
                        ?>
                        <div class="col-xs-4 front-image">
                            <img src="<?php echo $img_url; ?>" alt="<?php echo $image['title']; ?>"/>
                        </div>

                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    <?php endif;
    ?>


    <div class="light_background screen">
        <div class="container col-md-8 col-md-offset-2">
            <p align="center"><a class="btn btn-primary btn-lg" href="/the-smore-shoppe/">The S'More Shoppe</a></p>
            <hr />
            <h1>Featured S'More</h1>
            <div class="col-sm-12">
                <p align="center">
                    <small>*Delivery available for Santa Fe and select surrounding areas. New Mexico customers, please
                        arrange for pick-up.
                    </small>
                </p>
            </div>
            <?php if(get_field('product_id', 'options')) : ?>
            <div class="col-sm-12">
                <div class="row">
                    <?php
                    do_action( 'woocommerce_before_single_product' );
                    $prod_id = get_field('product_id', 'options');
                    $featured_prod = wc_get_product($prod_id);
                    $image = $featured_prod->get_image('shop_thumbnail');
                    $short_desc = $featured_prod->get_short_description();
                    $title = $featured_prod->get_title();
                    $price = $featured_prod->get_price();
                    $link_text = $featured_prod->add_to_cart_text();
                    $link_url = $featured_prod->add_to_cart_url();
                    $prod_url = $featured_prod->get_permalink();
                    ?>
                    <div class="col-sm-3"><?php echo $image; ?></div>
                    <div class="col-sm-9">
                        <h2><a href="<?php echo $prod_url; ?>" title="<?php echo $title; ?>"><?php echo $title; ?></a>
                        </h2>
                        <p><?php echo $short_desc; ?></p>
                        <a class="btn btn-primary pull-right" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>


    <div class="red_background screen ">
        <div class="container fullheight col-md-8 col-md-offset-2">
            <h1>Instagram</h1>
            <?php echo do_shortcode('[instagram-feed]'); ?>
        </div>
    </div>


</main>
<?php get_template_part('footer'); ?>
