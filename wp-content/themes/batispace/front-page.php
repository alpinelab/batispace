<div class="home-banner">Grandeur nature</div>

<div class="home-slider">
  <?= do_shortcode('[image-carousel]') ?>
</div>

<nav class="home-blocks"> <?
  if (has_nav_menu('home_blocks')) {
    wp_nav_menu(array('theme_location' => 'home_blocks', 'menu_class' => 'blocks-wrapper'));
  } ?>
</nav>
