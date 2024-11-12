<!-----------#####################MULTIPLE IMAGE PREVIEW JS#########---->

<div class="content-wrapper" style="min-height: 901px;">
    <section class="container">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="innerPage-box">
                        <div>
                            <a href="#input-witness-information" class="listinBtn pull-left"> <label id="pre">
                                    <?php echo trans("pre", 'en'); ?>
                                    <?php echo trans("pre", 'bn'); ?></label>
                            </a>
                            <a id="sample_next" class="listinBtn sample_next" value="Next(পরবর্তী)" name="submit"
                                title="Next"><label id="next">
                                    <?php echo trans("next", 'en'); ?>
                                    <?php echo trans("next", 'bn'); ?></label>
                            </a>
                            <a id="" class="listinBtn skiped"><b>Skip এড়িয়ে যান</b></a>
                        </div>
                        <div class="topnav">
                            <a class="navbar" href="#input-sample-collection">11/13</a>
                        </div>
                        <h3 class="innerPage-head" id="sampleinfo">
                            <?php echo trans("sampleinfo", 'en'); ?><br>
                            <?php echo trans("sampleinfo", 'bn'); ?>
                        </h3>
                        <?php

                        echo '<table id="tbl_sample_list" class="table table-bordered inner-textfield" style="text-align:center">';
                        echo '<thead><tr>';
                        echo '<td>প্রজাতির নাম</td>';
                        echo '<td>নমুনা সংগ্রহের তারিখ</td>';
                        echo '<td>নমুনা কোড নম্বর </td>';
                        echo '<td>নমুনা কোথায় পাঠানো হয়েছে?</td>';
                        echo '<td>ফরেনসিক প্রতিবেদন তৈরি করা হয়েছে কী না?</td>';
                        echo '<td>ফরেনসিক প্রতিবেদন তৈরির তারিখ</td>';
                        echo '</tr></thead>';

                        echo '<tbody><tr>';
                        echo '<td>species_names</td>';
                        echo '<td>collection_date</td>';
                        echo '<td>sample_code</td>';
                        echo '<td>collection_place</td>';
                        echo '<td>optradios</td>';
                        echo '<td>report_date</td>';
                        echo '</tr>';

                        echo '</tbody></table>';

                        ?>
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered inner-textfield">
                                    <form role="form" id="commentForm" class="inputs-p10 " method="POST"
                                        action="#other-details" enctype="multipart/form-data">
                                        <tr>
                                        <tr>
                                            <th><?php echo trans("speciesname", 'en'); ?><br>
                                                <?php echo trans("speciesname", 'bn'); ?>
                                                <span></span>
                                            </th>
                                            <td><select id="species_name"
                                                    class="form-control inner-textfield  ui-autocomplete-input"
                                                    name="species_name" value="" autocomplete="off"
                                                    data-key="sample.species_name"></select>
                                                <option></option>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th> Sample's name<br> নমুনার নাম

                                                <span></span>
                                            </th>
                                            <td><input type="text" id="sample_code"
                                                    class="form-control inner-textfield  ui-autocomplete-input"
                                                    name="sample_code" value="" autocomplete="off"
                                                    data-key="sample.sample_name"></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("coll-date", 'en'); ?><br>
                                                <?php echo trans("coll-date", 'bn'); ?>
                                                <span></span>
                                            </th>
                                            <td><input type="date" class="form-control inner-textfield"
                                                    id="date_collection" name="collection_date" value=""
                                                    data-key="sample.date_collection" />
                                                <!-- <i class="fa fa-calendar datepick" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i> -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("code", 'en'); ?><br>
                                                <?php echo trans("code", 'bn'); ?>
                                                <span></span>
                                            </th>
                                            <td><input type="text" id="sample_code"
                                                    class="form-control inner-textfield  ui-autocomplete-input"
                                                    name="sample_code" value="" autocomplete="off"
                                                    data-key="sample.code"></td>
                                        </tr>
                                        <tr>
                                            <th>Sample sending date <br> নমুনা প্রেরণের তারিখ
                                                <span></span>
                                            </th>
                                            <td><input type="date" class="form-control inner-textfield"
                                                    id="sending_date" name="sending_date" value=""
                                                    data-key="sample.sending_date" />
                                                <!-- <i class="fa fa-calendar datepick" aria-hidden="true" style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i> -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("place", 'en'); ?><br>
                                                <?php echo trans("place", 'bn'); ?>
                                                <span></span>
                                            </th>
                                            <td><input type="text" id="collection_place"
                                                    class="form-control inner-textfield  ui-autocomplete-input"
                                                    name="collection_place" value="" autocomplete="off"
                                                    data-key="sample.collection_place"></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("forensic-rp", 'en'); ?><br>
                                                <?php echo trans("forensic-rp", 'bn'); ?>
                                                <span></span>
                                            </th>
                                            <td>
                                                <div class="grid-container">
                                                    <p>
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="optradio" data-id="optradio"
                                                                class="part" value="Yes" id="yes"
                                                                data-key="sample.forensic_report_generated" />
                                                            <label for="yes">
                                                                <?php echo trans("yes", 'en'); ?>
                                                                <?php echo trans("yes", 'bn'); ?>
                                                            </label><span class="checkmark"></span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label class="radioBtnHolder">
                                                            <input type="radio" name="optradio" data-id="optradio"
                                                                class="whole" value="No" id="no"
                                                                data-key="sample.forensic_report_generated" />
                                                            <label for="no">
                                                                <?php echo trans("no", 'en'); ?>
                                                                <?php echo trans("no", 'bn'); ?>
                                                            </label><span class="checkmark"></span>
                                                        </label>
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="div_entrega_outro">
                                            <th><?php echo trans("rpdate", 'en'); ?><br>
                                                <?php echo trans("rpdate", 'bn'); ?>
                                                <span></span>
                                            </th>
                                            <td><input type="date" id="report_date"
                                                    class="form-control inner-textfield  ui-autocomplete-input"
                                                    name="report_date" value="" autocomplete="off"
                                                    data-key="sample.forensic_report_date"></td>
                                        </tr>
                                        </tr>
                                    </form>
                                </table>
                                <div class="listinBtn">
                                    <a id="isc_addmore"><label id="addm">
                                            <?php echo trans("addm", 'en'); ?>
                                            <?php echo trans("addm", 'bn'); ?>
                                        </label></a>
                                </div>
                            </div>
                            <div>
                                <a href="#input-witness-information" class="listinBtn pull-left"> <label id="pre">
                                        <?php echo trans("pre", 'en'); ?>
                                        <?php echo trans("pre", 'bn'); ?>
                                    </label></a>
                                <a id="sample_next" class="listinBtn sample_next" value="Next(পরবর্তী)" name="submit"
                                    title="Next"><label id="next">
                                        <?php echo trans("next", 'en'); ?>
                                        <?php echo trans("next", 'bn'); ?>
                                    </label></a>
                                <a id="" class="listinBtn skiped"><b>Skip এড়িয়ে যান</b></a>
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