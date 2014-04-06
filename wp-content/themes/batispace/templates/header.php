<header class="banner container" role="banner">
  <div class="row">
    <div class="col-lg-12">
      <a class="brand" href="<?php echo home_url('/') ?>"><?php bloginfo('name'); ?></a>
    </div>
  </div>
</header> <?

if (is_page() && !is_front_page()) { ?>
  <div class="ribbon">
    <h1><?php echo roots_title(); ?></h1>
  </div> <?
}

if ('post' == get_post_type()) { ?>
  <div class="ribbon"><h1>Blog</h1></div> <?
} ?>
