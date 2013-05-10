<?php
// Custom Navigation Menus
register_nav_menus();

// Sidebar Widgets
register_sidebar();

// Footer Widgets
register_sidebar(array(
  'name' => __( 'Footer' )
  ));

// Big Widgets
register_sidebar(array(
  'name' => __( 'Main Sidebar' )
  ));

// Post Thumbnails
add_theme_support( 'post-thumbnails' );

// Custom Content Type
add_action('init','create_programs_content_type');

function create_programs_content_type(){
  $labels = array(
    'name' => ('Programs')
    );
  
  $args = array(
    'labels' => $labels,
    'public' => true,
    'taxonomies' => array('category'),
    'has_archive' => true,
    'supports' => array('title','editor','excerpt','thumbnail','page-attributes')
  );
  
  register_post_type('Programs',$args);
}

// Custom Content Type
add_action('init','create_module_content_type');

function create_module_content_type(){
  $labels = array(
    'name' => ('Modules')
    );
  
  $args = array(
    'labels' => $labels,
    'public' => true,
    'taxonomies' => array('category'),
    'has_archive' => true,
    'supports' => array('title','editor','excerpt','thumbnail','page-attributes')
  );
  
  register_post_type('Modules',$args);
}

// Custom Prerequisite Content Type
add_action('init','create_prerequisite_content_type');

function create_prerequisite_content_type(){
  $labels = array(
    'name' => ('Prerequisites')
    );
  
  $args = array(
    'labels' => $labels,
    'public' => true,
    'taxonomies' => array('category'),
    'has_archive' => true,
    'supports' => array('title','editor','excerpt','thumbnail')
  );
  
  register_post_type('Prerequisites',$args);
}

// Custom Content Type
add_action('init','create_team_content_type');

function create_team_content_type(){
  $labels = array(
    'name' => ('Team')
    );
  
  $args = array(
    'labels' => $labels,
    'public' => true,
    'taxonomies' => array('category'),
    'has_archive' => true,
    'supports' => array('title','editor','excerpt','thumbnail','page-attributes')
  );
  
  register_post_type('Team',$args);
}

// Custom Content Type
add_action('init','create_supporters_content_type');

function create_supporters_content_type(){
  $labels = array(
    'name' => ('Supporters')
    );
  
  $args = array(
    'labels' => $labels,
    'public' => true,
    'taxonomies' => array('category'),
    'has_archive' => true,
    'supports' => array('title','editor','excerpt','thumbnail')
  );
  
  register_post_type('Supporters',$args);
}

function connect_team_module() {
  p2p_register_connection_type( array(
    'name' => 'team_to_module',
    'from' => 'team',
    'to' => 'modules'
  ) );

  p2p_register_connection_type( array(
    'name' => 'team_to_program',
    'from' => 'team',
    'to' => 'programs'
  ) );

  p2p_register_connection_type( array(
    'name' => 'module_to_program',
    'from' => 'modules',
    'to' => 'programs',
    'sortable' => 'any'
  ) );
}
add_action( 'p2p_init', 'connect_team_module' );

?>