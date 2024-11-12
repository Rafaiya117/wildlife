<div class="content-wrapper" style="min-height: 901px;">
<div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="innerPage-box">
                        <h3 class="innerPage-head">
                           Law-Section <br> আইন-ধারা
                        </h3>
                        <form role="form" class="inputs-p10 " id="commentForm" method="post"  enctype="multipart/form-data">
                            <input type="hidden" id="id" value="<%= id %>">
                            <div class="row speciesDetails">
                                <div class="card">
                                    <div class="card-body">
                                    <section class="container" id="law_data_edit"></section>
                                   
                                        <div class="form-group col-md-12">
                                            <label class="inner-label ">
                                                Law Id <br> 
                                            </label>
                                                <textarea class="form-control inner-textfield" id="law_id" ><%= law_id %></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="inner-label ">
                                                Law Name <br> 
                                            </label>
                                                <textarea class="form-control inner-textfield" id="law_name"><%= law_name %></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="col-md-6">
                                                <label class="inner-label ">
                                                    Section <br> 
                                                </label>
                                                    <textarea class="form-control inner-textfield" id="Section"><%= Section %></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="inner-label ">
                                                    Sub-section <br>
                                                </label>
                                                    <textarea class="form-control inner-textfield" id="Sub_section"><%= Sub_section %></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="inner-label ">
                                                Law details <br> 
                                            </label>
                                                <textarea class="form-control inner-textfield" id="law_details"><%= law_details %></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--btn-->
                            <a id="save_law" value="" class="listinBtn pull-left"><b>Save সংরক্ষণ করুন</b></a>
                                <a class="listinBtn" onclick="window.history.go(-1); return false;" style="cursor: pointer;"><b><?php echo trans("back", 'en'); ?>
                                    <?php echo trans("back", 'bn'); ?></b></a>
                                </form>
                            </div>
                        </div>
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