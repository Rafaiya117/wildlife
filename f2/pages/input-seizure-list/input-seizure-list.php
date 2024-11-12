<div class="content-wrapper">
    <div class="card-body">
        <section class="container">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="innerPage-box">
                            <h3 class="innerPage-head" id="seiz">
                                <?php echo trans("seiz", 'en'); ?>
                                <br>
                                <?php echo trans("seiz", 'bn'); ?>
                            </h3>

                            <?php

              echo '<table id="tbl_seizure_list" class="table table-bordered inner-textfield" style="text-align:center">';
              echo '</table>';

              ?>
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-bordered inner-textfield">

                                        <tr>
                                        <tr>
                                            <th><?php echo trans("sl", 'en'); ?>
                                                <br>
                                                <?php echo trans("sl", 'bn'); ?>
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><input type="number" class="form-control inner-textfield" id="sl"
                                                    data-key="species_seizure.sl" name="sl" min="1"  />
                                            </td>
                                        </tr>
                                        <tr> 
                                            <th> Body parts / Trophy / Product name
                                                <br>
                                                দেহাংশ / ট্রফি / পণ্য এর নাম 
                                                
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><input type="text"  class="form-control inner-textfield" id="trophy_name"
                                                    name="trophy_name"  data-key="species_seizure.trophy_name" />
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Species name   
                                                <br>
                                                প্রজাতির নাম
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><select  class="form-control inner-textfield" id="name"
                                                    name="name"  data-key="species_seizure.name">
                                                    <option></option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Quantity (number)

                                                <br> পরিমাণ (সংখ্যা)
                                                
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><input type="number" class="form-control inner-textfield" id="quantity"
                                                    data-key="species_seizure.quantity" name="quantity" min="1"
                                                     /></td>
                                        </tr>
                                       
                                        <tr>
                                            <th>Quantity (gm)

                                            <br> পরিমাণ (গ্রাম)
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><input type="number" class="form-control inner-textfield" id="weight"
                                                    name="weight" min="1"  data-key="species_seizure.weight" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Quantity (ml)

                                            <br> পরিমাণ (মি.লি.)
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><input type="number" class="form-control inner-textfield" id="quantity_ml"
                                                    name="quantity_ml" min="1"  data-key="species_seizure.quantity_ml" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("value", 'en'); ?>
                                                <br>
                                                <?php echo trans("value", 'bn'); ?>
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><input type="number" class="form-control inner-textfield"
                                                    id="estimated_value" name="estimated_value" min="1"
                                                    data-key="species_seizure.estimated_value"  /></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("length", 'en'); ?>
                                                <br>
                                                <?php echo trans("length", 'bn'); ?>
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><input type="number" class="form-control inner-textfield" id="length"
                                                    name="length" min="1"  data-key="species_seizure.length" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("width", 'en'); ?>
                                                <br>
                                                <?php echo trans("width", 'bn'); ?>
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><input type="number" class="form-control inner-textfield" id="width"
                                                    data-key="species_seizure.width" name="width" min="1"  />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("height", 'en'); ?>
                                                <br>
                                                <?php echo trans("height", 'bn'); ?>
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><input type="number" name="height" class="form-control inner-textfield"
                                                    id="height" data-key="species_seizure.height" min="1"  />
                                            </td>
                                        </tr>
                                        </tr>

                                    </table>
                                    <div class="listinBtn">
                                        <a id="szl_addmore"><label id="addm">
                                                <?php echo trans("addm", 'en'); ?>
                                                <?php echo trans("addm", 'bn'); ?>
                                            </label></a>
                                    </div>
                                </div>
                                <div>
                                    <a href="#input-officer-information" class="listinBtn pull-left"> <label id="pre">
                                            <?php echo trans("pre", 'en'); ?>
                                            <?php echo trans("pre", 'bn'); ?>
                                        </label></a>
                                    <a class="listinBtn pull-right" value="Next(পরবর্তী)" name="submit" title="Next"
                                        id="seizure_next">
                                        <b><?php echo trans("next", 'en'); ?>
                                            <?php echo trans("next", 'bn'); ?></b>
                                    </a>
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