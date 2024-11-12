<style>
    .speciesDetails .active{
        background-color:#1f4c21;
        color: #cccccc;
    }
</style>
<div class="content-wrapper" style="min-height: 901px;">
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <div class="innerPage-box ">
                <div>
                    <a href="#input-officer-information" class="listinBtn pull-left"><label id="pre">
                        <?php echo trans("pre", 'en'); ?>
                                <?php echo trans("pre", 'bn'); ?></label></a>
                        <a id="" class="listinBtn rescue_next">
                            <b><?php echo trans("next", 'en'); ?>
                                <?php echo trans("next", 'bn'); ?></b>
                        </a>
                    </div>
                    <div class="topnav">
                        <a class="navbar" href="#input-rescue-information">5/13</a></div>
                            <h3 class="innerPage-head">Seized Species (animals/plants)<br>জব্দকৃত প্রজাতিসমূহ (প্রাণী/উদ্ভিদ) বিস্তারিত</h3>
                            <h4 class="innerPage-head"> Whole Body  সম্পূর্ণ দেহ </h4>
                                <?php
                                echo '<table id="tbl_whole_species_list" class="table table-bordered inner-textfield" style="text-align:center">';
                                echo '<thead><tr>';
                                echo '<td>প্রজাতির নাম(English)</td>';
                                echo '<td>প্রজাতির নাম(Bangla)</td>';
                                echo '<td>বৈজ্ঞানিক নাম</td>';
                                echo '<td>আইইউসিএন</td>';
                                echo '<td>সাইটিস</td>';
                                echo '<td>তফসিল</td>';
                                echo '<td>জীবিত/মৃত</td>';
                                echo '<td>বয়স</td>';
                                echo '<td>লিঙ্গ</td>';
                                echo '<td>দেহাংশ/সম্পূর্ণ</td>';
                                echo '<td>পরিমাণ</td>';
                                echo '<td>আনুমানিক বাজার মূল্য (টাকা)</td>';
                                echo '</tr></thead>';
                                echo '</table>';
                                ?>
                            <h4 class="innerPage-head" > Body-parts/Trophy/Product  দেহাংশ/ট্রফি/পণ্য</h4>
                                <?php
                                echo '<table id="tbl_bodypart_species_list" class="table table-bordered inner-textfield" style="text-align:center">';
                                echo '<thead><tr>';
                                echo '<td>প্রজাতির নাম(English)</td>';
                                echo '<td>প্রজাতির নাম(Bangla)</td>';
                                echo '<td>বৈজ্ঞানিক নাম</td>';
                                echo '<td>আইইউসিএন</td>';
                                echo '<td>সাইটিস</td>';
                                echo '<td>তফসিল</td>';
                                echo '<td>জীবিত/মৃত</td>';
                                echo '<td>বয়স</td>';
                                echo '<td>লিঙ্গ</td>';
                                echo '<td>দেহাংশ/সম্পূর্ণ</td>';
                                echo '<td>পরিমাণ</td>';
                                echo '<td>আনুমানিক বাজার মূল্য (টাকা)</td>';
                                echo '</tr></thead>';
                                echo '</table>';
                                ?>
                    <div class="card">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12" id="inner-label">
                            
                        </div>
                    </div>
                    <div class="row dropdown">
                        <div class="form-group col-md-12 ">
                            
                        </div>
                    </div>
                    <div class="row speciesDetails">
                        <div class="col-md-12">
                        <div class="col-md-4">
                            <button id="btnw" class="button-unknown">Whole-Body/সম্পূর্ণ দেহ</button>
                        </div>
                          <div class="col-md-4">
                            <button id="btnb" class="button-unknown" >Body-parts/দেহাংশ</button>
                        </div>
                        <div class="col-md-4">
                            <button id="skip_to_other_items" class="button-unknown" >Other Seized Items/অন্যান্য জব্দকৃত জিনিসপত্র</button>
                        </div>
                        </div>
                        <table class="table table-bordered inner-textfield " id="select_form">
                        <tr>
                                    <th> 
                                    <label class="inner-label">

                                        Select seized species
                                            <br>
                                             জব্দকৃত প্রজাতিটি নির্বাচন করুন

                                    </label>    
                                    
                                        <span style="height:45px;color:#FF0000 !important">*</span>
                                    </th>
                                    <td>
                                    <select class="form-control inner-textfield" id="edit_species" name="edit_species"
                                data-key="last_selected_species.species_id">
                                <option></option>
                            </select>    
                            <!-- <input type='button' value='Seleted option' id='but_read'>    -->
                                   
                                    </td>
                                </tr>
                        </table>
                        <table class="table table-bordered inner-textfield sg-form" style="display:none;" id="whole_form">
                            <form role="form" id="commentForm" class="inputs-p10 " method="POST" action=""
                                enctype="multipart/form-data" >
                        
                                <section id="static_data_for_last_selected_item"></section>
                                
                                <tr>
                                    <th>Live/dead<br>জীবিত/মৃত
                                        <span style="height:45px;color:#FF0000 !important">*</span>
                                    </th>
                                    <td><select name="live_dead" class="form-control inner-textfield" id="live_dead"
                                             data-key="last_selected_species.live_dead">
                                            <option value=""></option>
                                            <option value="Live জীবিত" name="Live_0"> Live জীবিত</option>
                                            <option value="Dead মৃত" name="Dead_0"> Dead মৃত</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Age<br>বয়স
                                        <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                    </th>
                                    <td><select name="species_age" class="form-control inner-textfield" id="species_age"
                                            data-key="last_selected_species.age">
                                            <option value=""></option>
                                            <option value="Adult প্রাপ্তবয়স্ক" name="Adult_0"> Adult প্রাপ্তবয়স্ক
                                            </option>
                                            <option value="Juvenile অপ্রাপ্তবয়স্ক" name="Juvenile_0"> Juvenile
                                                অপ্রাপ্তবয়স্ক</option>
                                            <option value="New born নবজাতক" name="NewBorn_0"> New born নবজাতক</option>
                                            <option value="Unknown অজানা" name="Unknown_0"> Unknown অজানা</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th> Sex<br>লিঙ্গ
                                        <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                    </th>
                                    <td><select name="trade[]" class="form-control inner-textfield" id="species"
                                            data-key="last_selected_species.sex">
                                            <option value=""></option>
                                            <option value="Male পুরুষ" name="Male_0"> Male পুরুষ</option>
                                            <option value="Female মহিলা" name="Female_0"> Female মহিলা</option>
                                            <option value="Unknown অজানা" name="Unknown_0"> Unknown অজানা</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Quantity (number)<br>পরিমাণ (সংখ্যা)
                                        <span></span>
                                    </th>
                                    <td> <input type="number" name="quantity" class="form-control inner-textfield"
                                            id="quantity" min="1" data-key="last_selected_species.quantity" /></td>
                                </tr>
                                <tr>
                                    <th><?php echo trans("value", 'en'); ?><br>
                                        <?php echo trans("value", 'bn'); ?>
                                        <!-- -                                                            <span style="height:45px;color:#FF0000 !important">*</span> -->
                                    </th>
                                    <td><input type="number" name="values" class="form-control inner-textfield"
                                            id="values" min="1" data-key="last_selected_species.estimated_value" /></td>
                                </tr>
                                </tr>
                            </form>
                        </table>
                        <table class="table table-bordered inner-textfield sg-form" style="display:none;" id="seizure_form">

                                        <tr>
                                        <!-- <tr>
                                            <th><?php echo trans("sl", 'en'); ?>
                                                <br>
                                                <?php echo trans("sl", 'bn'); ?>
                                                
                                            </th>
                                            <td><input type="number" class="form-control inner-textfield" id="sl"
                                                    data-key="species_seizure.sl" name="sl" min="1"  />
                                            </td>
                                        </tr> -->
                                        <tr> 
                                            <th> Body parts/Product name
                                                <br>
                                                দেহাংশ/ট্রফি/পণ্য এর নাম 
                                                
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><input type="text"  class="form-control inner-textfield" id="trophy_name"
                                                    name="trophy_name"  data-key="last_selected_species.trophy_name" />
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Quantity (number)

                                                <br> পরিমাণ (সংখ্যা)
                                                
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><input type="number" class="form-control inner-textfield" id="quantity_nmbr" value=""
                                                    data-key="last_selected_species.quantity_nmbr" name="quantity_nmbr" min="1"
                                                     /></td>
                                        </tr>
                                       
                                        <tr>
                                            <th>Quantity (gm)

                                            <br> পরিমাণ (গ্রাম)
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><input type="number" class="form-control inner-textfield" id="weight_gm"
                                                value=""    name="weight_gm" min="1"  data-key="last_selected_species.weight_gm" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Quantity (ml)

                                            <br> পরিমাণ (মি.লি.)
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><input type="number" class="form-control inner-textfield" id="quantity_ml"
                                                    name="quantity_ml" min="1"  data-key="last_selected_species.quantity_ml" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("value", 'en'); ?>
                                                <br>
                                                <?php echo trans("value", 'bn'); ?>
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><input type="number" class="form-control inner-textfield"
                                                    id="estimated_value_tf" name="estimated_value_tf" min="1"
                                                    data-key="last_selected_species.estimated_value_tf"  /></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("length", 'en'); ?>
                                                <br>
                                                <?php echo trans("length", 'bn'); ?>
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><input type="number" class="form-control inner-textfield" id="length"
                                                    name="length" min="1"  data-key="last_selected_species.length" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("width", 'en'); ?>
                                                <br>
                                                <?php echo trans("width", 'bn'); ?>
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><input type="number" class="form-control inner-textfield" id="width"
                                                    data-key="last_selected_species.width" name="width" min="1"  />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("height", 'en'); ?>
                                                <br>
                                                <?php echo trans("height", 'bn'); ?>
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><input type="number" name="height" class="form-control inner-textfield"
                                                    id="height" data-key="last_selected_species.height" min="1"  />
                                            </td>
                                        </tr>
                                        </tr>

                                    </table>
                    </div>
                    <!-- <div class="card"> -->
                    <div class="card-body">
                        <div>
                            <a id="szl_addmore" class="listinBtn">
                                <b><?php echo trans("addm", 'en'); ?>
                                    <?php echo trans("addm", 'bn'); ?></b>
                            </a>
                        </div>
                    </div>
                    <div>
                        <a href="#input-officer-information" class="listinBtn pull-left"><label id="pre">
                                <?php echo trans("pre", 'en'); ?>
                                <?php echo trans("pre", 'bn'); ?></label>
                        </a>
                        <a id="" class="listinBtn rescue_next">
                            <b><?php echo trans("next", 'en'); ?>
                                <?php echo trans("next", 'bn'); ?></b>
                        </a>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="control-sidebar-bg"></div>
</div>
