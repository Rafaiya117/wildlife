<!-----------#####################MULTIPLE IMAGE PREVIEW JS#########---->
<div class="content-wrapper" style="min-height: 901px;">
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <div class="innerPage-box col-md-6">
                    <h3 class="innerPage-head" id="wittness">Edit User <br>এডিট ইউজার </h3>
                        <div class="form-row" id="my_form">
                            <input type=hidden id="id" value="<%= id %>" />
                            <!-- FIRST SECTION CODE EXECUTE WITHOUT SESSION---------->
                            <div class="input_fields_wrap">
                                <div class="card">
                                    <div class="card-body">
                                        <section class="container" id="edit_user_data"></section>
                                        <div class="form-group col-md-12">
                                            <label class="inner-label required" id="">
                                            Name <br> নাম
                                            </label>
                                            <input type="text" class="form-control inner-textfield" id="name" name="name" value="<%= name %>" /><br>
                                            <input type="hidden" class="form-control inner-textfield" id="account_active" name="account_active" value="<%= account_active %>" /><br>
                                            <input type="hidden" class="form-control inner-textfield" id="status" name="status" value="<%= status %>" />
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                                    <p style="margin:0 0 5px">
                                                        <i class="" aria-hidden="true"></i>
                                                        <label class="inner-label">
                                                        Role <br> ভূমিকা<span style="height:45px;color:#FF0000 !important">*</span></label>
                                                    </p>
                                                    <select name="role" style="height:45px;color:#009472 !important" class="form-control inner-textfield" required id="role">
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
                                            <label class="inner-label" id="">
                                            Password <br> পাসওয়ার্ড
                                            </label>
                                            <input type="password" class="form-control inner-textfield" id="password"  name="password" value="" />
                                        </div>
                                        <div class="form-group col-md-12">
                                        <label class="inner-label">Click to activate or deactivate<br>এক্টিভেট বা ডিএক্টিভেট করতে ক্লিক করুন</label>
                                        <a id="change_status" type="button" class="btn btn-info" style="font-size: 18px;"><b><%= status %></b></a>
                                    </div>

                                    </div>
                                </div>
                                <!-- <div class="row">
                        <a href="" id="" value="" class="listinBtn">Save</a>
                    </div> -->
                            </div>
                            <div class="form-group col-md-12">
                                <a class="listinBtn" id="save_user_data">
                                    <b>Edit এডিট</b>
                                </a>
                                <a class="listinBtn pull-left" onclick="window.history.go(-1); return false;" style="cursor: pointer;"><b><?php echo trans("back", 'en'); ?>
                                    <?php echo trans("back", 'bn'); ?></b></a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<div class="control-sidebar-bg"></div>
</div>