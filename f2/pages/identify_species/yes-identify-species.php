<div class="content-wrapper" style="min-height: 901px;">
    <section class="container">
        <div class="box-body">
            <div class="row" style="height:600px;">
                <div class="col-md-12">
                    <div class="innerPage-box">
                        <h3 class="innerPage-head">
                            <?php echo trans("head", 'en'); ?>
                            <br>
                            <?php echo trans("head", 'bn'); ?>
                            <!-- <input readonly placeholder="case no" /> -->
                        </h3>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-12" id="inner-label">
                                        <label class="inner-label">
                                            <?php echo trans("innerlabel", 'en'); ?>
                                            <br>
                                            <?php echo trans("innerlabel", 'bn'); ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="row dropdown">
                                    <div class="form-group col-md-12 ">
                                        <select class="form-control inner-textfield" id="edit_species"
                                            name="edit_species" data-key="last_selected_species.species_id" required>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-6 text-center p-0">
                                    <b><a class="listinBtn" id="yes_identify_species_next">Next পরবর্তী</a></b>
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