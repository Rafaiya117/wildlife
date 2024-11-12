<!-----------#####################MULTIPLE IMAGE PREVIEW JS#########---->

<div class="content-wrapper" style="min-height: 901px;">
    <section class="container">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="innerPage-box">
                    <div>
                                <a href="#other_seized_item" class="listinBtn pull-left"> <label id="pre">
                                    <?php echo trans("pre", 'en'); ?>
                                        <?php echo trans("pre", 'bn'); ?>
                                </label></a>
                                <a class="listinBtn next" id="">
                                    <b><?php echo trans("next", 'en'); ?>
                                        <?php echo trans("next", 'bn'); ?></b></a>
                                <a id="" class="listinBtn sample_skip"><b>Skip এড়িয়ে যান</b></a>
                            </div>
                            <div class="topnav">
                        
                        <a class="navbar" href="#video_file">8/13</a>
                    </div>
                    
                        <h3 class="innerPage-head " id="other-item"> Others (online/virtual/video)
                            <br>
                            অন্যান্য (অনলাইন/ভার্চুয়াল/ভিডিও)
                        </h3>
                        <?php
                        echo '<table id="tbl_online_seized_item" class="table table-bordered inner-textfield" style="text-align:center" >';
                        echo '<thead><tr>';
                        echo '<td>বর্ণনা</td>';
                        echo '<td>আটকের অবস্থান</td>';
                        echo '<td>জিম্মাদার-এর নাম</td>';
                        echo '<td>জিম্মাদার এর পদবি</td>';
                        echo '<td>জিম্মাদার-এর ঠিকানা</td>';
                        echo '<td>জিম্মাদার এর ফোন নম্বর</td>';
                        echo '</tr></thead>';

                        echo '<tbody><tr>';
                        echo '<td>description</td>';

                        echo '<td>location</td>';
                        echo '<td>name_custodian</td>';
                        echo '<td>designation_custodian</td>';
                        echo '<td>custodian_address</td>';
                        echo '<td>phn_custodian</td>';
                        echo '</tr>';
                         echo '</table>';
                         ?>
                        <div class="card">
                            <div class="card-body">
                            
                                <table class="table table-bordered inner-textfield tb-table">
                                    
                                    <tr>
                                        <th>Seized items<br>জব্দকৃত জিনিস</th>
                                        <td><textarea id="description" class="form-control inner-textfield  ui-autocomplete-input" name="description" rows="" cols="" data-key="online_seized.description"></textarea></td>
                                    </tr>
                                    <tr>
                                        <th><?php echo trans("locat", 'en'); ?><br>
                                            <?php echo trans("locat", 'bn'); ?></th>
                                        <td><input type="text" id="location" class="form-control inner-textfield  ui-autocomplete-input" name="location" value="" autocomplete="off" data-key="online_seized.location"></td>
                                    </tr>
                                    <tr>
                                        <th><?php echo trans("nm-cus", 'en'); ?><br>
                                            <?php echo trans("nm-cus", 'bn'); ?></th>
                                        <td><input type="text" id="name_custodian" class="form-control inner-textfield  ui-autocomplete-input" name="name_custodian" value="" autocomplete="off" data-key="online_seized.name_custodian" style="text-transform:capitalize;"></td>
                                    </tr>
                                    <tr>
                                        <th><?php echo trans("cus-des", 'en'); ?><br>
                                            <?php // echo trans("cus-des", 'bn'); ?>
                                            জিম্মাদার-এর পেশা/পদবি
                                        </th>
                                        <td><input type="text" id="designation_custodian " class="form-control inner-textfield  ui-autocomplete-input" name="designation_custodian " value="" autocomplete="off" data-key="online_seized.designation_custodian">
                                    </td>
                                    </tr>
                                    <tr>
                                        <th><?php echo trans("add-cus", 'en'); ?><br>
                                            <?php echo trans("add-cus", 'bn'); ?></th>
                                        <td><input type="text" id="custodian_address" class="form-control inner-textfield  ui-autocomplete-input" name="custodian_address" value="" autocomplete="off" data-key="online_seized.custodian_address" style="text-transform:capitalize;"></td>
                                    </tr>
                                    <tr>
                                        <th>Mobile Number<br>মোবাইল নম্বর</th>
                                        <td><input type="number" id="phn_custodian" class="form-control inner-textfield  ui-autocomplete-input" name="phn_custodian" value="" autocomplete="off" maxlength="11" data-key="online_seized.phn_custodian" oninput="number_length();" ></td>
                                    </tr>
                                    </tr>
                                </form>
                                </table>
                                <div class="form-group col-md-12">
                                    <div>
                                        <a id="addmore" class="listinBtn"><label id="addm">
                                                <?php echo trans("addm", 'en'); ?>
                                                <?php echo trans("addm", 'bn'); ?>
                                            </label></a>
                                    </div>
                                </div>
                                <div>
                                    <a href="#other_seized_item" class="listinBtn pull-left"> <label id="pre">
                                            <?php echo trans("pre", 'en'); ?>
                                            <?php echo trans("pre", 'bn'); ?>
                                        </label></a>
                                    <a class="listinBtn next" id="next">
                                        <b><?php echo trans("next", 'en'); ?>
                                            <?php echo trans("next", 'bn'); ?></b></a>
                                    <a id="" class="listinBtn sample_skip"><b>Skip এড়িয়ে যান</b></a>
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