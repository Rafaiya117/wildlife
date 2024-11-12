<div class="content-wrapper" style="min-height: 901px;">
    <section class="container">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="innerPage-box">
                        <div class="col-md-6">
                            <h3 class="innerPage-head" id="my_wlor_list">
                                <?php echo trans("my_wlor_list", 'en'); ?><br>
                                <?php echo trans("my_wlor_list", 'bn'); ?>
                            </h3>
                            <!-- <h2> <button type="button">Count Rows</button></h2> -->
                        </div>
                        <div class="col-md-6">
                            <h2 style="text-align:center">Search অনুসন্ধান</h2>
                            <input type="text" id="myInput" class="form-control inner-textfield" />
                        </div>
                        <table id='tb_my_wlor_list' class="table styled-table" style="font-size: 20px;">
                            <thead>
                                <tr>
                                    <th>
                                        <?php echo trans("case", 'en'); ?><br>
                                        <?php echo trans("case", 'bn'); ?>
                                    </th>
                                    <th>
                                        Date <br> তারিখ
                                    </th>
                                    <th>
                                        Organization Name <br> সংগঠনের নাম
                                    </th>
                                    <th>District <br> জেলা</th>
                                    <th>
                                        <?php echo trans("offenceinfo", 'en'); ?><br>
                                        <?php echo trans("offenceinfo", 'bn'); ?>
                                    </th>                                
                                    <th>
                                        <?php echo trans("accusedname", 'en'); ?>
                                        <br>
                                        <?php echo trans("accusedname", 'bn'); ?>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr></tr>
                                    <td onclick="location.href='#case_details'"></td>
                                    <td onclick="location.href='#case_details'"></td>
                                    <td>Loading</td>
                                    <td>Loading</td>
                                    <td></td>
                                    <td></td>
                                  

                                </tr>
                                <tr>
                                    <td onclick="location.href='#offender-details'"></td>
                                    <td onclick="location.href='#case_details'"></td>
                                    <td>Loading</td>
                                    <td>Loading</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <a class="listinBtn pull-left" onclick="window.history.go(-1); return false;" style="cursor: pointer;"><?php echo trans("back", 'en'); ?>
                            <?php echo trans("back", 'bn'); ?></a> 
                            <a class="listinBtn" href="#annual_report" style="cursor: pointer;">Export এক্সপোর্ট</a> 
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</div>
<div class="control-sidebar-bg"></div>