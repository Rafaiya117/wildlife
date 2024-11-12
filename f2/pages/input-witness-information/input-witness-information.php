<!-----------#####################MULTIPLE IMAGE PREVIEW JS#########---->
<div class="content-wrapper" style="min-height: 901px;">
    <section class="container">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="innerPage-box ">
                    <div>
                        <a href="#input-offender-profile" class="listinBtn pull-left">
                            <b><?php echo trans("pre", 'en'); ?>
                                <?php echo trans("pre", 'bn'); ?></b>
                        </a>
                        <a value="Next" class="listinBtn witness_next" id="witness_next">
                            <b><?php echo trans("next", 'en'); ?>
                                <?php echo trans("next", 'bn'); ?></b>
                        </a>
                        <b><input id="" class="listinBtn button1" type="Button" value="Skip এড়িয়ে যান"/></b>
                        </div>
                        <div class="topnav">
                            <a class="navbar" href="#input-witness-information">10/13</a>
                        </div>
                        <h3 class="innerPage-head" id="wittness">
                            <?php echo trans("wittness", 'en'); ?>
                            <br>সাক্ষীগণের বৃত্তান্ত
                        </h3>
                        <?php

                        echo '<table id="tbl_witness_list" class="table table-bordered inner-textfield witness-nav" style="text-align:center">';
                        echo '<thead><tr>';
                        echo '<td>Witness name</td>';
                        echo '<td>Gender</td>';
                        echo '<td>Address</td>';
                        echo '<td>Note</td>';
                        echo '</tr></thead>';

                        echo '<tbody><tr>';
                        echo '<td>name</td>';
                        echo '<td>sex</td>';
                        echo '<td>present_address</td>';
                        echo '<td>note</td>';
                        echo '</tr>';

                        echo '</tbody></table>';

                        ?>
                        <div class="card">
                            <div class="card-body">
                                
                        <table class="table table-bordered inner-textfield">
                        <form id="commentForm" class="inputs-p10 " method="post" action="#input-disposal-information" enctype="multipart/form-data">
                            <tr>
                                <tr>
                                    <th><?php echo trans("witnessname", 'en'); ?>
                                        <br>
                                        <?php echo trans("witnessname", 'bn'); ?>
                                            <span style="height:45px;color:#FF0000 !important">*</span></th>
                                            <td><input type="text" class="form-control inner-textfield" id="name" name="name" value=""  data-key="witness.name" style="text-transform:capitalize;" required ></td>
                                        </tr>
                                        <tr>
                                            <th>Designation/Occupation<br>পদবি/পেশা
                                                <span></span></th>
                                                    <td><input type="text" class="form-control inner-textfield" id="witness_designation" name="witness_designation" value=""  data-key="witness.witness_designation" style="text-transform:capitalize;"/></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("gender", 'en'); ?>
                                                <br>
                                                <?php echo trans("gender", 'bn'); ?>
                                                    <span style="height:45px;color:#FF0000 !important">*</span></th>
                                                    <td>
                                                        <div class="grid-container">
                                                            <p>
                                                                <label class="radioBtnHolder">
                                                                    <input type="radio" name="sex" class="accusedHabitualoffender_0" value="Male" data-id="sex" id="nmale"  data-key="witness.sex" required >
                                                                        <label for="male">
                                                                            <?php echo trans("male", 'en'); ?>
                                                                            <?php echo trans("male", 'bn'); ?>
                                                                        </label><span class="checkmark"></span>
                                                                    </label> 
                                                                </p>
                                                                <p>
                                                                    <label class="radioBtnHolder">
                                                                        <input type="radio" name="sex" class="accusedHabitualoffender_0" value="Female" data-id="sex" id="female" data-key="witness.sex" required >
                                                                            <label for="female">
                                                                                <?php echo trans("female", 'en'); ?>
                                                                                <?php echo trans("female", 'bn'); ?>
                                                                                </label><span class="checkmark"></span>
                                                                            </label>
                                                                                   </p>
                                                                                    <p>
                                                                                       <label class="radioBtnHolder">
                                                                                            <input type="radio" name="sex" class="accusedHabitualoffender_0" value="Third gender" data-id="sex" id="others"  data-key="witness.sex" required >
                                                                                                <label for="others">
                                                                                                    <!-- <?php // echo trans("others", 'en'); ?> -->
                                                                                                    Third gender  
                                                                                                    <?php // echo trans("others", 'bn'); ?>
                                                                                                    তৃতীয় লিঙ্গ
                                                                                                    </label><span class="checkmark"></span>
                                                                                                </label>
                                                                                                </p>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th><?php echo trans("mobile", 'en'); ?><br>
                                                                                        <?php echo trans("mobile", 'bn'); ?></th>
                                                                                        <td><input type="number" class="form-control inner-textfield" maxlength="11" name="mobile_number" value="" oninput="number_length();" id="mobile_number" data-key="witness.mobile_number"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th><?php echo trans("witness-address", 'en'); ?><br>
                                                                                               <?php echo trans("witness-address", 'bn'); ?>
                                                                                                    <span style="height:45px;color:#FF0000 !important">*</span></th>
                                                                                                    <td><input type="text" class="form-control inner-textfield" id="present_address" name="present_address" value=""  data-key="witness.present_address" style="text-transform:capitalize;" required ></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th><?php echo trans("note-2", 'en'); ?><br>
                                                                                            <?php echo trans("note-2", 'bn'); ?></th>
                                                                                            <td><input type="text" class="form-control inner-textfield" id="note"  name="note" value=""  data-key="witness.note"/></td>
                                                                                    </tr>
                                                                                </tr>
                                                                            </form>
                                                                        </table>
                                                                        <div>
                                                                            <a id="iwi_addmore" class="listinBtn">
                                                                                <label id="addm">
                                                                                    <?php echo trans("addm", 'en'); ?>
                                                                                    <?php echo trans("addm", 'bn'); ?></label>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <a href="#input-offender-profile" class="listinBtn pull-left">
                                                                                <b><?php echo trans("pre", 'en'); ?>
                                                                                    <?php echo trans("pre", 'bn'); ?></b>
                                                                            </a>
                                                                            <a value="Next" class="listinBtn witness_next" id="witness_next">
                                                                                <b><?php echo trans("next", 'en'); ?>
                                                                                    <?php echo trans("next", 'bn'); ?></b>
                                                                            </a>
                                                                            <b><input id="" class="listinBtn button1" type="Button" value="Skip এড়িয়ে যান"/></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            <div class="control-sidebar-bg"></div>
                                        </div>