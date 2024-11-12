<!-----------#####################MULTIPLE IMAGE PREVIEW JS#########---->
<div class="content-wrapper" style="min-height: 901px;">
    <section class="container">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="innerPage-box">
                        <div>
                            <a href="#input-disposal-information" class="listinBtn pull-left"><label id="pre">
                                    <?php echo trans("pre", 'en'); ?>
                                    <?php echo trans("pre", 'bn'); ?></label></a>
                            <a class="listinBtn other_next" value="Next" id="other_next">
                                <b><?php echo trans("next", 'en'); ?>
                                    <?php echo trans("next", 'bn'); ?></b>
                                <a id="" class="listinBtn skip"><b>Skip এড়িয়ে যান</b></a>
                            </a>
                        </div>
                        <div class="topnav">
                            <a class="navbar" href="#other-details">13/13</a>
                        </div>

                        <h3 class="innerPage-head" id="other">
                            Other Information
                            <br>অন্যান্য তথ্য
                        </h3>
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered inner-textfield">

                                    <form role="form" id="commentForm" class="inputs-p10 " method="POST"
                                        action="#review-section-details" enctype="multipart/form-data">
                                        <tr>
                                        <tr>
                                            <th><?php echo trans("in1", 'en'); ?><br>
                                                <?php echo trans("in1", 'bn'); ?></th>
                                            <td>
                                                <div class="grid-container">
                                                    <p>
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox" name="discovering_method"
                                                                class="seizedAnimal" data-id="discovering_method"
                                                                value="Scanning স্ক্যানিং" id="scan"
                                                                data-key="others_info.discovering_method" />
                                                            <label id="scan" for="scan">
                                                                <?php echo trans("scan", 'en'); ?><br>
                                                                <?php echo trans("scan", 'bn'); ?>
                                                            </label> <a href='#'>&nbsp;</a><span
                                                                class="checkbox-checkmark"></span>

                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox" name="discovering_method"
                                                                class="seizedAnimal" data-id="discovering_method"
                                                                value="Risk assessment ঝুঁকি যাচাইকরণ" id="risk"
                                                                data-key="others_info.discovering_method" />
                                                            <label id="risk" for="risk">
                                                                <?php echo trans("risk", 'en'); ?><br>
                                                                <?php echo trans("risk", 'bn'); ?>
                                                            </label> <a href='#'>&nbsp;</a><span
                                                                class="checkbox-checkmark"></span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox" name="discovering_method"
                                                                class="seizedAnimal" data-id="discovering_method"
                                                                value="Random Check দৈব তল্লাশি" id="random"
                                                                data-key="others_info.discovering_method" />
                                                            <label id="random" for="random">
                                                                <?php echo trans("random", 'en'); ?><br>দৈব তল্লাশি
                                                            </label><a href='#'>&nbsp;</a><span
                                                                class="checkbox-checkmark"></span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox" name="discovering_method"
                                                                class="seizedAnimal" data-id="discovering_method"
                                                                value="Sniffer Dog কুকুর তল্লাশি" id="dog"
                                                                data-key="others_info.discovering_method" />
                                                            <label id="dog" for="dog">
                                                                <?php echo trans("dog", 'en'); ?><br>
                                                                <?php echo trans("dog", 'bn'); ?></label><a href='#'
                                                                data-toggle="modal" data-target="">&nbsp;</a><span
                                                                class="checkbox-checkmark"></span>

                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox" name="discovering_method"
                                                                class="seizedAnimal" data-id="discovering_method"
                                                                value="Third-party information তৃতীয় পক্ষ থেকে প্রাপ্ত তথ্য"
                                                                id="thirdparty"
                                                                data-key="others_info.discovering_method" />
                                                            <label id="thirdparty" for="thirdparty">
                                                                <?php echo trans("thirdparty", 'en'); ?><br>
                                                                <?php echo trans("thirdparty", 'bn'); ?></label><a
                                                                href='#' data-toggle="modal"
                                                                data-target="">&nbsp;</a><span
                                                                class="checkbox-checkmark"></span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox" name="discovering_method"
                                                                class="seizedAnimal" data-id="discovering_method"
                                                                value="Physical information সরাসরি পরীক্ষণ" id="phy"
                                                                data-key="others_info.discovering_method" />
                                                            <label id="phy" for="phy">
                                                                <?php echo trans("phy", 'en'); ?><br>
                                                                <?php echo trans("phy", 'bn'); ?></label> <a href='#'
                                                                data-toggle="modal" data-target="">&nbsp;</a><span
                                                                class="checkbox-checkmark"></span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox" name="discovering_method"
                                                                class="seizedAnimal" data-id="discovering_method"
                                                                value="Patrol টহল" id="patrol"
                                                                data-key="others_info.discovering_method" />
                                                            <label id="patrol" for="patrol">
                                                                Patrol<br>টহল</label> <a href='#' data-toggle="modal"
                                                                data-target="">&nbsp;</a><span
                                                                class="checkbox-checkmark"></span>
                                                        </label>
                                                    </p>

                                                    <p>
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox" name="discovering_method"
                                                                class="Animal" data-id="discovering_method"
                                                                value="Others-specify অন্যান্য (নির্দিষ্ট করে লিখুন)"
                                                                id="othersp"
                                                                data-key="others_info.discovering_method" />



                                                            <label id="othersp" for="othersp">

                                                                <?php echo trans("otherNote", 'en'); ?><br>
                                                                <?php echo trans("otherNote", 'bn'); ?>
                                                            </label><a href='#' data-toggle="modal"
                                                                data-target="">&nbsp;</a><span
                                                                class="checkbox-checkmark"></span>

                                                        </label>
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="other_specify_hide" style="background-color:yellow">
                                            <th><?php echo trans("otherNote", 'en'); ?><br>
                                                <?php echo trans("otherNote", 'bn'); ?></th>
                                            <td><input type="text" id="note1" name="" placeholder=""
                                                    class="form-control inner-textfield"
                                                    data-key="others_info.discovering_method_note" /></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("in2", 'en'); ?><br>
                                                <?php echo trans("in2", 'bn'); ?></th>
                                            <td>
                                                <div class="grid-container">
                                                    <p>
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox" name="mode_of_transport" class=""
                                                                data-id="mode_of_transport" value="Maritime নৌপথ"
                                                                id="maritime"
                                                                data-key="others_info.mode_of_transport" />
                                                            <label id="maritime" for="maritime">
                                                                <?php echo trans("maritime", 'en'); ?><br>
                                                                <?php echo trans("maritime", 'bn'); ?></label><a
                                                                href='#' data-toggle="modal"
                                                                data-target="">&nbsp;</a><span
                                                                class="checkbox-checkmark"></span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox" name="mode_of_transport" class=""
                                                                data-id="mode_of_transport" value="Rail রেলপথ" id="rail"
                                                                data-key="others_info.mode_of_transport" />
                                                            <label id="rail" for="rail">
                                                                <?php echo trans("rail", 'en'); ?><br>
                                                                <?php echo trans("rail", 'bn'); ?> </label><a href='#'
                                                                data-toggle="modal" data-target="">&nbsp;</a><span
                                                                class="checkbox-checkmark"></span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox" name="mode_of_transport" class=""
                                                                data-id="mode_of_transport" value="Road সড়কপথ"
                                                                id="road" data-key="others_info.mode_of_transport" />
                                                            <label id="road" for="road">
                                                                <?php echo trans("road", 'en'); ?><br>
                                                                <?php echo trans("road", 'bn'); ?></label><a href='#'
                                                                data-toggle="modal" data-target="">&nbsp;</a><span
                                                                class="checkbox-checkmark"></span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox" name="mode_of_transport" class=""
                                                                data-id="mode_of_transport" value="Air আকাশপথ" id="air"
                                                                data-key="others_info.mode_of_transport" />
                                                            <label id="air" for="air">
                                                                <?php echo trans("air", 'en'); ?><br>
                                                                <?php echo trans("air", 'bn'); ?></label><a href='#'
                                                                data-toggle="modal" data-target="">&nbsp;</a><span
                                                                class="checkbox-checkmark"></span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox" name="mode_of_transport" class=""
                                                                data-id="mode_of_transport" value="Postal Service ডাকযোগে" id="service"
                                                                data-key="others_info.mode_of_transport" />
                                                            <label id="service" for="service">Postal Service <br> ডাকযোগে</label><a href='#'
                                                                data-toggle="modal" data-target="">&nbsp;</a><span
                                                                class="checkbox-checkmark"></span>
                                                        </label>
                                                    </p>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("in3", 'en'); ?><br>
                                                <?php echo trans("in3", 'bn'); ?></th>
                                            <td>
                                                <div class="grid-container">
                                                    <p>
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox" name="concealment_method" class=""
                                                                data-id="concealment_method"
                                                                value="No concelment অ-লুকায়িত" id="nocon"
                                                                data-key="others_info.concealment_method" />
                                                            <label id="nocon" for="nocon">
                                                                <?php echo trans("nocon", 'en'); ?><br>
                                                                <?php echo trans("nocon", 'bn'); ?></label> <a href='#'
                                                                data-toggle="modal" data-target="">&nbsp;</a><span
                                                                class="checkbox-checkmark"></span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox" name="concealment_method" class=""
                                                                data-id="concealment_method"
                                                                value="Postal parcel পোস্টাল পার্সেল" id="postal"
                                                                data-key="others_info.concealment_method" />
                                                            <label id="postal" for="postal">
                                                                <?php echo trans("postal", 'en'); ?><br>
                                                                <?php echo trans("postal", 'bn'); ?></label> <a href='#'
                                                                data-toggle="modal" data-target="">&nbsp;</a><span
                                                                class="checkbox-checkmark"></span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox" name="concealment_method" class=""
                                                                data-id="concealment_method" value="Luggage লাগেজে বহন"
                                                                id="luggage"
                                                                data-key="others_info.concealment_method" />
                                                            <label id="luggage" for="luggage">
                                                                <?php echo trans("luggage", 'en'); ?><br>
                                                                <?php echo trans("luggage", 'bn'); ?></label><a href='#'
                                                                data-toggle="modal" data-target="">&nbsp;</a><span
                                                                class="checkbox-checkmark"></span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox" name="concealment_method" class=""
                                                                data-id="concealment_method"
                                                                value="Carry on body দেহে ধারণ" id="cob"
                                                                data-key="others_info.concealment_method" />
                                                            <label id="cob" for="cob">
                                                                <?php echo trans("cob", 'en'); ?><br>
                                                                <?php echo trans("cob", 'bn'); ?></label><a href='#'
                                                                data-toggle="modal" data-target="">&nbsp;</a><span
                                                                class="checkbox-checkmark"></span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox" name="discovering_method"
                                                                class="seizedAnimal" data-id="discovering_method"
                                                                value="Cage খাঁচা" id="cage"
                                                                data-key="others_info.discovering_method" />
                                                            <label id="cage" for="patrol">
                                                                Cage<br>খাঁচা</label> <a href='#' data-toggle="modal"
                                                                data-target="">&nbsp;</a><span
                                                                class="checkbox-checkmark"></span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label class="checkbox-holder">
                                                            <input type="checkbox" name="concealment_method" class=""
                                                                data-id="concealment_method"
                                                                value="Other specify অন্যান্য (নির্দিষ্ট করে লিখুন)"
                                                                id="os" data-key="others_info.concealment_method" />
                                                            <label id="os" for="os">
                                                                <?php echo trans("os", 'en'); ?><br>
                                                                <?php echo trans("os", 'bn'); ?>
                                                            </label> <a href='#' data-toggle="modal"
                                                                data-target="">&nbsp;</a><span
                                                                class="checkbox-checkmark"></span>
                                                        </label>
                                                    </p>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="note2_hide" style="background-color:yellow">
                                            <th><?php echo trans("otherNote", 'en'); ?><br>
                                                <?php echo trans("otherNote", 'bn'); ?></th>
                                            <td><input type="text" id="note2" name="" placeholder=""
                                                    class="form-control inner-textfield"
                                                    data-key="others_info.concealment_method_note" /></td>
                                        </tr>
                                        <tr>
                                            <th>

                                                <?php echo trans("in4", 'en'); ?><br>
                                                <?php echo trans("in4", 'bn'); ?>
                                            </th>
                                            <td><select class="form-control inner-textfield" id="alleged_country"
                                                    name="alleged_country" data-key="others_info.alleged_country">

                                                </select></td>
                                        </tr>
                                        <tr>

                                            <th>

                                                <?php echo trans("in5", 'en'); ?><br>
                                                <?php echo trans("in5", 'bn'); ?>
                                            </th>
                                            <td><select class="form-control inner-textfield" id="transition_country"
                                                    name="transition_country" data-key="others_info.transition_country">

                                                </select></td>
                                        </tr>
                                        <tr>
                                            <th>

                                                <?php echo trans("in6", 'en'); ?><br>
                                                <?php echo trans("in6", 'bn'); ?>
                                            </th>
                                            <td><select class="form-control inner-textfield" id="destination_country"
                                                    name="destination_country"
                                                    data-key="others_info.destination_contry">

                                                </select></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("in7", 'en'); ?><br>
                                                <?php echo trans("in7", 'bn'); ?><span class="requiredstar"></span></th>
                                            <td><select name="reseason" style="height:45px;color:#009472 !important"
                                                    class="form-control inner-textfield" id="reseason"
                                                    data-key="others_info.reason_for_seizure">
                                                    <option value=""></option>
                                                    <option value="No CITES permit"><label id="ncp">
                                                            <?php echo trans("ncp", 'en'); ?><br>
                                                            <?php echo trans("ncp", 'bn'); ?>
                                                        </label></option>
                                                    <option value="Fake CITES permit"><label id="fcp">
                                                            <?php echo trans("fcp", 'en'); ?><br>
                                                            <?php echo trans("fcp", 'bn'); ?>
                                                        </label></option>
                                                    <option value="Absence of No Objection Certificate (NOC)"><label
                                                            id="noc">
                                                            <?php echo trans("noc", 'en'); ?>
                                                            
                                                            <?php echo trans("noc", 'bn'); ?></label></option>
                                                    <option value="Fake NOC"><label id="fnoc">
                                                            <?php echo trans("fnoc", 'en'); ?><br>
                                                            <?php echo trans("fnoc", 'bn'); ?></label></option>
                                                    <option value="Undecleared/Misdecleared"><label id="um">
                                                            <?php echo trans("um", 'en'); ?><br>
                                                            <?php echo trans("um", 'bn'); ?></label></option>
                                                    <option value="Illegal entry"><label id="ie">
                                                            <?php echo trans("ie", 'en'); ?><br>
                                                            <?php echo trans("ie", 'bn'); ?></label></option>

                                                    <option value="Expired/Invalid NOC"><label id="exp">
                                                    Expired/Invalid NOC <br>মেয়াদোত্তির্ণ/বাতিল এনওসি</label></option>
                                                    <option value="No license/permit under wildlife act"><label id="license">
                                                    No license/permit under wildlife act <br>বন্যপ্রাণী আইনের অধীনে কোন লাইসেন্স/পারমিট নেই</label></option>
                                                    
                                                    <option value="Others (please specify)"><label id="o">
                                                            <?php echo trans("o", 'en'); ?><br>
                                                            <?php echo trans("o", 'bn'); ?></label></option>
                                                </select></td>
                                        </tr>
                                        <tr id="show" class="">
                                            <th>Others (please specify)<br>অন্যান্য (নির্দিষ্ট করে লিখুন)</th>
                                            <td>
                                                <p><input class="form-control inner-textfield" id="other_note"
                                                        type="text" name="other_note" value=""
                                                        data-key="others_info.penalties.other_note" /></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("imp", 'en'); ?><br>
                                                <?php echo trans("imp", 'bn'); ?></th>
                                            <td> <input class="form-control inner-textfield" id="imprisonment"
                                                    type="number" name="imprisonment" value=""
                                                    data-key="others_info.penalties.imprisonment" /></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("fine", 'en'); ?><br>
                                                <?php echo trans("fine", 'bn'); ?></th>
                                            <td><input class="form-control inner-textfield" id="fine" type="number"
                                                    name="fine" value="" min="1"
                                                    data-key="others_info.penalties.fine" /></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo trans("in8", 'en'); ?><br>
                                                <?php echo trans("in8", 'bn'); ?></th>
                                            <td><input type="text" class="form-control inner-textfield"
                                                    id="additional_information" name="additional_information" value=""
                                                    data-key="others_info.additional_information" /></td>
                                        </tr>

                                        </tr>
                                    </form>
                                </table>
                                <div>
                                    <a href="#input-disposal-information" class="listinBtn pull-left"><label id="pre">
                                            <?php echo trans("pre", 'en'); ?>
                                            <?php echo trans("pre", 'bn'); ?>
                                        </label></a>
                                    <a class="listinBtn other_next" value="Next" id="other_next">
                                        <b>Save to "My WOR" <br> খসড়া প্রতিবেদন সংরক্ষণ</b>
                                    </a>
                                    <a id="" class="listinBtn skip"><b>Skip এড়িয়ে যান</b></a>
                                    </a>
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