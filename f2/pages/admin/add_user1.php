<!-----------#####################MULTIPLE IMAGE PREVIEW JS#########---->
<div class="content-wrapper" style="min-height: 901px;">
    
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="innerPage-box">
                        <h3 class="innerPage-head" id="wittness">
                            Add New User <br> নতুন ইউজার যোগ করুন
                        </h3>
                        <div id="commentForm" class="inputs-p10 " method="post"  enctype="multipart/form-data">
                            <div class="form-row">
                                <!-- FIRST SECTION CODE EXECUTE WITHOUT SESSION---------->
                                <div class="input_fields_wrap">
                                   <div class="card">
                                    <div class="card-body">
                                    <section class="container" id="add_select_user"></section>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="">
                                          Name <br> নাম
                                        </label>
                                        <input type="text" class="form-control inner-textfield" id="name" name="name" value="<%= name %>" />
                                    </div>
                                    <div class="form-group col-md-12">
                                                    <p style="margin:0 0 5px">
                                                        <i class="" aria-hidden="true"></i>
                                                        <label class="inner-label">
                                                         Role <br> ভূমিকা<span style="height:45px;color:#FF0000 !important">*</span></label>
                                                    </p>
                                                    <select name="role" style="height:45px;color:#009472 !important" class="form-control inner-textfield" required id="role">
                                                    <option value=""></option>
                                                    <option value="100">Admin</option>
                                                    <option value="80">Organization Admin</option>
                                                    <option value="60">System Admin</option>
                                                    <option value="1">Data entry</option>
                                                    </select>
                                                </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="">
                                         Agency <br> সংগঠন
                                        </label>
                                        <input type="text" class="form-control inner-textfield" id="organization" required="required" name="organization" value="<%= organization %>" />
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="">
                                        Division <br> বিভাগ
                                        </label>
                                        <input id="division_id" required name="division_id"  class="form-control inner-textfield " value="<%= division_id %>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="">
                                          Designation <br> পদবি
                                        </label>
                                        <input type="text" class="form-control inner-textfield" id="designation" name="designation" value="<%= designation %>" />
                                    </div>
                                       <div class="form-group col-md-12">
                                        <label class="inner-label required" id="">
                                          Email <br> ই-মেইল
                                        </label>
                                        <input type="email" class="form-control inner-textfield" id="email" name="email" value="<%= email %>" />
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="inner-label required" id="">
                                           Phone Number <br> ফোন নম্বর
                                        </label>
                                        <input type="number" class="form-control inner-textfield" id="phone" required name="phone" value="<%= phone %>" />
                                    </div>
                                      <div class="form-group col-md-12">
                                        <label class="inner-label required" id="">
                                           Password <br> পাসওয়ার্ড
                                        </label>
                                        <input type="password" class="form-control inner-textfield" id="password" required name="password" value="" />
                                    </div>
                                    <!-- <div class="form-group col-md-12">
                                        <label class="inner-label required" id="">
                                          Confirm Password
                                        </label>
                                        <textarea type="password" class="form-control inner-textfield" id="re_password" required name="re_password" value=""></textarea>
                                    </div> -->
                                   
                                </div>
                            </div>
                            <!-- <div class="row">
                        <a href="" id="" value="" class="listinBtn">Save</a>
                    </div> -->
                            <div class="form-group col-md-12">
                                <button class="listinBtn" id="save_user">
                                    <b>Registration  রেজিস্ট্রেশন</b>
                                </button>
                                <a class="listinBtn pull-left" onclick="window.history.go(-1); return false;" style="cursor: pointer;"><b><?php echo trans("back", 'en'); ?>
                                    <?php echo trans("back", 'bn'); ?></b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

</div>

<div class="control-sidebar-bg"></div>
</div>