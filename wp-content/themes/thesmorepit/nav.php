<nav class="nav" role="navigation">
  <input type="checkbox" id="menuToggle">
  <label for="menuToggle" class="menu-icon"><i class="fa fa-bars" aria-hidden="true"></i></label>


  <nav class="menu">
    <?php
    $img_src = array(
      'src' => get_template_directory_uri() . '/img/smores_white.png',
      'w'   => 200,

    ); ?>

    <a href="<?php echo site_url(); ?>"><img src="<?php echo mapi_thumb($img_src); ?>" alt="The S'more Pit"></a>
    <?php get_template_part('searchform'); ?>
    <?php smore_menu_nav(); ?>

  </nav>

</nav>
