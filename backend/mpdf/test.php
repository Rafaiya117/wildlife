<?php
require_once 'vendor/autoload.php';

// $mpdf = new \Mpdf\Mpdf();
// // print_r($mpdf);


$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/ttf',
    ]),
    'fontdata' => $fontData + [
        'frutiger' => [
            'R' => 'Nikosh1.ttf',
            'I' => 'Nikosh1.ttf',
            'useOTL' => 0xFF,
        ]
    ],
    'default_font' => 'frutiger'
]);



$mpdf->WriteHTML('<body style="font-family: frutiger"> <div id="collapseThree" class="" role="tabpanel" aria-labelledby="headingThree">
<div class="panel-body">
    <div style="min-height: 350px;">
        <section class="container">
            <div class="col-md-12">
                <div class="innerPage-box">
                   
                    <div class="card">
                        <div class="card-body">

                            <table class="table inner-textfield" style="table-layout: fixed;">
                                <thead>
                                <tr>
                                <th>ক্রমিক</th>
                                  
                                    <th>সংখ্যা</th>
                                    <th>ওজন</th>
                                    <th>আনুমানিক মূল্য</th>
                                    <th>দৈর্ঘ্য</th>
                                    <th>প্রস্থ</th>
                                    <th>উচ্চতা</th>
                                </tr>
                                    </thead>
                                
                             
                            </table>
                        </div>
        </section>
    </div>
</div>
</div>
</div></body>');
$mpdf->Output();

