<?php
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'news',
    array(
      'labels' => array(
        'name' => __( 'News' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-megaphone'
    )
  );
}
?>
