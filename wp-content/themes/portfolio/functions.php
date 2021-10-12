<?php

function wp_document_title_parts( $title ) {
  if ( is_home() || is_front_page() ) {
    unset( $title["tagline"] );
  }
  return $title;
}

function custom_enqueue(){
  wp_enqueue_style("reset_style", get_template_directory_uri() . "/assets/css/reset.css");
  wp_enqueue_style("fontawesome","https://use.fontawesome.com/releases/v5.6.1/css/all.css");
  wp_enqueue_style("main_style", get_template_directory_uri() . "/assets/css/style.css");
  wp_enqueue_style("add_google_fonts","https://fonts.googleapis.com");
  wp_enqueue_style("title_fonts","https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap");
  wp_deregister_script("jquery");
  wp_enqueue_script("library_script", get_template_directory_uri() ."/assets/js/jquery-3.5.1.min.js");
  wp_enqueue_script("main_script", get_template_directory_uri() . "/assets/js/index.js", true);
}

function subLoop($number) {
  $args = array(
    "post_type" => "post",
    "posts_per_page" => $number,
    "paged" => "",
  );

  $theQuery = new WP_Query($args);
  return $theQuery;
}

function hooks() {
  add_filter("document_title_parts", "wp_document_title_parts", 10, 1 );
  add_action("wp_enqueue_scripts","custom_enqueue");
  add_theme_support('post-thumbnails');
}

function init() {
  hooks();
}

init();
