<header class="banner" role="banner">
  <div class="container">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header-navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="brand" href="<?php echo home_url('/') ?>"></a>

    <div id="header-navbar">
      <?php dynamic_sidebar('sidebar-header-right'); ?>
    </div>
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
