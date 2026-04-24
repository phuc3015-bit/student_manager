<?php
add_action('init', function() {
    $labels = [
        'name' => 'Sinh viên',
        'singular_name' => 'Sinh viên',
        'add_new' => 'Thêm sinh viên mới',
        'all_items' => 'Tất cả sinh viên',
        'edit_item' => 'Sửa thông tin sinh viên'
    ];

    register_post_type('sinh_vien', [
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => ['title', 'editor'],
        'show_in_rest' => true,
    ]);
});