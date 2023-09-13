<?php
//javascriptの読み込みをwp_footerに組み込む-//
// JSファイル追加の関数
function add_my_files()
{
    //スタイルシートの読み込み
    wp_enqueue_style('reset.css', get_theme_file_uri('/assets/css/reset.css'));
    wp_enqueue_style('style.css', get_theme_file_uri('/assets/css/style.css'));
    wp_enqueue_style('header.css', get_theme_file_uri('/assets/css/header.css'));
    wp_enqueue_style('page.css', get_theme_file_uri('/assets/css/page.css'));
    wp_enqueue_style('footer.css', get_theme_file_uri('/assets/css/footer.css'));



    // javascript読み込み

    wp_enqueue_script('main.js', get_theme_file_uri('/assets/js/main.js'));

    // Font Awesome
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/3703ca569d.js');
}

//アクションフック（wp_enqueue_scripts）への登録
add_action('wp_enqueue_scripts', 'add_my_files');
