<?php 
include 'php_includes/autoload.php';


$head_js_pack = [
    'js/context/config.js',  
    'js/vendor/jquery.min.js',
    'js/vendor/sweetalert.min.js',
    'js/vendor/underscore-umd-min.js',
    'vendor/plugins/moment/moment.min.js',
    'js/libs/slh.js',
    'js/libs/functions.js',
    
    // 'js/libs/url.js',
    // 'js/libs/view_loader.js',
    'js/libs/user_login_check.js',
    
    'js/libs/model.js',
    'js/model/user_input.js',
    'js/model/species.js',
    'js/model/users.js',
    'js/model/report_admin.js',
    'js/model/annual_report.js',
    'js/libs/nav.js',
    'js/context/main.js',
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
  
  'vendor/plugins/daterangepicker/daterangepicker.js',
  'vendor/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
  'vendor/plugins/summernote/summernote-bs4.min.js',
  'vendor/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
  'js/vendor/canvasjs.min.js',
  'dist/js/adminlte.js',
  'dist/js/select2.full.js',
  'dist/js/select2.full.min.js',
  'dist/js/select2.js',
  'dist/js/select2.min.js',
  'dist/js/jquery.tabletoCSV.js',
  'dist/js/google_map.js',
  // 'js/libs/sidebar_listener.js',
//   'js/libs/notification.js',
  'dist/js/extra/date.js',
  'js/libs/slh_test.js',
  // 'js/vendor/jspdf.debug.js'
  // 'dist/js/jquery.mask.min.js',
 'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js',
 'https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js',
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
    'dist/css/slh.css',
    'dist/css/select2.css',
    'dist/css/select2.min.css',
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