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
    wp_enqueue_style('single-company.css', get_theme_file_uri('/assets/css/single-company.css'));
    wp_enqueue_style('archive-company.css', get_theme_file_uri('/assets/css/archive-company.css'));
    wp_enqueue_style('single-construction.css', get_theme_file_uri('/assets/css/single-construction.css'));
    wp_enqueue_style('archive-construction.css', get_theme_file_uri('/assets/css/archive-construction.css'));
    wp_enqueue_style('contact.css', get_theme_file_uri('/assets/css/contact.css'));

    wp_enqueue_style('faq.css', get_theme_file_uri('/assets/css/faq.css'));
    wp_enqueue_style('policy.css', get_theme_file_uri('/assets/css/policy.css'));
    wp_enqueue_style('thanks.css', get_theme_file_uri('/assets/css/thanks.css'));
    wp_enqueue_style('single-journal.css', get_theme_file_uri('/assets/css/single-journal.css'));
    wp_enqueue_style('archive-journal.css', get_theme_file_uri('/assets/css/archive-journal.css'));




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
        "menu_position" => 2,
        "supports" => ["title", "editor", "thumbnail",]

    ];
    register_post_type("company", $args);
}
add_action('init', 'company_register');


function register_region_taxonomy()
{
    $args = array(
        'label' => '地域', // タクソノミーの表示名
        'public' => true,
        'rewrite' => array('slug' => 'region-category'), // カテゴリーページのパーマリンク
        'hierarchical' => true,
    );
    register_taxonomy('region_category', array('company'), $args); // 'your_custom_post_type' にはカスタム投稿タイプのスラッグを指定
}
add_action('init', 'register_region_taxonomy');



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


function register_location_taxonomy()
{
    $args = array(
        'label' => '場所', // タクソノミーの表示名
        'public' => true,
        'rewrite' => array('slug' => 'location-category'), // カテゴリーページのパーマリンク
        'hierarchical' => true,
    );
    register_taxonomy('location_category', array('construction'), $args); // 'your_custom_post_type' にはカスタム投稿タイプのスラッグを指定
}
add_action('init', 'register_location_taxonomy');



function save_custom_field_values($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // 地域カテゴリーの関連付け
    if (isset($_POST['company'])) {
        $region_value = $_POST['company'];
        wp_set_post_terms($post_id, $region_value, 'region_category'); // 'region_category' は地域カテゴリーのスラッグ
    }

    // 場所カテゴリーの関連付け
    if (isset($_POST['construction'])) {
        $location_value = $_POST['construction'];
        wp_set_post_terms($post_id, $location_value, 'location_category'); // 'location_category' は場所カテゴリーのスラッグ
    }
}
add_action('save_post', 'save_custom_field_values');

/**OUR JOURNALのカスタムフィールド */
function journal_register()
{
    $labels = [
        "edit_item" => "Edit",
    ];
    $args = [
        "label" => "JOURNAL",
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
        "rewrite" => ["slugs" => "jounal", "with_front" => true],
        "query_var" => true,
        "menu_position" => 2,
        "supports" => ["title", "editor", "thumbnail",]

    ];
    register_post_type("journal", $args);
}
add_action('init', 'journal_register');



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
