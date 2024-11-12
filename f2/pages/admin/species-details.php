<div class="content-wrapper" style="min-height: 901px;">
<div class="container">
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <div class="innerPage-box">
                    <h3 class="innerPage-head" id="speciesdetails">
                        <?php echo trans("speciesdetails", 'en'); ?>
                        <br>
                        <?php echo trans("speciesdetails", 'bn'); ?>
                    </h3>
                    <form class="inputs-p10" id="commentForm" method="Post"  enctype="multipart/form-data" autocomplete="off">
                        <div class="form-group col-md-12 seizedarticlesupload">
                        <a class="btn btn-primary pull-left" href="#add_new_species" style=" font-size:18px;"><i class="fas fa-plus"></i>Add species  প্রজাতি যোগ করুন</a>
                            <label class="inner-label" id="in6">
                                <h1 class="inner-pageHead">Species <br> প্রজাতি</h1>
                            </label>
                            <select class="form-control inner-textfield" id="identify" name="edit" value="">
                            </select>
                            <a class="listinBtn" id="find_species">Edit species  এডিট স্পিসিস</a>
                            <a class="listinBtn pull-left" onclick="window.history.go(-1); return false;" style="cursor: pointer;"><b><?php echo trans("back", 'en'); ?>
                                    <?php echo trans("back", 'bn'); ?></b></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</section>
</div>

<div class="control-sidebar-bg"></div>