<?php 

add_theme_support('post-thumbnails');

// 管理画面じゃなかったら
if ( !is_admin() ) {

  // reset.cssの読み込み
  wp_enqueue_style(
    'reset-css',
    'https://tomap.co/ZP_reset.css',
  );
  
  // style.cssの読み込み
  wp_enqueue_style(
    'main-style',
    get_template_directory_uri() . '/stylesheet.css',
  );

  // jQueryの読み込み
  wp_enqueue_script(
  'jquery',
  'https://code.jquery.com/jquery-3.5.1.min.js',
  array(),
  false,
  true
);

wp_enqueue_script(
    'inview-script',
    get_template_directory_uri() . '/jquery.inview-master/jquery.inview.min.js',
    array(),
    false,
    true
);

// main.jsの読み込み
wp_enqueue_script(
  'main-script',
  get_template_directory_uri() . '/main.js',
  array('jquery'),
  false,
  true
);
  
}
?>