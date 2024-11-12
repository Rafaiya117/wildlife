<?php 

function div_section_end($index_id = 85){
    if($index_id!=0){
        echo '</table>';

    }
    
    // ----- 
    echo '<table class="table table-bordered table-hover dataTable no-footer showMe tbid-',$index_id,'"  style="font-size: 18px;" role="grid" aria-describedby="example2_info" >';
    echo '<thead class="listing-panel">
            <tr role="row">
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Section: activate to sort column ascending">Law ID</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Section: activate to sort column ascending">Law Name</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Section: activate to sort column ascending">Section heads</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Offence: activate to sort column ascending">Section</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Punishment Prescribed One: activate to sort column ascending">Sub Section</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Punishment Prescribed Two: activate to sort column ascending">Details</th>
            </tr>
            </thead>';

    
}
function law_headers($head_text_en, $head_text_bn, $index_id){
    echo '<section class="content-header" data-index_id="',$index_id,'">
    
        <h2 class="innerPage-head">',$head_text_en,'
            
        <br><i class="fas fa-chevron-down"></i>&nbsp;',$head_text_bn,'</h2>
        </section>';

}

global $law_data, $law_full_data;

?>
<div class="content-wrapper " style="min-height: 901px;">
    <div class="box-body ">
        <div class="row">
            <div class="col-md-12">
                <div class="innerPage-box">
            <div>
                <a href="#input-offence-information" class="listinBtn pull-left"><label id="pre">
                    <?php echo trans("pre", 'en'); ?>
                        <?php echo trans("pre", 'bn'); ?></label></a>
                        <a class="listinBtn review_next" id="review_next">
                            <b><?php echo trans("next", 'en'); ?>
                                <?php echo trans("next", 'bn'); ?></b></a></div>
                                <div class="topnav">
                                    <a class="navbar" href="#review-section">3/13</a></div>
                                    
                                        <h3 class="innerPage-head " id="reviewsection">
                                            <?php echo trans("reviewsection", 'en'); ?><br>
                                            <?php echo trans("reviewsection", 'bn'); ?></h3>
                                            <form class="rs_law_title" method="POST" action="#input-officer-information" enctype="multipart/form-data">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <?php
                                                        //echo '<pre>';
                                                        //print_r($law_full_data);
                                                        //echo '</pre>';
                                                        ?>
                                                        <?php
                                                            /** end of orginal section */
                                                            $last_law_name = 'Just_not_blank';
                                        
                                                          for ($i = 0, $ilen = sizeof($law_data); $i < $ilen; $i++) {
                                                            $data = $law_data[$i];
                                                            if( !empty($data['law_name']) ){
                                                                if($last_law_name !== $data['law_name']){   
                                                                    div_section_end($i);
                                                                    law_headers('', $data['law_name'], $i );
                                                                }
                                                                $last_law_name = $data['law_name'];
                                                            }
                                                            echo '<div class="form-group">';
                                                            //  print_r($law_full_data[$i]);
                                                            echo '<tr>';
                                                            echo' <label class="checkbox-holder">';
                                                            echo '<td>','<input  type="checkbox" id="',
                                                                  $law_full_data[$i]['law_id'] , '" data-id="law_sections" value="',
                                                                  $law_full_data[$i]['law_name'],' এর ',
                                                                  $law_full_data[$i]['Section_heads'],', ',
                                                                  $law_full_data[$i]['Section'],', ',
                                                                  $law_full_data[$i]['Sub_section'],' ',
                                                                  $law_full_data[$i]['law_details'],'" data-key="law_sections" required />','</td> ';
                                                            echo '<td style="font-size:18px;"> ', $data['law_name'] , '</td>';
                                                            echo '<td style="font-size:18px;"> ', $data['Section_heads'] , '</td>';
                                                            echo '<td style="font-size:18px;"> ', $data['Section'] , '</td>';
                                                            echo '<td style="font-size:18px;"> ', $data['Sub_section'] , '</td>';
                                                            echo '<td style="font-size:18px;"> ', $data['law_details'] , '</td>';
                                                            echo '</label></tr>';
                                                            echo '</div>'; 
                                                        }
                                                        ?>
                                                        </table>
                                                    </div>
                                                </div>

                        <a href="#input-offence-information" class="listinBtn pull-left"><label id="pre">
                                <?php echo trans("pre", 'en'); ?>
                                <?php echo trans("pre", 'bn'); ?>
                            </label></a>
                        <a class="listinBtn review_next" id="review_next">
                            <b><?php echo trans("next", 'en'); ?>
                                <?php echo trans("next", 'bn'); ?></b>
                        </a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<div class="control-sidebar-bg"></div>
</div>