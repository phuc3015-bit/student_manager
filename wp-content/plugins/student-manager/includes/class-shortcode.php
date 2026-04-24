<?php
add_shortcode('danh_sach_sinh_vien', function() {
    $query = new WP_Query(['post_type' => 'sinh_vien', 'posts_per_page' => -1]);
    
    $output = '<table class="sm-table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>MSSV</th>
                        <th>Họ tên</th>
                        <th>Lớp/Chuyên ngành</th>
                        <th>Ngày sinh</th>
                    </tr>
                </thead>
                <tbody>';
    
    if ($query->have_posts()) {
        $i = 1;
        while ($query->have_posts()) {
            $query->the_post();
            $mssv = get_post_meta(get_the_ID(), '_sm_mssv', true);
            $ngay_sinh = get_post_meta(get_the_ID(), '_sm_ngay_sinh', true);
            $chuyen_nganh = get_post_meta(get_the_ID(), '_sm_chuyen_nganh', true);

            $output .= "<tr>
                <td>{$i}</td>
                <td>" . esc_html($mssv) . "</td>
                <td>" . get_the_title() . "</td>
                <td>" . esc_html($chuyen_nganh) . "</td>
                <td>" . esc_html($ngay_sinh) . "</td>
            </tr>";
            $i++;
        }
        wp_reset_postdata();
    } else {
        $output .= '<tr><td colspan="5">Không có dữ liệu sinh viên.</td></tr>';
    }

    $output .= '</tbody></table>';
    return $output;
});