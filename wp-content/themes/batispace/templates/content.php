<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>

  <div class="visible-md visible-lg">
    <? if (has_post_thumbnail()) { // Featured image or featured video
      echo the_post_thumbnail('large');
    } else { // Carousel
      echo do_shortcode('[carousel]');
    } ?>
  </div>

  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
