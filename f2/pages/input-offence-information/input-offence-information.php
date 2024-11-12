<!-----------#####################MULTIPLE IMAGE PREVIEW JS#########---->
<div class="content-wrapper" style="min-height: 901px;">
    <div class="card-body">
        <section class="container">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="innerPage-box">
                            <div>
                                <a href="#organization_details" class="listinBtn pull-left"><label id="pre">
                                        <?php echo trans("pre", 'en'); ?>
                                        <?php echo trans("pre", 'bn'); ?></label>
                                </a>
                                <a class="listinBtn next" name="submit" title="Next" id="next">
                                    <b><?php echo trans("next", 'en'); ?>
                                        <?php echo trans("next", 'bn'); ?></b></a>
                            </div>
                            <div class="topnav"><a class="navbar">2/13</a></div>


                            <h3 class="innerPage-head" id="offenceinfo">
                                <?php echo trans("offenceinfo", 'en'); ?><br>
                                <?php echo trans("offenceinfo", 'bn'); ?></h3>
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-bordered inner-textfield">
                                        <form role="form" id="commentForm" class="inputs-p10 " method="POST"
                                            action="#input-officer-information" enctype="multipart/form-data">
                                            <tr>
                                                <th><?php echo trans("case", 'en'); ?><br>
                                                    মামলা নং
                                                    <?php // echo trans("case", 'bn'); ?>
                                                    <span style="height:45px;color:#FF0000 !important">*</span>
                                                </th>
                                                <td><input type="text" class="form-control inner-textfield "
                                                        id="case_no" name="case_no" data-key="case_info.case_no"
                                                        required /></td>
                                            </tr>
                                            <tr>
                                                <th><?php echo trans("date", 'en'); ?><br>
                                                    <?php echo trans("date", 'bn'); ?><span
                                                        style="height:45px;color:#FF0000 !important">*</span></th>
                                                <td> <input type="date" class="form-control inner-textfield" id="date_1"
                                                        name="date_1" data-key="case_info.offence_date" required />
                                                    <!-- <i class="fa fa-calendar datepick" aria-hidden="true"
                                                style="float:right; margin-top: -10px;margin-top: -30px;padding-right: 15px;font-size:20px"></i> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <th> <?php echo trans("district", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("district", 'bn'); ?>
                                                    <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                                </th>
                                                <td><select style="height:45px;color:#009472 !important"
                                                        class="form-control inner-textfield" id="district"
                                                        name="district" data-key="case_info.location_info.district">
                                                        <option value=""></option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <th><?php echo trans("upzilla", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("upzilla", 'bn'); ?>
                                                    <!-- <span style="height:45px;color:#FF0000 !important">*</span> -->
                                                </th>
                                                <td><select style="height:45px;color:#009472 !important"
                                                        class="form-control inner-textfield" id="upzilla" name="upzilla"
                                                        data-key="case_info.location_info.thana_id">
                                                        <option value=""></option>
                                                    </select>
                                                    <input type="hidden" style="height:45px;color:#009472 !important"
                                                        class="form-control inner-textfield" id="thana_name"
                                                        name="thana_name"
                                                        data-key="case_info.location_info.thana_name" />


                                                </td>
                                            </tr>

                                            <tr>
                                                <th>Village/Moholla<br>গ্রাম/মহল্লা
                                                    <span></span>
                                                </th>
                                                <td><input type="text" class="form-control inner-textfield "
                                                        id="location_village" name="location_village"
                                                        data-key="case_info.location_info.location_village" /></td>
                                            </tr>
                                            <tr>
                                                <th>House no.<br>বাড়ি নং
                                                    <span></span>
                                                </th>
                                                <td><input type="text" class="form-control inner-textfield "
                                                        id="location_moholla" name="location_moholla"
                                                        data-key="case_info.location_info.location_moholla" /></td>
                                            </tr>
                                            <th> Road no.<br>
                                                রোড নং

                                                <span></span>
                                            </th>
                                            <td><input type="text" class="form-control inner-textfield "
                                                    id="location_road" name="location_road"
                                                    data-key="case_info.location_info.location_road" /></td>
                                            </tr>
                                            <tr>
                                                <th>Location (if inside forest)
                                                    <br>বনের অভন্তরে ঘটনাস্থল

                                                    <span></span></label>
                                                </th>
                                                <td>
                                                    <p><b>Forest division/Unit <br> ফরেস্ট ডিভিশন/ইউনিট </b>
                                                        <select name="state" class="form-control  inner-textfield"
                                                            id="fd" data-key="case_info.location_info.station.fd">
                                                            <option value=""></option>
                                                        </select>
                                                    </p>
                                                    <p><b>Range/SFNTC <br> রেঞ্জ/এসএফএনটিসি </b>
                                                        <select name="state" class="form-control  inner-textfield"
                                                            id="range" data-key="case_info.location_info.station.range">
                                                            <option value=""></option>
                                                        </select>
                                                    </p>
                                                    <p> <b>Beat/SFPC/Station <br> বিট/এসএফপিসি/স্টেশন</b>
                                                        <select name="state" class="form-control  inner-textfield"
                                                            id="beat" data-key="case_info.location_info.station.beat">
                                                            <option value=""></option>
                                                        </select>
                                                    </p>
                                                    <p><b>Camp <br> ক্যাম্প </b>
                                                        <input name="camp" class="form-control  inner-textfield"
                                                            id="camp" data-key="case_info.location_info.camp">
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><?php echo trans("gps", 'en'); ?><br>
                                                    <?php echo trans("gps", 'bn'); ?>
                                                    <span style="height:45px;color:#FF0000 !important">*</span>
                                                </th>
                                                <td>
                                                    <p><b><?php echo trans("longitude", 'en'); ?> (N)<br>
                                                            <?php echo trans("longitude", 'bn'); ?></b>
                                                        <span
                                                            style="height:45px;color:#FF0000 !important">*</span><sub>(23.123456)</sub>
                                                        <input type="number" min="0" step="0.01"
                                                            class="form-control inner-textfield usd_input"
                                                            id="co_ordinate1" name="co_ordinate1" value=""
                                                            data-key="case_info.location_info.gps.lat" required>
                                                    </p>

                                                    <p><b><?php echo trans("lattitude", 'en'); ?> (E)<br>
                                                            <?php echo trans("lattitude", 'bn'); ?></b><span
                                                            style="height:45px;color:#FF0000 !important">*</span><sub>(90.123456)</sub>
                                                        <input type="number"
                                                            class="form-control inner-textfield usd_input"
                                                            id="co_ordinate2" name="co_ordinate2" value=""
                                                            data-key="case_info.location_info.gps.lon" required>
                                                    </p>
                                                    <p><input placeholder="search" class="controls" id="pac-input" />
                                                    <div id="map"></div>
                                                    <div id="infowindow-content">
                                                        <span id="place-name" class="title"></span>
                                                        <br /><strong>Place ID:</strong>
                                                        <span id="place-id"></span><br />
                                                        <span id="place-address"></span>
                                                    </div>
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th><?php echo trans("detection", 'en'); ?><br>
                                                    <?php echo trans("detection", 'bn'); ?><span
                                                        style="height:45px;color:#FF0000 !important">*</span>
                                                </th>
                                                <td>
                                                    <div class="grid-container">
                                                        <p>
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="offence_type"
                                                                    class="information"
                                                                    value="Illegal_import অবৈধ আমদানি"
                                                                    data-id="offence_type" id="iimp"
                                                                    data-key="case_info.offence_type" required>
                                                                <label for="iimp">
                                                                    <?php echo trans("iimp", 'en'); ?><br>
                                                                    <?php echo trans("iimp", 'bn'); ?>
                                                                </label><a href='#'>&nbsp;<i class=""></i></a>
                                                                <span class="checkbox-checkmark"></span>
                                                            </label>
                                                        </p>
                                                        <p>
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="offence_type"
                                                                    class="information"
                                                                    value="Illegal_export অবৈধ রপ্তানি"
                                                                    data-id="offence_type" id="iexp"
                                                                    data-key="case_info.offence_type" required>
                                                                <label class="" for="iexp">
                                                                    <?php echo trans("iexp", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("iexp", 'bn'); ?>
                                                                </label><a href='#'>&nbsp;<i class=""></i></a><span
                                                                    class="checkbox-checkmark"></span>
                                                            </label>
                                                        </p>
                                                        <p>
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="offence_type"
                                                                    class="information"
                                                                    value="Illegal_buy_sale অবৈধ ক্রয়-বিক্রয়"
                                                                    data-id="offence_type" id="isale"
                                                                    data-key="case_info.offence_type" required>
                                                                <label class="" for="isale">
                                                                    <?php echo trans("isale", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("isale", 'bn'); ?>
                                                                </label><a href='#'>&nbsp;<i class=""></i></a><span
                                                                    class="checkbox-checkmark"></span>
                                                            </label>
                                                        </p>
                                                        <p>
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="offence_type"
                                                                    class="information" value="Hunting শিকার"
                                                                    data-id="offence_type" id="hun"
                                                                    data-key="case_info.offence_type" required>
                                                                <label class="" for="hun">
                                                                    <?php echo trans("hun", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("hun", 'bn'); ?>
                                                                </label><a href='#'>&nbsp;<i class=""></i></a><span
                                                                    class="checkbox-checkmark"></span>
                                                            </label>
                                                        </p>
                                                        <p>
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="offence_type"
                                                                    class="information"
                                                                    value="Illegal_occupation অবৈধ দখল"
                                                                    data-id="offence_type" id="iocc"
                                                                    data-key="case_info.offence_type" required>
                                                                <label class="" for="iocc">
                                                                    <?php echo trans("iocc", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("iocc", 'bn'); ?>
                                                                </label><a href='#'>&nbsp;<i class=""></i></a><span
                                                                    class="checkbox-checkmark"></span>
                                                            </label>
                                                        </p>
                                                        <p>
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="offence_type"
                                                                    class="information" value="Killing হত্যা"
                                                                    data-id="offence_type" id="kill"
                                                                    data-key="case_info.offence_type" required>
                                                                <label class="" for="kill">
                                                                    <?php echo trans("kill", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("kill", 'bn'); ?>
                                                                </label><a href='#'>&nbsp;<i class=""></i></a><span
                                                                    class="checkbox-checkmark"></span>
                                                            </label>
                                                        </p>
                                                        <p>
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="offence_type"
                                                                    class="information"
                                                                    value="Gunshot Killing গুলি করে হত্যা"
                                                                    data-id="offence_type" id="kill"
                                                                    data-key="case_info.offence_type" required>
                                                                <label class="" for="kill">

                                                                    Gunshot Killing
                                                                    <br>

                                                                    গুলি করে হত্যা
                                                                </label><a href='#'>&nbsp;<i class=""></i></a><span
                                                                    class="checkbox-checkmark"></span>
                                                            </label>
                                                        </p>
                                                        <p>
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="offence_type"
                                                                    class="information"
                                                                    value="Killed by Poisoning বিষ প্রয়োগে হত্যা"
                                                                    data-id="offence_type" id="poisoning"
                                                                    data-key="case_info.offence_type" required>
                                                                <label class="" for="poisoning">

                                                                    Killed by Poisoning
                                                                    <br>

                                                                    বিষটোপ/বিষ প্রয়োগে হত্যা
                                                                </label><a href='#'>&nbsp;<i class=""></i></a><span
                                                                    class="checkbox-checkmark"></span>
                                                            </label>
                                                        </p>
                                                        <p>
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="offence_type"
                                                                    class="informations1 coupon_question"
                                                                    value="Others অন্যান্য" data-id="offence_type"
                                                                    id="others" data-key="case_info.offence_type"
                                                                    required>
                                                                <label class="" for="others">
                                                                    <?php echo trans("others", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("others", 'bn'); ?>
                                                                </label><a href='#'>&nbsp;<i class=""></i></a><span
                                                                    class="checkbox-checkmark"></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="answer">
                                                <th>Others <br> অন্যান্য </th>
                                                <td><input type="text" id="offence_type_others" name="" placeholder=""
                                                        class="form-control inner-textfield"
                                                        data-key="case_info.offence_type_others" /></td>
                                            </tr>
                                            <tr>
                                                <th><?php echo trans("action", 'en'); ?><br>
                                                    <?php echo trans("action", 'bn'); ?><span
                                                        style="height:45px;color:#FF0000 !important">*</span></th>
                                                <td>
                                                    <div class="grid-container">
                                                        <p>
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="action_taken"
                                                                    class="information" data-id="action_taken"
                                                                    value="Arrest গ্রেফতার" id="arrest"
                                                                    data-key="case_info.action_taken" required /><label
                                                                    id="arrest" for="arrest">
                                                                    <?php echo trans("arrest", 'en'); ?><br>
                                                                    <?php echo trans("arrest", 'bn'); ?>
                                                                </label><a href='#'>&nbsp;<i class=""></i></a><span
                                                                    class="checkbox-checkmark"></span>
                                                            </label>
                                                        </p>
                                                        <p>
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="action_taken"
                                                                    class="information" data-id="action_taken"
                                                                    value="P.O.R পি.ও.আর" id="por"
                                                                    data-key="case_info.action_taken" required />
                                                                <label id="por" for="por">
                                                                    <?php echo trans("por", 'en'); ?><br>
                                                                    <?php echo trans("por", 'bn'); ?>
                                                                </label><a href='#'>&nbsp;<i class=""></i></a><span
                                                                    class="checkbox-checkmark"></span>
                                                            </label>
                                                        </p>
                                                        <p>
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="action_taken"
                                                                    class="information" data-id="action_taken"
                                                                    value="C.O.R সি.ও.আর" id="cor"
                                                                    data-key="case_info.action_taken" required />
                                                                <label id="cor" for="cor">
                                                                    <?php echo trans("cor", 'en'); ?>
                                                                    <br>
                                                                    <?php echo trans("cor", 'bn'); ?>
                                                                </label><a href='#'>&nbsp;<i class=""></i></a><span
                                                                    class="checkbox-checkmark"></span>
                                                            </label>
                                                        </p>
                                                        <p>
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="action_taken"
                                                                    class="information" data-id="action_taken"
                                                                    value="U.D.O.R ইউ.ডি.ও.আর" id="udor"
                                                                    data-key="case_info.action_taken" required />
                                                                <label id="udor" for="udor">
                                                                    <?php echo trans("udor", 'en'); ?><br>
                                                                    <?php echo trans("udor", 'bn'); ?>
                                                                </label><a href='#'>&nbsp;<i class=""></i></a><span
                                                                    class="checkbox-checkmark"></span>
                                                            </label>
                                                        </p>
                                                        <p>
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="action_taken"
                                                                    class="information" data-id="action_taken"
                                                                    value="Mobile Court মোবাইল কোর্ট" id="mcourt"
                                                                    data-key="case_info.action_taken" required />
                                                                <label id="mcourt" for="mcourt">
                                                                    <?php echo trans("mcourt", 'en'); ?><br>
                                                                    <?php echo trans("mcourt", 'bn'); ?>
                                                                </label><a href='#'>&nbsp;<i class=""></i></a><span
                                                                    class="checkbox-checkmark"></span>
                                                            </label>
                                                        </p>
                                                        <p>
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="action_taken"
                                                                    class="information" data-id="action_taken"
                                                                    value="Compound মুশলেকা" id="compound"
                                                                    data-key="case_info.action_taken" required />
                                                                <label id="compound" for="compound">
                                                                    Bond<br>মুচলেকা

                                                                </label><a href='#'>&nbsp;<i class=""></i></a><span
                                                                    class="checkbox-checkmark"></span>
                                                            </label>
                                                        </p>
                                                        <p>
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="action_taken"
                                                                    class="information" data-id="action_taken"
                                                                    value="F.I.R" id="fir"
                                                                    data-key="case_info.action_taken" required />
                                                                <label id="fir" for="fir">
                                                                    F.I.R<br> এফ.আই.আর

                                                                </label><a href='#'>&nbsp;<i class=""></i></a><span
                                                                    class="checkbox-checkmark"></span>
                                                            </label>
                                                        </p>
                                                        <p>
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="action_taken"
                                                                    class="information" data-id="action_taken"
                                                                    value="G.D" id="g_d"
                                                                    data-key="case_info.action_taken" required />
                                                                <label id="g_d" for="g_d">
                                                                    G.D<br> জি.ডি

                                                                </label><a href='#'>&nbsp;<i class=""></i></a><span
                                                                    class="checkbox-checkmark"></span>
                                                            </label>
                                                        </p>
                                                        <p>
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="action_taken"
                                                                    class="information" data-id="action_taken"
                                                                    value="Customs" id="customs"
                                                                    data-key="case_info.action_taken" required />
                                                                <label id="customs" for="gcustoms_d">
                                                                    Disposed by Customs<br> কাস্টমস কর্তৃক নিষ্পত্তি

                                                                </label><a href='#'>&nbsp;<i class=""></i></a><span
                                                                    class="checkbox-checkmark"></span>
                                                            </label>
                                                        </p>
                                                        <p>
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="action_taken"
                                                                    class="information" data-id="action_taken"
                                                                    value="C.R." id="cr"
                                                                    data-key="case_info.action_taken" required />
                                                                <label id="cr" for="cr">
                                                                    C.R<br> সি.আর

                                                                </label><a href='#'>&nbsp;<i class=""></i></a><span
                                                                    class="checkbox-checkmark"></span>
                                                            </label>
                                                        </p>
                                                        <p>
                                                            <label class="checkbox-holder">
                                                                <input type="checkbox" name="action_taken"
                                                                    class="informations coupon_question"
                                                                    value="Others অন্যান্য" data-id="action_taken"
                                                                    id="info_others" data-key="case_info.action_taken"
                                                                    required />
                                                                <label id="" for="info_others">
                                                                    <?php echo trans("others", 'en'); ?><br>
                                                                    <?php echo trans("others", 'bn'); ?>
                                                                </label><a href='#'>&nbsp;<i class=""></i></a><span
                                                                    class="checkbox-checkmark"></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="answer1">
                                                <th>Others <br> অন্যান্য </th>
                                                <td><input type="text" id="informations" name="" placeholder=""
                                                        class="form-control inner-textfield"
                                                        data-key="case_info.action_taken_other_text" /></td>
                                            </tr>
                                        </form>
                                    </table>
                                    <div>
                                        <a href="#organization_details" class="listinBtn pull-left"><label id="pre">
                                                <?php echo trans("pre", 'en'); ?>
                                                <?php echo trans("pre", 'bn'); ?>
                                            </label></a>
                                        <a class="listinBtn next" name="submit" title="Next" id="next">
                                            <b><?php echo trans("next", 'en'); ?>
                                                <?php echo trans("next", 'bn'); ?></b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="control-sidebar-bg">

            </div>
    </div>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCa1ooCsDErdODn-YAGLW3D_pUvAWzl09M&callback=initMap&libraries=places&v=weekly"
        defer></script>