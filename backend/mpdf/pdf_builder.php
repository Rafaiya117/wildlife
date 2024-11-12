<?php
error_reporting(E_ERROR | E_PARSE);
require_once  'vendor/autoload.php';
include '../_a.php';

$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
    'orientation' => 'L',
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/ttf',
    ]),
    'fontdata' => $fontData + [
        'ntest' => [
            'R' => 'Nikosh1.ttf',
            'I' => 'Nikosh1.ttf',
            'useOTL' => 0xFF,
        ]
    ],
    'default_font' => 'ntest'
]);


if(!empty($_POST['html_content'])){ 
    //  && !empty($_POST['case_detail'])
    
    
    $style_for_pdf = '
    <style>
    table{
        border:1px solid #ddd;
    }
    table tr{
        border:1px solid #ccc;
    }
    </style>';
    // print_r($_POST);
    // die();
    $case_detail = $_POST['case_detail'];
    $case_no = @$_POST['case_no'];
    $filename = 'wor-'.htmlentities($case_no).'.pdf';
    $uri  = '../../download/'.$filename;
    
        
    $mpdf->WriteHTML('<body style="font-family:ntest;" >' .$style_for_pdf . $_POST['html_content'] . '</body>');
    
    $mpdf->Output($uri, \Mpdf\Output\Destination::FILE);
    
    

    json_send([
        'filename' => $filename, 
        'uri' => 'download/' . $filename
    ]);

}