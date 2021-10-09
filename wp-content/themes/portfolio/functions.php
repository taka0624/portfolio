<?php

function custom_enqueue(){
  wp_enqueue_style("reset_style", get_template_directory_uri() . "/assets/css/reset.css");
  wp_enqueue_style("fontawesome","https://use.fontawesome.com/releases/v5.6.1/css/all.css");
  wp_enqueue_style("main_style", get_template_directory_uri() . "/assets/css/style.css");
  wp_enqueue_style("add_google_fonts","https://fonts.googleapis.com");
  wp_enqueue_style("choice_google_fonts","https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Balsamiq+Sans&display=swap");
  wp_deregister_script("jquery");
  wp_enqueue_script("library_script", get_template_directory_uri() ."/assets/js/jquery-3.5.1.min.js");
  wp_enqueue_script("main_script", get_template_directory_uri() . "/assets/js/index.js", true);
}
