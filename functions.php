<?php
//javascriptの読み込みをwp_footerに組み込む-//
// JSファイル追加の関数
function add_my_files()
{
    //スタイルシートの読み込み
    wp_enqueue_style('reset.css', get_theme_file_uri('/assets/css/reset.css'));
    wp_enqueue_style('style.css', get_theme_file_uri('/assets/css/style.css'));
    wp_enqueue_style('header.css', get_theme_file_uri('/assets/css/header.css'));
    wp_enqueue_style('frontpage.css', get_theme_file_uri('/assets/css/frontpage.css'));
    wp_enqueue_style('footer.css', get_theme_file_uri('/assets/css/footer.css'));


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

/**会社一覧のカスタムフィールド */
function company_register()
{
    $labels = [
        "edit_item" => "Edit",
    ];
    $args = [
        "label" => "会社一覧",
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "map_meta_cap" => true,
        "hierarchical" => true,
        "rewrite" => ["slugs" => "company", "with_front" => true],
        "query_var" => true,
        "menu_position" => 3,
        "supports" => ["title", "editor", "thumbnail",]

    ];
    register_post_type("company", $args);
}
add_action('init', 'company_register');

/**施工事例のカスタムフィールド */
function construction_register()
{
    $labels = [
        "edit_item" => "Edit",
    ];
    $args = [
        "label" => "施工事例",
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "map_meta_cap" => true,
        "hierarchical" => true,
        "rewrite" => ["slugs" => "construction ", "with_front" => true],
        "query_var" => true,
        "menu_position" => 3,
        "supports" => ["title", "editor", "thumbnail",]

    ];
    register_post_type("construction ", $args);
}
add_action('init', 'construction_register');

/**アーカイブON */
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'company'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
