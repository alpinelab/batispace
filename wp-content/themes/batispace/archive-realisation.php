<?php

  get_template_part('templates/page', 'header');

  $terms = get_categories(array(
    'taxonomy'    => array('produit', 'materiau'),
    'hide_empty'  => 0
  )); ?>

  <div class="blocks">
    <ul class="blocks-wrapper"> <?
      foreach ($terms as $term) { ?>
        <li class="term-<?= $term->slug ?>">
          <a href="<?= get_term_link($term) ?>">
            <?= $term->name ?>
          </a>
        </li> <?
      } ?>
    </ul>
  </div>
