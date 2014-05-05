<?php

  get_template_part('templates/page', 'header'); ?>

  <div class="blocks">
    <ul class="blocks-wrapper"> <?
      while (have_posts()) : the_post(); ?>
        <li class="realisation-<?= basename(get_permalink()) ?>" style="background-image: url('<?= get_the_thumbnail_url() ?>')">
          <a href="<?= get_permalink() ?>">
            <?= $post->post_title ?>
          </a>
        </li> <?
      endwhile; ?>
    </ul>
  </div>
