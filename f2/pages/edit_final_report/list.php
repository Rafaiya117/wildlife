<?php global $count ?>
<div class="content-wrapper" style="min-height: 901px;">

    <section class="container">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="innerPage-box">
                        <div class="col-md-6">
                            <h3 class="innerPage-head" id="wlor_list">
                                <?php echo trans("wlor_list", 'en'); ?><br>
                                <?php echo trans("wlor_list", 'bn'); ?>
                            </h3>
                            <!-- <h2><button type="button">Count Rows</button></h2> -->
                        </div>
                        <div class="col-md-6">
                            <h2 style="text-align:center">Search অনুসন্ধান</h2>
                            <input id="wlor" type="text" class="form-control inner-textfield" />
                        </div>
                        <table id='tb_wlor_all_list' class="table styled-table" style="font-size: 20px;">
                            <thead>
                                <tr>
                                    <th>Case No.</th>
                                    <th>Information</th>
                                    <th>Offender Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td onclick="location.href='#case-details'"></td>
                                    <td onclick="location.href='#case-details'"></td>
                                    <td>Loading</td>
                                    <td>Loading</td>

                                </tr>
                                <tr>
                                    <td onclick="location.href='#offender-details'"></td>
                                    <td onclick="location.href='#case-details'"></td>
                                    <td>Loading</td>
                                    <td>Loading</td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                </tr>
                            </tbody>
                            <!-- for test -->
                        </table>
                        <a class="listinBtn pull-left" onclick="window.history.go(-1); return false;" style="cursor: pointer;"><?php echo trans("back", 'en'); ?>
                      <?php echo trans("back", 'bn'); ?></a>
                      <a class="listinBtn"  style="cursor: pointer;">Export এক্সপোর্ট</a>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
</div>
<div class="control-sidebar-bg"></div>