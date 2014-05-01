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

function create_taxonomies() {
  $produits_labels = array(
    'name'               => _x('Produits', 'post type general name',      'batispace'),
    'singular_name'      => _x('Produit', 'post type singular name',      'batispace'),
    'menu_name'          => _x('Produits', 'admin menu',                  'batispace'),
    'name_admin_bar'     => _x('Produit', 'add new on admin bar',         'batispace'),
    'add_new'            => _x('Ajouter un nouveau', 'realisation',       'batispace'),
    'add_new_item'       => __('Ajouter un nouveau Produit',              'batispace'),
    'new_item'           => __('Nouveau Produit',                         'batispace'),
    'edit_item'          => __('Modifier le Produit',                     'batispace'),
    'view_item'          => __('Voir le Produit',                         'batispace'),
    'all_items'          => __('Tous les Produits',                       'batispace'),
    'search_items'       => __('Chercher des Produits',                   'batispace'),
    'parent_item_colon'  => __('Produits parents:',                       'batispace'),
    'not_found'          => __('Aucun Produit trouvé.',                   'batispace'),
    'not_found_in_trash' => __('Aucun Produit trouvé dans la Corbeille.', 'batispace')
  );
  $produits_args = array(
    'hierarchical'  => true,
    'rewrite'       => array('slug' => 'produits'),
    'labels'        => $produits_labels
  );
  register_taxonomy('produit', array('realisation'), $produits_args);

  $materiaux_labels = array(
    'name'               => _x('Matériaux', 'post type general name',      'batispace'),
    'singular_name'      => _x('Matériau', 'post type singular name',      'batispace'),
    'menu_name'          => _x('Matériaux', 'admin menu',                  'batispace'),
    'name_admin_bar'     => _x('Matériau', 'add new on admin bar',         'batispace'),
    'add_new'            => _x('Ajouter un nouveau', 'realisation',        'batispace'),
    'add_new_item'       => __('Ajouter un nouveau Matériau',              'batispace'),
    'new_item'           => __('Nouveau Matériau',                         'batispace'),
    'edit_item'          => __('Modifier le Matériau',                     'batispace'),
    'view_item'          => __('Voir le Matériau',                         'batispace'),
    'all_items'          => __('Tous les Matériaux',                       'batispace'),
    'search_items'       => __('Chercher des Matériaux',                   'batispace'),
    'parent_item_colon'  => __('Matériaux parents:',                       'batispace'),
    'not_found'          => __('Aucun Matériau trouvé.',                   'batispace'),
    'not_found_in_trash' => __('Aucun Matériau trouvé dans la Corbeille.', 'batispace')
  );
  $materiaux_args = array(
    'hierarchical'  => true,
    'labels'        => $materiaux_labels,
    'rewrite'       => array('slug' => 'materiaux')
  );

  register_taxonomy('materiau', array('realisation'), $materiaux_args);
}
add_action('init', 'create_taxonomies', 0);
