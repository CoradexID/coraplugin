<?php

function get_series($title) {
  $post = get_post([
    "post_title" => $title,
    "post_type" => SERIES_TYPE,
    "post_status" => "publish",
  ]);
  
  if(!$post) {
    die('Error: Post Not Found!');
  }
  
  $meta = get_post_meta($post->ID);
  
  $chapters = new WP_Query(
  [
    "showposts" => 1000,
    "post_type" => CHAPTER_TYPE,
    "tax_query" => [
      [
        'taxonomy' => SERIES_TAXONOMY,
        'field' => 'slug',
        'terms' => $title,
      ],
    ], 
    "no_found_rows" => true, 
    "update_post_term_cache" => false,
    "update_post_meta_cache" => false,
    "cache_results" => false
  ]);
  
  foreach ($chapters->posts as $key => $value) {
    $meta = get_post_meta($chapters->posts[$key]->ID);
    $chapters->posts[$key]->meta = $meta;
  }
  
  $post->meta = $meta;
  $post->chapters = $chapters->posts;
  
  die($post);
}

function post_series($args) {
  
}