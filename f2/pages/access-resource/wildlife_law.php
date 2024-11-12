<?php 
/*
SELECT *
FROM `all_laws`
where `law_id` like 'WA_%';


update `all_laws`
set law_name_en = ''
where `law_id` like 'WA_%';

FL_%

*/
function table_section_end($index_id = 85){
    if($index_id!=0){
        echo '</table>';

    }
    
    // ----- 
    echo '<table class="table table-bordered table-hover dataTable no-footer showMe tbid-',$index_id,'"  style="font-size: 18px;display:none;" role="grid" aria-describedby="example2_info" >';
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
function law_header($head_text_en, $head_text_bn, $index_id){
    echo '<section class="content-header" data-index_id="',$index_id,'">
    
        <h2 class="innerPage-head">',$head_text_en,'
            
        <br><i class="fas fa-chevron-down"></i>&nbsp;',$head_text_bn,'</h2>
        </section>';

}

global $law_data; 


?>
<div class="content-wrapper" style="margin-top: 15px; min-height: 1000px;">
    <!-- Content Header (Page header) -->

    <?php // law_header( trans("wildh", 'en'),trans("wildh", 'bn')); ?>


    <!-- Main content -->
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                                <table id="example2" class="table table-bordered table-hover dataTable no-footer">
                                    <!--  -->
                                    <?php 
                                        $last_law_name = 'Just_not_blank';
                                        
                                        for ($i = 0, $ilen = sizeof($law_data); $i < $ilen; $i++) {

                                            $data = $law_data[$i];
                                            

                                            if( !empty($data['law_name']) ){
                                             
                                                if($last_law_name !== $data['law_name']){   
                                                    table_section_end($i);
                                                    law_header('', $data['law_name'], $i );

                                                }
                                                $last_law_name = $data['law_name'];

                                            }
                                            echo '<tr >';
                                            foreach($data as $value){
                                                  echo '<td style="font-size:18px;">',$value , '</td>';
                                                 
                                            }
                                            
                                            echo '</tr>';
                                              
                                           
                                          }
                                      
                                        ?>

                                </table>
                            </div>
                                <div>
                                        <a class="listinBtn pull-left" onclick="window.history.go(-1); return false;" style="cursor: pointer;"><?php echo trans("back", 'en'); ?>
                                            <?php echo trans("back", 'bn'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
<div class="control-sidebar-bg"></div>
</div>
<script>
    
</script>