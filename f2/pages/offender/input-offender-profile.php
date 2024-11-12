<!-----------#####################MULTIPLE IMAGE PREVIEW JS#########---->
<div class="content-wrapper" style="min-height: 901px;">
    <section class="container">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="innerPage-box">
                        <div>
                            <a href="#video_file" class="listinBtn pull-left"><label id="pre">
                                    <?php echo trans("pre", 'en'); ?>
                                    <?php echo trans("pre", 'bn'); ?></label>
                            </a>
                            <a class="listinBtn offender_next" value="Next(পরবর্তী)" name="submit" title="Next"
                                id="offender_next">
                                <b><?php echo trans("next", 'en'); ?>
                                    <?php echo trans("next", 'bn'); ?></b>
                            </a>
                            <a id="" class="listinBtn offender_skip"><b>Skip এড়িয়ে যান</b></a>
                        </div>
                        <div class="topnav">
                            <a class="navbar" href="#input-offender-profile">9/13</a>
                        </div>

                        <h3 class="innerPage-head" id="accusedhead">
                            <?php echo trans("accusedhead", 'en'); ?>
                            <br>
                            <?php echo trans("accusedhead", 'bn'); ?>
                        </h3>
                        <?php

                        echo '<table id="tbl_offender_list" class="table table-bordered inner-textfield" style="text-align:center">';
                        echo '<thead><tr>';
                        echo '<td>অভিযুক্তের নাম </td>';
                        echo '<td>অভিযুক্তের বাবার নাম</td>';
                        echo'<td>অভিযুক্তের মায়ের নাম</td>';
                        echo '<td>জাতীয় পরিচয়পত্র নম্বর </td>';
                        echo '<td>জাতীয়তা</td>';
                        echo '<td>মোবাইল নম্বর</td>';
                        echo '<td>বয়স (বছর)</td>';
                        echo '<td>লিঙ্গ </td>';
                        echo '<td>বর্তমান ঠিকানা</td>';
                        echo '<td>স্থায়ী ঠিকানা </td>';
                        echo '<td>অভিযুক্ত অপরাধী কি পূর্বেও একই অপরাধ করেছিলেন?</td>';
                        echo '<td>নোট</td>';
                        echo '</tr></thead>';

                        echo '<tbody><tr>';
                        echo '<td>name</td>';
                        echo '<td>fathers_name</td>';
                        echo'<td>mother_name</td>';
                        echo '<td>nid_number</td>';
                        echo '<td>nationality</td>';
                        echo '<td>mobile_number</td>';
                        echo '<td>nationality</td>';
                        echo '<td>age</td>';
                        echo '<td>sex</td>';
                        echo '<td>present_address</td>';
                        echo '<td>permanent_address</td>';
                        echo '<td>repeated_offender</td>';
                        echo '<td>note</td>';
                        echo '</tr>';

                        echo '</tbody></table>';

                        ?>
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered inner-textfield">
                                    <form role="form" id="commentForm" class="inputs-p10 " method="POST"
                                        action="#input-witness-information" enctype="multipart/form-data">
                                        <tr>
                                        <tr>
                                            <th><?php echo trans("accusedname", 'en'); ?><br>
                                                <?php echo trans("accusedname", 'bn'); ?>
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><input type="text" class="form-control inner-textfield"
                                                    id="offender_name" name="offender_name" value=""
                                                    data-key="offender.name" style="text-transform:capitalize;"
                                                    ></td>
                                        </tr>
                                        <tr>
                                            <th>Accused organization<br>অভিযুক্ত প্রতিষ্ঠান</th>
                                            <td><input type="text" class="form-control inner-textfield"
                                                    id="accused_company" name="accused_company" value=""
                                                    data-key="offender.accused_company" /></td>
                                        </tr>
                                        <tr>
                                            <th>Occupation<br>পেশা</th>
                                            <td><input type="text" class="form-control inner-textfield" id="occupation"
                                                    name="occupation" value="" data-key="offender.occupation" /></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("father", 'en'); ?><br>
                                                <?php echo trans("father", 'bn'); ?>

                                            </th>
                                            <td><input type="text" class="form-control inner-textfield" id="father_name"
                                                    name="father_name" value="" data-key="offender.fathers_name"
                                                    style="text-transform:capitalize;" /></td>
                                        </tr>
                                        <tr>
                                            <th>Accused mother's name<br>
                                                অভিযুক্তের মাতার নাম

                                            </th>
                                            <td><input type="text" class="form-control inner-textfield" id="mother_name"
                                                    name="mother_name" value="" data-key="offender.mother_name"
                                                    style="text-transform:capitalize;" /></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("age", 'en'); ?><sub>(approx)</sub><br>
                                                <?php echo trans("age", 'bn'); ?><sub>(আনুমানিক)</sub>

                                            </th>
                                            <td><input type="number" class="form-control inner-textfield " id="age"
                                                    name="age" value="" data-key="offender.age" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("gender", 'en'); ?><br>
                                                <?php echo trans("gender", 'bn'); ?>
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td>
                                                <div class="grid-container">
                                                    <p>
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="gender1"
                                                                class="accusedHabitualoffender_0" value="Male" id="male"
                                                                data-id="gender1" data-key="offender.sex" >
                                                            <label for="male">
                                                                <?php echo trans("male", 'en'); ?>

                                                                <?php echo trans("male", 'bn'); ?>
                                                            </label><span class="checkmark"></span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="gender1"
                                                                class="accusedHabitualoffender_0" value="Female"
                                                                id="female" data-id="gender1" data-key="offender.sex"
                                                                >
                                                            <label for="female">
                                                                <?php echo trans("female", 'en'); ?>
                                                                <?php echo trans("female", 'bn'); ?>
                                                            </label><span class="checkmark"></span>
                                                        </label>
                                                    </p>
                                                    <!-- <p>&nbsp</p> -->
                                                    <p>
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="gender1"
                                                                class="accusedHabitualoffender_0" value="Others"
                                                                id="others" data-id="gender1" data-key="offender.sex"
                                                                >
                                                            <label for="others">
                                                                Third Gender তৃতীয় লিঙ্গ
                                                                <?php // echo trans("others", 'en'); ?>
                                                                <?php // echo trans("others", 'bn'); ?>
                                                            </label><span class="checkmark"></span>
                                                        </label>
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("address", 'en'); ?><br>
                                                <?php echo trans("address", 'bn'); ?>
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><input type="text" class="form-control inner-textfield" id="addressOne"
                                                    name="addressOne" data-key="offender.present_address"
                                                    style="text-transform:capitalize;" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("pr-address", 'en'); ?><br>
                                                <?php echo trans("pr-address", 'bn'); ?>
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><input type="text" class="form-control inner-textfield" id="addressTwo"
                                                    name="addressTwo" data-key="offender.permanent_address"
                                                    style="text-transform:capitalize;" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("identity", 'en'); ?><br>
                                                <?php echo trans("identity", 'bn'); ?>
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td><select name="nationality" style="height:45px;color:#009472 !important"
                                                    class="form-control inner-textfield" id="nationality"
                                                    data-key="offender.nationality">
                                                    <option value="Bangladeshi">Bangladeshi</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("number", 'en'); ?><br>
                                                <?php echo trans("number", 'bn'); ?>

                                            </th>
                                            <td> <input type="number" class="form-control inner-textfield"
                                                    maxlength="17" oninput="number_length();" minlength="10"  name="nid_number" value="" id="nid_number"
                                                    data-key="offender.nid_number"></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("mobile", 'en'); ?><br>
                                                <?php echo trans("mobile", 'bn'); ?>

                                            </th>
                                            <td> <input type="number" class="form-control inner-textfield"
                                                    maxlength="11" name="mobile_number" value="" id="mobile_number"
                                                    data-key="offender.mobile_number"></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("repeatedoffender", 'en'); ?><br>
                                                <?php echo trans("repeatedoffender", 'bn'); ?>
                                                <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                            </th>
                                            <td>
                                                <div class="grid-container">
                                                    <p>
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="repeated_offender1"
                                                                class="accusedHabitualoffender_0" value="Yes" id="yes"
                                                                data-key="offender.repeated_offender" >
                                                            <label for="yes">
                                                                <?php echo trans("yes", 'en'); ?>
                                                                <?php echo trans("yes", 'bn'); ?>
                                                            </label><span class="checkmark"></span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="repeated_offender1"
                                                                class="accusedHabitualoffender_0" value="No" id="no"
                                                                data-key="offender.repeated_offender" >
                                                            <label for="no">
                                                                <?php echo trans("no", 'en'); ?>
                                                                <?php echo trans("no", 'bn'); ?>
                                                            </label><span class="checkmark"></span>
                                                        </label>
                                                    </p>
                                                    <p class="radioBtnHolder"><label class="radioBtnHolder">
                                                            <input type="radio" name="repeated_offender1"
                                                                class="accusedHabitualoffender_0" value="Unknown"
                                                                id="unknown" data-key="offender.repeated_offender"
                                                                >
                                                            <label for="unknown">
                                                                Unknown অজ্ঞাত
                                                            </label>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="note_show" id="note">
                                            <th><?php echo trans("note", 'en'); ?><br>
                                                <?php echo trans("note", 'bn'); ?></th>
                                            <td><input type="text" class="form-control inner-textfield" name="note"
                                                    id="note" data-key="offender.note" /></td>
                                        </tr>
                                        </tr>
                                    </form>
                                </table>
                                <div class="listinBtn">
                                    <a id="iop_addmore"><label id="addm">
                                            <?php echo trans("addm", 'en'); ?>
                                            <?php echo trans("addm", 'bn'); ?>
                                        </label></a>
                                </div>
                            </div>
                            <div>
                                <a href="#video_file" class="listinBtn pull-left"><label id="pre">
                                        <?php echo trans("pre", 'en'); ?>
                                        <?php echo trans("pre", 'bn'); ?>
                                    </label></a>
                                <a class="listinBtn offender_next" value="Next(পরবর্তী)" name="submit" title="Next"
                                    id="offender_next">
                                    <b><?php echo trans("next", 'en'); ?>
                                        <?php echo trans("next", 'bn'); ?></b>
                                </a>
                                <a id="" class="listinBtn offender_skip"><b>Skip এড়িয়ে যান</b></a>
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