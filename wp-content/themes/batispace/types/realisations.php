<?php

function create_post_type() {
  register_post_type('realisation',
    array(
      'labels'      => array(
        'name'          => __('Realisations'),
        'singular_name' => __('Realisation')
      ),
      'public'      => true,
      'has_archive' => true,
      'rewrite'     => array('slug' => 'realisations'),
      'supports'    => array('title', 'editor', 'thumbnail')
    )
  );
}
add_action('init', 'create_post_type');
