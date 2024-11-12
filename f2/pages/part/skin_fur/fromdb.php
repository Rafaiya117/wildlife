<?php global $trade_for_data; ?>
<div class="content-wrapper" style="margin-top: px; min-height: 1000px;">
    <!-- Content Header (Page header) -->
    <section class="content-header content-header_2" id="dash_head" style= "text-align: center; font-size: 30px;">
      <h2 style= "font-size: 30px;">
      <b class="btn-warning btn-lg banner-btn">বিড়ালগোত্রীয় প্রাণী</b>
     </h2> 
     <br>
   </section>
    <!-- Main content -->
    <section class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="box listing-panel">
                    <div class="box-body">
                        
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2 " class="table table-bordered table-hover dataTable no-footer table-margin "style="font-size: 18px;" role="grid" aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row">
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Section: activate to sort column ascending" style="text-align:center;">Image</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Section: activate to sort column ascending" style="text-align:center;">Bangla name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Offence: activate to sort column ascending" style="text-align:center;">English name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Punishment Prescribed One: activate to sort column ascending" style="text-align:center;">Scientific name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Punishment Prescribed Two: activate to sort column ascending" style="text-align:center;">Scientific ref.</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Punishment Prescribed Two: activate to sort column ascending" style="text-align:center;">Wildlife <br> act schedule #</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Punishment Prescribed Two: activate to sort column ascending" style="text-align:center;">IUCN <br> (Global status)</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Punishment Prescribed Two: activate to sort column ascending" style="text-align:center;">CITES</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Punishment Prescribed Two: activate to sort column ascending" style="text-align:center;">Type</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Punishment Prescribed Two: activate to sort column ascending" style="text-align:center;">Description</th>
                                            </tr>
                                        </thead>
                                        <?php echo "<tbody>";
                                            for ($i = 1, $ilen = sizeof($trade_for_data); $i < $ilen; $i++) {
                                                    echo "<tr><td></td>";
                                                    echo "<td>" . ($trade_for_data[$i]['j']) . "</td>";
                                                    echo "<td>" . ($trade_for_data[$i]['c']) . "</td>";
                                                    echo "<td>" . ($trade_for_data[$i]['f']) . "</td>";
                                                    echo "<td>" . ($trade_for_data[$i]['k']) . "</td>";
                                                    echo "<td>" . ($trade_for_data[$i]['m']) . "</td>";
                                                    echo "<td>" . ($trade_for_data[$i]['g']) . "</td>";
                                                    echo "<td>" . ($trade_for_data[$i]['h']) . "</td>";
                                                    echo "<td>" . ($trade_for_data[$i]['i']) . "</td>";
                                                    echo "<td>" . ($trade_for_data[$i]['d']) . "</td></tr>";
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