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

  register_post_type( 'interview',
    array(
      'labels' => array(
        'name' => __( 'Interview' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),
      'menu_icon' => 'dashicons-microphone'
    )
  );
}
?>
