<!-----------#####################MULTIPLE IMAGE PREVIEW JS#########---->
<div class="content-wrapper">
    <section class="container">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="innerPage-box">
                    <div>
                        <a href="#review-section" class="listinBtn pull-left"><label id="pre">
                            <?php echo trans("pre", 'en'); ?>
                                <?php echo trans("pre", 'bn'); ?></label></a>
                                    <a name="submit"  class="listinBtn officer_next" id="officer_next">
                                        <b><?php echo trans("next", 'en'); ?>
                                            <?php echo trans("next", 'bn'); ?></b></a></div>
                                            <div class="topnav">
                                                <a class="navbar" href="#input-officer-information">4/13</a></div>
                                                <h3 class="innerPage-head" id="officerhead">
                                                    <?php echo trans("officerhead", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("officerhead", 'bn'); ?>
                                                </h3>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <table class="table table-bordered inner-textfield">
                                                            <form id="commentForm" class="inputs-p10 " method="post" action="#input-offender-profile" enctype="multipart/form-data">
                                                                <tr>
                                                                    <tr>
                                                <th><?php echo trans("name_org", 'en'); ?><br>
                                                <?php echo trans("name_org", 'bn'); ?><span style="height:45px;color:#FF0000 !important">*</span></th>
                                                <td><select type="text" class=" form-control inner-textfield" id="organization" required name="organization" value="" data-key="investigation_officer.organization">
                                            <option></option>
                                            <!-- <option>Coast Guard</option>
                                            <option>Police</option>
                                            <option>Forest Department</option>
                                            <option>Department of Fisheries</option>
                                            <option>Border Guard</option>
                                            <option>Customs</option>
                                            <option>Navy</option>
                                            <option>Customs Intelligence & Investigation Directorate</option> -->
                                            </select></td>
                                            </tr>
                                            <tr>
                                                <th><?php echo trans("officername", 'en'); ?><br>
                                                    <?php echo trans("officername", 'bn'); ?><span style="height:45px;color:#FF0000 !important">*</span></th>
                                                    <td><input type="text" class=" form-control inner-textfield" id="officer_name" required name="officer_name" value="" data-key="investigation_officer.officer_name" style="text-transform:capitalize;"/></td>
                                            </tr>
                                            <tr>
                                                <th><?php echo trans("officerdesignation", 'en'); ?><br>
                                                    <?php echo trans("officerdesignation", 'bn'); ?><span style="height:45px;color:#FF0000 !important">*</span></th>
                                                    <td> <select class=" form-control inner-textfield" id="officer_designation" required name="officer_designation" value="" data-key="investigation_officer.officer_designation">
                                                        <option></option>
                                                </select>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <th>Rank of the detecting officer<br>উদ্ঘাটনকারী কর্মকর্তার পদ</th>
                                                    <td> <input type="text" class=" form-control inner-textfield" id="officer_rank"  name="officer_rank" value="" data-key="investigation_officer.rank"/></td>
                                            </tr>
                                            <tr>
                                                <th><?php echo trans("mobile", 'en'); ?><br>
                                                    <?php echo trans("mobile", 'bn'); ?><span style="height:45px;color:#FF0000 !important">*</span></th>
                                                    <td> <input type="number" class="form-control inner-textfield"  maxlength="11" required name="mobile_number" value="" id="mobile_number" data-key="investigation_officer.mobile_number" oninput="number_length();"/></td>
                                            </tr>
                                            <tr>
                                                <th><?php echo trans("officerposting", 'en'); ?><br>
                                                    <?php echo trans("officerposting", 'bn'); ?><span style="height:45px;color:#FF0000 !important">*</span></th>
                                                    <td> <input type="text" class="form-control inner-textfield" id="officer_posting" required name="officer_posting" value="" data-key="investigation_officer.posting" style="text-transform:capitalize;"/></td>
                                            </tr>
                                        </tr>
                                        </form>
                                </table>
                                <div>
                                    <a href="#review-section" class="listinBtn pull-left"><label id="pre">
                                        <?php echo trans("pre", 'en'); ?>
                                            <?php echo trans("pre", 'bn'); ?>
                                    </label></a>
                                    <a name="submit"  class="listinBtn officer_next" id="officer_next">
                                        <b><?php echo trans("next", 'en'); ?>
                                            <?php echo trans("next", 'bn'); ?></b></a>
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