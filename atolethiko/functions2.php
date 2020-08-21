<?php

function my_enqueue_scripts(){
wp_enqueue_script('jquery');
  wp_enqueue_style('my_styles',get_template_directory_uri().'/assets/css/styles.css',array() );
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts' );

//上記の役割は<head>タグ内cssの読み込み部分を省略することができる
