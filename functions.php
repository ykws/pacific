<?php

// カスタムヘッダー
add_custom_image_header('', '__return_falase');

define('NO_HEADER_TEXT', ture);
define('HEADER_TEXTCOLOR', '');
define('HEADER_IMAGE', '%s/images/top/main_image.png');
define('HEADER_IMAGE_WIDTH', 950);
define('HEADER_IMAGE_HEIGHT', 295);

// カスタムメニュー
register_nav_menus(
    array(
        'place_global' => 'グローバル',
        'place_utility' => 'ユーティリティ'
    )
);

// アイキャッチ画像を利用できるようにします。
add_theme_support('post-thumbnails');

// アイキャッチ画像サイズ設定
set_post_thumbnail_size(90, 90, true);

// サイドバー用画像サイズ設定
add_image_size('small_thumbnail', 61, 61, true);

// アーカイブ用画像サイズ設定
add_image_size('large_thumbnail', 120, 120, true);

// サブページヘッダー用画像サイズ設定
add_image_size('category_image', 658, 113, true);

// モールイメージ用画像サイズ設定
add_image_size('pickup_thumbnail', 302, 123, true);

// Child Pages Shortcode の CSS の URL を変更します。
function change_child_pages_shortcode_css() {
    $url = get_template_directory_uri() . '/css/child-pages-shortcode/style.css';
    return $url;
}
add_filter('child-pages-shortcode-stylesheet', 'change_child_pages_shortcode_css');

// ウィジェット
register_sidebar(array(
    'name' => 'サイドバーウィジェットエリア（上）',
    'id' => 'primary-widget-area',
    'description' => 'サイドバー上部のウィジェットエリア',
    'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
));

register_sidebar(array(
    'name' => 'サイドバーウィジェットエリア（下）',
    'id' => 'secondary-widget-area',
    'description' => 'サイドバー下部のウィジェットエリア',
    'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
));
