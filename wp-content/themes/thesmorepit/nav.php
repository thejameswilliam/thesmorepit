<nav class="nav" role="navigation">
    <input type="checkbox" id="menuToggle">
    <label for="menuToggle" class="menu-icon"><i class="fa fa-bars" aria-hidden="true"></i></label>


    <nav class="menu">
        <div class="logo">
            <?php
            $img_src = array(
                'src' => get_template_directory_uri() . '/img/smores_white.png',
                'w' => 200,

            ); ?>

            <a href="<?php echo site_url(); ?>"><img src="<?php echo mapi_thumb($img_src); ?>" alt="The S'more Pit"></a>
        </div>
        <div class="col-md-12">
            <!-- search -->
            <form class="form-inline" method="get" action="<?php echo home_url(); ?>" role="search">
                <div class="input-group">
                    <input class="form-control" type="search" name="s" placeholder="Search here">
                    <span class="input-group-btn">
    			<button class="search-submit btn btn-default" type="submit"
                        role="button"><?php _e('Search', 'html5blank'); ?></button>
    		</span>
                </div>
            </form>
        </div>


        <br/>
        <?php smore_menu_nav(); ?>

    </nav>

</nav>
