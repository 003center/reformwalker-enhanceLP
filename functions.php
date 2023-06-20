<?php
//javascriptの読み込みをwp_footerに組み込む-//
// JSファイル追加の関数
function add_my_files()
{
    //スタイルシートの読み込み
    wp_enqueue_style('reset.css', get_theme_file_uri('/assets/css/reset.css'));
    wp_enqueue_style('style.css', get_theme_file_uri('/assets/css/style.css'));

    // javascript読み込み
    wp_enqueue_script('main.js', get_theme_file_uri('/assets/js/main.js'));

    // Font Awesome
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/3703ca569d.js');

}

//アクションフック（wp_enqueue_scripts）への登録
add_action('wp_enqueue_scripts', 'add_my_files');





/*更新時にキャッシュをクリアする
function my_styles()
{
    wp_enqueue_style(
        'my-style',
        get_theme_file_uri('/assets/css/style.css'),
        array(),
        //依存関係がない場合
        filemtime(get_theme_file_path('/assets//css/style.css'))
    );
}
add_action('wp_enqueue_scripts', 'my_styles');
*/