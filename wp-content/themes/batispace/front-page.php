<div class="home-banner">
  <a href="http://www.veranda-grandeurnature.com/" target="_blank">
  </a>
</div>

<div class="home-slider">
  <?= do_shortcode('[image-carousel]') ?>
</div>

<nav class="blocks"> <?
  if (has_nav_menu('home_blocks')) {
    wp_nav_menu(array(
      'theme_location' => 'home_blocks',
      'menu_class'     => 'blocks-wrapper',
      'link_before'    => '<div class="overlay"><div class="overlay-inner">',
      'link_after'     => '</div></div>'
    ));
  } ?>
</nav>
