<?php 
include 'php_includes/autoload.php';


$head_js_pack = [
    'js/vendor/jquery.min.js',
    'js/vendor/underscore-umd-min.js',
    'js/libs/functions.js',
    'js/libs/url.js',
    'js/libs/view_loader.js',
    'js/libs/user_login_check.js',
    'js/context/main.js',
    'js/libs/model.js',
    'js/model/user_input.js',
    'js/model/species.js',
    'js/model/users.js',
    'js/model/report_admin.js',
];
$head_css_pack = [
    'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
    'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css',
    'vendor/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
    'vendor/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
    'vendor/plugins/jqvmap/jqvmap.min.css',
    'dist/css/bootstrap.min.css',
    'dist/css/adminlte.min.css',
    'dist/css/adminlte.css',
    'vendor/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
    'vendor/plugins/daterangepicker/daterangepicker.css',
    'vendor/plugins/summernote/summernote-bs4.min.css',
    '../dist/css/fonts/kalpurush_font.css',
    'dist/css/custom.css',
    'dist/css/navbar.css',
    'dist/css/jquery.fancybox.min.css',
];

$foot_js_pack = [
    'dist/js/bootstrap.min.js', 
    'dist/js/custom.js', 
    'dist/js/jquery.fancybox.min.js',
    // 'vendor/plugins/chart.js/Chart.min.js',
    // 'vendor/plugins/sparklines/sparkline.js',
    'vendor/plugins/jqvmap/jquery.vmap.min.js', 
    'vendor/plugins/jqvmap/maps/jquery.vmap.usa.js',
    'vendor/plugins/jquery-knob/jquery.knob.min.js',
    'dist/js/bootstrap-datepicker.min.js',
  'vendor/plugins/moment/moment.min.js',
  'vendor/plugins/daterangepicker/daterangepicker.js',
  'vendor/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
  'vendor/plugins/summernote/summernote-bs4.min.js',
  'vendor/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
  'dist/js/adminlte.js',
  'js/libs/sidebar_listener.js',
  'js/libs/notification.js',
  
          
        
  
  'dist/js/extra/date.js',
  // 'js/vendor/jspdf.debug.js'

];
$foot_css_pack = [];



include 'php_header_footer/html_head.php';
include 'php_header_footer/page_header.php';

include 'php_header_footer/sidebar.php';

/* TODO: 
    1. #hash based routing system
    2. header / footer ready 
    3. auto load all php / js 
*/
echo '<div id="js_main_container" style="min-height:40em;"></div>';
load_all_html_files();



include 'php_header_footer/page_footer.php';