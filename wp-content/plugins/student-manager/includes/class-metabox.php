<?php
add_action('add_meta_boxes', function() {
    add_meta_box('sm_details', 'Thông tin bổ sung', 'sm_render_metabox', 'sinh_vien', 'normal', 'high');
});

function sm_render_metabox($post) {
    wp_nonce_field('sm_save_meta', 'sm_nonce');
    $mssv = get_post_meta($post->ID, '_sm_mssv', true);
    $ngay_sinh = get_post_meta($post->ID, '_sm_ngay_sinh', true);
    $chuyen_nganh = get_post_meta($post->ID, '_sm_chuyen_nganh', true);
    ?>
    <p>
        <label>MSSV:</label>
        <input type="text" name="sm_mssv" value="<?php echo esc_attr($mssv); ?>" class="widefat">
    </p>
    <p>
        <label>Chuyên ngành:</label>
        <select name="sm_chuyen_nganh" class="widefat">
            <option value="CNTT" <?php selected($chuyen_nganh, 'CNTT'); ?>>CNTT</option>
            <option value="Kinh tế" <?php selected($chuyen_nganh, 'Kinh tế'); ?>>Kinh tế</option>
            <option value="Marketing" <?php selected($chuyen_nganh, 'Marketing'); ?>>Marketing</option>
        </select>
    </p>
    <p>
        <label>Ngày sinh:</label>
        <input type="date" name="sm_ngay_sinh" value="<?php echo esc_attr($ngay_sinh); ?>" class="widefat">
    </p>
    <?php
}

add_action('save_post', function($post_id) {
    if (!isset($_POST['sm_nonce']) || !wp_verify_nonce($_POST['sm_nonce'], 'sm_save_meta')) return;
    
    if (isset($_POST['sm_mssv'])) 
        update_post_meta($post_id, '_sm_mssv', sanitize_text_field($_POST['sm_mssv']));
    if (isset($_POST['sm_chuyen_nganh'])) 
        update_post_meta($post_id, '_sm_chuyen_nganh', sanitize_text_field($_POST['sm_chuyen_nganh']));
    if (isset($_POST['sm_ngay_sinh'])) 
        update_post_meta($post_id, '_sm_ngay_sinh', sanitize_text_field($_POST['sm_ngay_sinh']));
});