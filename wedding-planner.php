// สร้างไฟล์ wedding-planner.php ใน wp-content/plugins/wedding-planner/
<?php
/*
Plugin Name: Wedding Planner System
Description: ระบบวางแผนงานแต่งงาน
Version: 1.0
Author: Your Name
*/

// ป้องกันการเข้าถึงโดยตรง
if (!defined('ABSPATH')) {
    exit;
}

// เพิ่ม Scripts และ Styles
function wedding_planner_scripts() {
    wp_enqueue_style('wedding-planner-style', plugins_url('css/style.css', __FILE__));
    wp_enqueue_script('wedding-planner-script', plugins_url('js/script.js', __FILE__), array('jquery'), '1.0', true);
    wp_localize_script('wedding-planner-script', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'wedding_planner_scripts');

// สร้าง Shortcode
add_shortcode('wedding_planner', 'display_wedding_planner');
