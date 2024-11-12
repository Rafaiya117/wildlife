<?php global $sSpecies_crocodile_data ; ?>
<div class="content-wrapper" style="margin-top: px; min-height: 1000px;">
    <!-- Content Header (Page header) -->
    <section class="content-header content-header_2" id="dash_head" style= "text-align: center; font-size: 30px;">
      <h2 style= "font-size: 30px;">
      <b class="btn-warning btn-lg banner-btn">Crocodile কুমির</b>
     </h2> 
     <br>
   </section>
    <!-- Main content -->
    <section class="container">
        <div class="row">
        <div class="col-md-6" style="margin-left:50%;">
                            <h2 style="text-align:center">অনুসন্ধান করুন</h2>
                            <input type="text" id="search" class="form-control inner-textfield" />
                        </div>
            <div class="col-md-12  mt-4">
                <div class="box listing-panel">
                    <div class="box-body">
                        
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2 " class="table table-bordered table-hover dataTable no-footer table-margin" style="font-size: 18px;" role="grid" aria-describedby="example2_info">
                                    <thead class="sorting">
                                    <tr role="row">
                                                <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Section: activate to sort column ascending" style="text-align:center;">Image</th>
                                                <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Section: activate to sort column ascending" style="text-align:center;">Bangla name</th>
                                                <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Offence: activate to sort column ascending" style="text-align:center;">English name</th>
                                                <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Punishment Prescribed One: activate to sort column ascending" style="text-align:center;">Scientific name</th>
                                                <!-- <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Punishment Prescribed Two: activate to sort column ascending" style="text-align:center;">Scientific ref.</th> -->
                                                <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Punishment Prescribed Two: activate to sort column ascending" style="text-align:center;">Wildlife <br> act schedule #</th>
                                                <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Punishment Prescribed Two: activate to sort column ascending" style="text-align:center;">IUCN <br> (Global status)</th>
                                                <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Punishment Prescribed Two: activate to sort column ascending" style="text-align:center;">IUCN <br> (Bangladesh)</th>
                                                <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Punishment Prescribed Two: activate to sort column ascending" style="text-align:center;">CITES</th>
                                                <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Punishment Prescribed Two: activate to sort column ascending" style="text-align:center;">Type</th>

                                            </tr>
                                        </thead>
                                        <?php echo "<tbody id='find'>";
                                        
                                        for ($i=0,$ilen = sizeof($sSpecies_crocodile_data); $i < $ilen; $i++) {
                                           
                                            
                                           
                                             
                                            $path1 = '../dist/species_img/image_nfound.png';
                                            $image_path = IMAGE_URL . ($sSpecies_crocodile_data[$i]['id']).'.webp';
                                            
                                            // echo file_exists($path1) ? $path1 : $path2; 
                                             
                                            echo "<tr class='sorting'><td>";
                                            echo '<div class="spce_image_bg" ><a data-fancybox href="',$image_path,'">
                                                <img src="',$image_path,'" height="100" width="100"  ></a></div>';
                                            echo "</td>";
                                            echo "<td style='text-align:center;'>" . ($sSpecies_crocodile_data [$i]['bangla_name']) . "</td>";
                                            echo "<td style='text-align:center;'>" . ($sSpecies_crocodile_data [$i]['english_name']) . "</td>";
                                            echo "<td style='text-align:center;'><i>" . ($sSpecies_crocodile_data [$i]['scientific_name']) . "</i></td>";
                                            // echo "<td style='text-align:center;'>" . ($sSpecies_crocodile_data [$i]['scientific_Ref']) . "</td>";
                                            echo "<td style='text-align:center;'>" . ($sSpecies_crocodile_data [$i]['schedule']) . "</td>";
                                            echo "<td style='text-align:center;'>" . ($sSpecies_crocodile_data [$i]['IUCN']) . "</td>";
                                            echo "<td style='text-align:center;'>" . ($sSpecies_crocodile_data [$i]['IUCN_Bangladesh']) . "</td>";
                                            echo "<td style='text-align:center;'>" . ($sSpecies_crocodile_data [$i]['CITES']) . "</td>";
                                            echo "<td style='text-align:center;'>" . ($sSpecies_crocodile_data [$i]['type']) . "</td>
                                            </tr>";
                                        
                                            
                                         }

                                        echo "</tbody>";
                                        ?>
                                    </table>
                                </div>
                            </div>
                            <a class="listinBtn pull-left" onclick="window.history.go(-1); return false;" style="cursor: pointer;"><?php echo trans("back", 'en'); ?>
   <?php echo trans("back", 'bn'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<div class="control-sidebar-bg"></div>
</div>
<script>
      $(document).ready(function () {
    $("#search").on("keyup", function () {
      var value = $(this).val().toLowerCase();
      $("#find tr").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      });
    });
  });
</script>