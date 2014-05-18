<header class="banner" role="banner">
  <div class="container">
    <a class="brand" href="<?php echo home_url('/') ?>"></a>
  </div>
</header> <?

if ((is_page() && !is_front_page()) || is_post_type_archive('realisation') || $post_type == 'realisation') { ?>
  <div class="ribbon">
    <h1><?php echo roots_title(); ?></h1>
  </div> <?
}

if ('post' == get_post_type()) { ?>
  <div class="ribbon"><h1>Blog</h1></div> <?
} ?>
