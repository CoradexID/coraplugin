<?php

// POST_TYPE CONFIGURATION
define('SERIES_TYPE', 'series');
define('CHAPTER_TYPE', 'post');


// META CONFIGURATION
define('SERIES_META', [
  "title" => [
    "meta_key" => "oxy_title",
    "default" => ""
  ],
  "japanese" => [
    "meta_key" => "oxy_japanese",
    "default" => ""
  ],
  "alternative" => [
    "meta_key" => "oxy_alternative",
    "default" => ""
  ],
  "type" => [
    "meta_key" => "oxy_type",
    "default" => "Manga"
  ],
  "status" => [
    "meta_key" => "oxy_status",
    "default" => "Ongoing"
  ],
  "author" => [
    "meta_key" => "oxy_author",
    "default" => ""
  ],
  "artist" => [
    "meta_key" => "oxy_artist",
    "default" => ""
  ],
  "published" => [
    "meta_key" => "oxy_published",
    "default" => ""
  ],
  "score" => [
    "meta_key" => "oxy_score",
    "default" => "5.0"
  ],
  "project" => [
    "meta_key" => "oxy_project",
    "default" => "No"
  ],
  "adult" => [
    "meta_key" => "oxy_adult",
    "default" => "No"
  ]
]);

define('CHAPTER_META', [
  "chapter" => [
    "meta_key" => "oxy_ch",
    "default" => ""
  ],
  "series_id" => [
    "meta_key" => "oxy_series",
    "default" => ""
  ]
]);


// TAXONOMY CONFIGURATION
define('SERIES_TAXONOMY', "seri");
define('GENRE_TAXONOMY', "genre");