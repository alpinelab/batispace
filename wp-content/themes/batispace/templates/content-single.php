<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

    <header>
      <?php get_template_part('templates/entry-meta'); ?>
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>

    <? if (has_post_thumbnail()) { // Featured image or featured video
      echo the_post_thumbnail('large');
    } else { // Carousel
      echo do_shortcode('[carousel]');
    } ?>

    <div class="entry-content">
      <?php the_content(); ?>
    </div>

    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>

    <?php comments_template('/templates/comments.php'); ?>

  </article>
<?php endwhile; ?>
