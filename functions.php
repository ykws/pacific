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
