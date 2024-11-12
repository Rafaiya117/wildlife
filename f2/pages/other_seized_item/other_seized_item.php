<!-----------#####################MULTIPLE IMAGE PREVIEW JS#########---->
<style>
.myDiv {
    display: none;
    padding: 10px;
    margin-top: 20px;
}
</style>
<div class="content-wrapper" style="min-height: 901px;">
    <section class="container">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="innerPage-box">
                        <div>
                            <a href="#input-rescue-information" class="listinBtn pull-left"><label id="pre">
                                    <?php echo trans("pre", 'en'); ?>
                                    <?php echo trans("pre", 'bn'); ?></label></a>
                            <a class="listinBtn seized_next" id="seized_next">
                                <b><?php echo trans("next", 'en'); ?>
                                    <?php echo trans("next", 'bn'); ?></b></a>
                            <a id="" class="listinBtn sample_skip"><b>Skip এড়িয়ে যান</b></a>
                        </div>
                        <div class="topnav">
                            <a class="navbar" href="#other_seized_item">6/13</a>
                        </div>

                        <h3 class="innerPage-head " id="other-item"> <?php echo trans("other-item", 'en'); ?>
                            <br><?php echo trans("other-item", 'bn'); ?>
                        </h3>
                        <?php

                        echo '<table id="tbl_other_seized_list" class="table table-bordered inner-textfield" style="text-align:center" >';
                        echo '<thead><tr>';
                        echo '<td>জব্দকৃত জিনিস</td>';
                        echo '<td>জব্দকৃত জিনিসের বিবরণ</td>';
                        echo '<td>জব্দকরণের অবস্থান</td>';
                        echo '<td>জিম্মাদার-এর নাম</td>';
                        echo '<td>জিম্মাদার-এর ঠিকানা</td>';
                        echo '<td>ফোন নম্বর</td>';
                        echo '</tr></thead>';

                        echo '<tbody><tr>';
                        echo '<td>seized item</td>';

                        echo '<td>item_details</td>';
                        echo '<td>seizure_location</td>';
                        echo '<td>custodian_name</td>';
                        echo '<td>custodian_address</td>';
                        echo '<td>custodian_phn</td>';
                        echo '</tr>';

                        echo '</tbody></table>';

                        ?>
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered inner-textfield tb-table">
                                    <tr>
                                    <tr>
                                        <th><?php echo trans("seiz-it", 'en'); ?><br>
                                            <?php echo trans("seiz-it", 'bn'); ?></th>
                                        <td><select class="form-control inner-textfield" name="seized_item"
                                                style="height:45px;color:#009472 !important" class="form-control"
                                                id="seized_item" data-key="seizured_item.seized_item">
                                                <option value=""></option>
                                                <option value="vehicles">Vehicles যানবাহন</option>
                                                <option value="tools">Tools টুলস</option>
                                                <option value="weapons">Weapons অস্ত্র</option>
                                                <option value="trap">Traps ফাঁদ</option>
                                                <option value="others">Others অন্যান্য</option>
                                            </select></td>
                                    </tr>
                                    <tr class="my_div">
                                        <th>
                                        Specify the other item <br>
                                        অন্যান্য জব্দকৃত জিনিসপত্র বর্ণনা করুন

                                        </th>
                                        <td><input class="form-control inner-textfield" id="new_item" name="new_item" data-key="seizured_item.new_item"/></td>
                                    </tr>
                                    <tr>
                                        <th><?php echo trans("typo", 'en'); ?><br>
                                            <?php echo trans("typo", 'bn'); ?></th>
                                        <td><input type="text" id="types"
                                                class="form-control inner-textfield  ui-autocomplete-input" name="types"
                                                autocomplete="off" data-key="seizured_item.weapon_type" />
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <th><?php echo trans("brand", 'en'); ?><br>
                                            <?php echo trans("brand", 'bn'); ?></th>
                                        <td><input type="text" id="brands"
                                                class="form-control inner-textfield  ui-autocomplete-input"
                                                name="brands" value="" autocomplete="off"
                                                data-key="seizured_item.weapon_brand" /></td>
                                    </tr>
                                    <tr>
                                        <th><?php echo trans("model", 'en'); ?><br>
                                            <?php echo trans("model", 'bn'); ?></th>
                                        <td><input type="text" id="models"
                                                class="form-control inner-textfield  ui-autocomplete-input"
                                                name="models" value="" autocomplete="off"
                                                data-key="seizured_item.weapon_model" /></td>
                                    </tr>
                                    <tr>
                                        <th><?php echo trans("reg", 'en'); ?><br>
                                            <?php echo trans("reg", 'bn'); ?></th>
                                        <td><input type="text" id="reg_numbers"
                                                class="form-control inner-textfield  ui-autocomplete-input"
                                                name="reg_numbers" value="" autocomplete="off"
                                                data-key="seizured_item.weapon_reg_no" /></td>
                                    </tr>
                                    <tr>
                                        <th>Quantity (number) <br> পরিমাণ (সংখ্যা)
                                        </th>
                                        <td><input type="number" id="quantity_number_1"
                                                class="form-control inner-textfield  ui-autocomplete-input"
                                                name="quantity_number_1" value="" autocomplete="off"
                                                data-key="seizured_item.quantity_number_1" /></td>
                                    </tr>
                                    <tr>
                                        <th>Quantity (gm)<br>পরিমাণ (গ্রাম)</th>
                                        <td><input type="number" id="quantity_gm_1"
                                                class="form-control inner-textfield  ui-autocomplete-input"
                                                name="quantity_gm_1" value="" autocomplete="off"
                                                data-key="seizured_item.quantity_gm_1" /></td>
                                    </tr>
                                    <tr>
                                        <th>Quantity (ml)
                                            <br>পরিমাণ (মিলি)
                                        </th>
                                        <td><input type="number" id="quantity_ml_1"
                                                class="form-control inner-textfield  ui-autocomplete-input"
                                                name="quantity_ml_1" value="" autocomplete="off"
                                                data-key="seizured_item.quantity_ml_1" /></td>
                                    </tr>
                                    <tr>
                                        <th>Measurement<br>পরিমাপ</th>
                                        <td>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <p class="col-md-4"><b>Length (Inch) দৈর্ঘ্য (ইঞ্চি)</b>
                                                        <input type="number" id="measurement_lenght"
                                                            class="form-control inner-textfield  ui-autocomplete-input"
                                                            name="measurement_lenght" value="" autocomplete="off"
                                                            data-key="seizured_item.measurement_lenght" />
                                                    </p>
                                                    <p class="col-md-4"><b>Width (Inch) প্রস্থ (ইঞ্চি)</b>
                                                        <input type="number" id="measurement_width"
                                                            class="form-control inner-textfield  ui-autocomplete-input"
                                                            name="measurement_width" value="" autocomplete="off"
                                                            data-key="seizured_item.measurement_width" />
                                                    </p>
                                                    <p class="col-md-4"><b>Height (Inch) উচ্চতা (ইঞ্চি)</b>
                                                        <input type="number" id="measurement_height"
                                                            class="form-control inner-textfield  ui-autocomplete-input"
                                                            name="measurement_height" value="" autocomplete="off"
                                                            data-key="seizured_item.measurement_height" />
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><?php echo trans("locat", 'en'); ?><br>
                                            <?php echo trans("locat", 'bn'); ?></th>
                                        <td><input type="text" id="seizure_location"
                                                class="form-control inner-textfield  ui-autocomplete-input"
                                                name="seizure_location" value="" autocomplete="off"
                                                data-key="seizured_item.seizure_location"></td>
                                    </tr>
                                    <tr>
                                        <th><?php echo trans("nm-cus", 'en'); ?><br>
                                            <?php echo trans("nm-cus", 'bn'); ?></th>
                                        <td><input type="text" id="custodian_name"
                                                class="form-control inner-textfield  ui-autocomplete-input"
                                                name="custodian_name" value="" autocomplete="off"
                                                data-key="seizured_item.items_seizure_custodian.name"
                                                style="text-transform:capitalize;"></td>
                                    </tr>
                                    <tr>
                                        <th><?php echo trans("cus-des", 'en'); ?><br>
                                            <?php // echo trans("cus-des", 'bn'); ?>
                                            জিম্মাদার-এর পেশা/পদবি
                                        </th>
                                        <td><input type="text" id="custodian_designation"
                                                class="form-control inner-textfield  ui-autocomplete-input"
                                                name="custodian_designation" value="" autocomplete="off"
                                                data-key="seizured_item.items_seizure_custodian.designation"></td>
                                    </tr>
                                    <tr>
                                        <th><?php echo trans("add-cus", 'en'); ?><br>
                                            <?php echo trans("add-cus", 'bn'); ?></th>
                                        <td><input type="text" id="custodian_address"
                                                class="form-control inner-textfield  ui-autocomplete-input"
                                                name="custodian_address" value="" autocomplete="off"
                                                data-key="seizured_item.items_seizure_custodian.address"
                                                style="text-transform:capitalize;"></td>
                                    </tr>
                                    <tr>
                                        <th>Mobile Number <?php // echo trans("phn-num", 'en'); ?><br>
                                            মোবাইল নম্বর
                                            <?php // echo trans("phn-num", 'bn'); ?></th>
                                        <td><input type="number" id="custodian_phn"
                                                class="form-control inner-textfield"
                                                name="custodian_phn" value="" autocomplete="off" maxlength="11"
                                                data-key="seizured_item.items_seizure_custodian.phone" oninput="number_length();" ></td>
                                    </tr>
                                    </tr>
                                    </form>
                                </table>
                                <div class="form-group col-md-12">
                                    <div>
                                        <a id="osi_addmore" class="listinBtn"><label id="addm">
                                                <?php echo trans("addm", 'en'); ?>
                                                <?php echo trans("addm", 'bn'); ?>
                                            </label></a>
                                    </div>
                                </div>
                                <div>
                                    <a href="#input-rescue-information" class="listinBtn pull-left"> <label id="pre">
                                            <?php echo trans("pre", 'en'); ?>
                                            <?php echo trans("pre", 'bn'); ?>
                                        </label></a>
                                    <a class="listinBtn seized_next" id="seized_next">
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