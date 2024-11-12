<div class="content-wrapper" style="min-height: 901px;">
<div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="innerPage-box">
                        <h3 class="innerPage-head">
                           Add Species <br> প্রজাতি যোগ করুন
                        </h3>
                        <form role="form" class="inputs-p10 " id="commentForm" method="post"  enctype="multipart/form-data">
                            <input type="hidden" id="id" value="<%= id %>">
                            <div class="row speciesDetails">
                                <div class="card">
                                    <div class="card-body">
                                    <section class="container" id="select_static_data"></section>
                                   
                                        <div class="form-group col-md-12">
                                            <label class="inner-label ">
                                            Species Name(English) <br> প্রজাতির নাম (ইংরেজি)
                                            </label>
                                            <textarea class="form-control inner-textfield" id="english_name" ><%= english_name %></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="inner-label ">
                                            Species Name(Bangla) <br> প্রজাতির নাম (বাংলা)
                                            </label>
                                            <textarea class="form-control inner-textfield" id="bangla_name"><%= bangla_name %></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                          <div class="col-md-6">
                                          <label class="inner-label ">
                                          Scientific Name <br> বৈজ্ঞানিক নাম
                                            </label>

                                            <i><textarea class="form-control inner-textfield" id="scientific_name"><%= scientific_name %></textarea></i>
                                          </div>
                                          <div class="col-md-6">
                                          <label class="inner-label ">
                                          Alternative Scientific Name <br> বিকল্প বৈজ্ঞানিক নাম
                                            </label>
                                            <i><textarea class="form-control inner-textfield" id="alt_scientific_name"><%= alt_scientific_name %></textarea></i>
                                          </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="inner-label ">
                                                Scientific Reference <br> বৈজ্ঞানিক তথ্যসূত্র
                                            </label>
                                            <textarea class="form-control inner-textfield" id="scientific_ref"><%= scientific_ref  %></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="inner-label ">
                                                Group Name <br> গ্রুপের নাম
                                            </label>
                                            <textarea class="form-control inner-textfield" id="g_name"><%= g_name %></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                          <div class="col-md-6">  
                                            <label class="inner-label ">
                                            Sub-Group Name <br> সাব-গ্রুপের নাম
                                            </label>
                                            <textarea class="form-control inner-textfield" id="Sub_group"><%= Sub_group %></textarea></div>
                                            <div class="col-md-6">  
                                            <label class="inner-label ">
                                                Sub-Group Name (Bangla) <br> সাব গ্রুপের নাম (বাংলা)
                                            </label>
                                            <textarea class="form-control inner-textfield" id="Sub_group_bn"><%= Sub_group_bn %></textarea></div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="inner-label ">
                                                Sub-species <br> উপ-প্রজাতি
                                            </label>
                                          
                                            <i><textarea class="form-control inner-textfield" id="subspecies"><%= subspecies %></textarea></i>

                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="inner-label ">
                                                Schedule <br> তফসিল
                                            </label>
                                            <textarea class="form-control inner-textfield" id="schedule"><%= schedule %></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="inner-label">
                                                IUCN <br> আইইউসিএন
                                            </label>
                                            <textarea class="form-control inner-textfield" id="IUCN" ><%= IUCN %></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="inner-label">
                                                CITES <br> সাইটিস
                                            </label>
                                            <textarea class="form-control inner-textfield" id="CITES" ><%= CITES %></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="inner-label ">
                                                Type <br> ধরণ
                                            </label>
                                            <textarea class="form-control inner-textfield" id="type"><%= type %></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="inner-label ">
                                                Trade for <br> ট্রেড ফর
                                            </label>
                                            <textarea class="form-control inner-textfield" id="trade_for"><%= trade_for %></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!--btn-->
                            <!-- <div class="row"> -->
                                <a id="save" value="" class="listinBtn pull-left"><b>Save সংরক্ষণ করুন</b></a>
                                <a class="listinBtn" onclick="window.history.go(-1); return false;" style="cursor: pointer;"><b><?php echo trans("back", 'en'); ?>
                                    <?php echo trans("back", 'bn'); ?></b></a>
                            <!-- </div> -->
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