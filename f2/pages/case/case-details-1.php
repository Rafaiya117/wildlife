<div class="content-wrapper" style="min-height: 901px;">
    <div class="box-body">
        <div class="row">
            <div class="container">
                <div class="row col-md-12">
                    <div class="col-md-4">
                        <h3 class="innerPage-head" id="">
                            <?php echo trans("cased", 'en'); ?>
                            <br>
                            <?php echo trans("cased", 'bn'); ?>
                        </h3>
                    </div>
                    <div class="col-md-4">
                        <a class="listinBtn" style="float:right;" id="download" type="files">Download ডাউনলোড</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#additional_note" class="listinBtn scrollLink" id="upload">Upload files ফাইল আপলোড</a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="js_main_container">
                            <section class="container" id="datas"></section>
                            </div>
                            <h2>১. <?php echo trans("organization_info", 'en'); ?><br>
                                <?php echo trans("organization_info", 'bn'); ?>
                                <a href="#organization_details" class="cancelBtn"><i class=""></i></a>
                            </h2>
                            <table class="table table-bordered inner-textfield_two" >
                            <colgroup>
                                    <col span="1" style="width: 30%;">
                                    <col span="1" style="width: 70%;">
                                </colgroup>
                                <tr>
                                    <th>
                                        <b>Name of the Agency/Forest Division/Unit</b>
                                    </th>
                                    <td><%= reporting.officer.organization_name %><br><%= reporting.officer.for_fd %></td>
                                    <tr>
                                        <th>Reporting number</th>
                                        <td><%= reporting.report.no %></td>
                                    </tr>
                                    <tr>
                                        <th><?php echo trans("reporting_date", 'en'); ?></th>
                                    <td>
                                        <%= date_formater(reporting.report.date) %>
                                    </td>
                                    </tr>
                                    <tr>
                                        <th>Name of the Reporting Person/Official</th>
                                        <td><%= reporting.officer.name %></td>
                                    </tr>
                                    <tr>
                                        <th>Designation</th>
                                        <td><%= reporting.officer.officer_designation %></td>
                                    </tr>
                                    <tr>
                                        <th>Phone No.</th>
                                        <td><%= reporting.officer.phone %></td>
                                    </tr>
                                    <tr>
                                        <th>Email ID</th>
                                        <td><a href="mailto:<%= reporting.officer.email %>"> <%= reporting.officer.email %></td>
                                    </tr>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="" id="cased">
                                ২.(ক) <?php echo trans("offenceinfo", 'en'); ?><br>
                                <?php echo trans("offenceinfo", 'bn'); ?>
                                <a href="#input-offence-information" class="cancelBtn"><i
                                        class=""></i></a>
                            </h2>
                            <table class="table table-bordered inner-textfield_two">
                                <colgroup>
                                    <col span="1" style="width: 30%;">
                                    <col span="1" style="width: 70%;">
                                </colgroup>
                                <tr>
                                <tr>
                                    <th><b>Case/Offence ID number </b></th>
                                    <td colspan="2"><%= case_info.case_no %></td>
                                </tr>
                                <tr>
                                    <th><b>Date of offence detection/seizure</b></th>
                                    <td><%= date_formater(case_info.offence_date) %></td>
                                </tr>
                                <tr>
                                    <th><b>Offense location</b></th>
                                    <td> <p><b><?php echo trans("district", 'en'); ?>:</b> <%= case_info.location_info.district %></p>
                                    <p><b><?php echo trans("upzilla", 'en'); ?>: </b> <%= case_info.location_info.thana_name %></p>
                                    <p><b>Village/Moholla: </b> <%= case_info.location_info.location_village %></p>
                                    <p><b>House no.</b> <%= case_info.location_info.location_moholla %></p>
                                    <p><b>Road no.</b> <%= case_info.location_info.location_road %></p>
                                    <p><b>Forest division/unit: </b> <%= case_info.location_info.station.fd %></p>
                                        <p><b>Range: </b> <%= case_info.location_info.station.range %></p>
                                        <p><b>Beat: </b> <%= case_info.location_info.station.beat %></p>
                                        <p><b>Camp: </b><%= case_info.location_info.station.station1 %><br><%= case_info.location_info.station.camp %></p>
                                    </td>
                                </tr>
                                <tr>
                                        <th><u><?php echo trans("gps", 'en'); ?></u></th>
                                        <td> <p>দ্রাঘিমাংশ<br><%= case_info.location_info.gps.lat %></p>
                                        <p>অক্ষাংশ<br><%= case_info.location_info.gps.lon %></p></td>
                                </tr>
                                <tr>
                                    <th>Description of offense</th>
                                    <td>
                                        <ul>
                                            <% _.each(case_info.offence_type,function(off_type) { %>
                                            <li><%= off_type %> </li>
                                            <% }); %>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th><b>Action Taken</b></th>
                                    <td>
                                        <ul>
                                            <% _.each(case_info.action_taken,function(off_type) { %>
                                            <li> <%= off_type %> </li>
                                            <% }); %>
                                        </ul>
                                    </td>
                                </tr>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table inner-textfield_two">
                                <tr>
                                    <th><b>Act/Rules violated</b></th>
                                    <td>
                                        <ul>
                                            <% _.each(law_sections,function(off_type) { %>
                                            <li> <%= off_type %> </li>
                                            <% }); %>
                                        </ul>
                                    </td>
                                    <td><a href="#review-section" class="cancelBtn"><i class=""></i></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!---->
                <!---->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="" id="cased">
                                (খ) Detecting officer information<br>
                                <?php echo trans("officerhead", 'bn'); ?>
                                <a href="#input-officer-information" class="cancelBtn"><i
                                        class=""></i></a>
                            </h3>
                            <table class="table table-bordered inner-textfield_two">
                                <colgroup>
                                    <col span="1" style="width: 20%;">
                                    <col span="1" style="width: 80%;">
                                </colgroup>
                                <tr>
                                    <tr>
                                        <th>Name</th>
                                        <td><%=  investigation_officer.officer_name  %></td>
                                    </tr>
                                    <tr>
                                        <th>Designation</th>
                                        <td><%=  investigation_officer.officer_designation  %></td>
                                    </tr>
                                    <tr>
                                        <th>Job location/Posting place</th>
                                        <td><%=  investigation_officer.posting  %></td>
                                    </tr>
                                    <tr>
                                        <th>Rank</th>
                                        <td><%=  investigation_officer.rank %></td>
                                    </tr>
                                    <tr>
                                         <th>Organization</th>
                                        <td><%=  investigation_officer.organization  %></td>
                                    </tr>
                                    <tr>
                                        <th>Mobile No.</th>
                                        <td><%=  investigation_officer.mobile_number  %></td>
                                    </tr>
                                    
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="" id="cased">
                                (গ) Seized Species (animals/plants)<br> জব্দকৃত প্রজাতিসমূহ (প্রাণী/উদ্ভিদ)
                                <a href="#input-rescue-information" class="cancelBtn"><i class=""></i></a>
                            </h2>
                            <table class="table table-bordered inner-textfield_two" >
                            <h2>Whole Body/সম্পূর্ণ দেহ</h2>
                                <thead>
                                    <tr>
                                       
                                        <th>English & Bangla name </th>
                                        <th>Scientific name</th>
                                        <th>Live/Dead</th>
                                        <th>Age (Adult/Juvenile/Newborn)</th>
                                        <th>Sex</th>
                                        <th>Amount of seized animal/plant with unit </th>
                                        <th>Estimated value (Taka)</th>
                                        <th>CITES Appendix number</th>
                                        <th>Wildlife Act, 2012 Schedule number</th>
                                        <th>IUCN global status</th>
                                        <th>IUCN (Bangladesh) </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <% _.each(whole_species_list,function(item) { %>
                                    <tr>
                                       
                                        <td><%= item.static.english_name %><br><%= item.static.bangla_name %>
                                        </td>
                                        <td><i><%= item.static.scientific_name %></i></td>
                                        <td><%= item.live_dead %></td>
                                        <td><%= item.age %></td>
                                        <td><%= item.sex %></td>
                                        <td><%= item.quantity %></td>
                                        <td><%= comma_seperate(item.estimated_value)  %></td>
                                        <td><%= item.static.CITES %></td>
                                        <td><%= item.static.schedule %></td>
                                        <td><%= item.static.IUCN %></td>
                                        <td><%= item.static.IUCN_Bangladesh %></td>
                                    </tr>

                                    <% }); %>
                                </tbody>
                            </table>
                            
                            <table class="table table-bordered inner-textfield_two th_center td_center" >
                                      <h2>Bodypart/Product<br>দেহাংশ/পণ্য</h2>
                                <thead>

                                    <tr>
                                        <th>English & Bangla Name </th>
                                        <th>Scientific Name</th>
                                        <th>Name of body part/product</th>
                                        <th>Amount of seized animal/plant with unit </th>
                                        <th>Estimated value (Taka)</th>
                                        <th>CITES Appendix number</th>
                                        <th>Wildlife Act, 2012 Schedule number</th>
                                        <th>IUCN global status</th>
                                        <th>IUCN (Bangladesh) </th>
                                        <th>Estimated market value</th>
                                        <th>Length x width x height</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <% _.each(bodypart_species_list,function(item_part) { %>
                                    <tr>
                                        <td><%= item_part.static.english_name %><br><%= item_part.static.bangla_name %>
                                        </td>
                                        <td><i><%= item_part.static.scientific_name %></i></td>
                                        <td><%= item_part.trophy_name %></td>
                                        <td>
                                            <%= ut(item_part.quantity_nmbr, "nos.", "<br>") %>
                                            <%=  ut(item_part.weight_gm, "gm", "<br>") %>
                                            <%= ut(item_part.quantity_ml, "ml", "<br>") %>
                                        </td>
                                        <td><%= comma_seperate(item_part.estimated_value_tf)  %></td>
                                        <td><%= item_part.static.CITES %></td>
                                        <td><%= item_part.static.schedule %></td>
                                        <td><%= item_part.static.IUCN %></td>
                                        <td><%=item_part.static.IUCN_Bangladesh %></td>
                                        <td><%= item_part.length %> X <%= item_part.width %> X
                                            <%= item_part.height %> cm³
                                        </td>
                                    </tr>

                                    <% }); %>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="" id="cased">
                            (ঘ) <?php echo trans("other-item", 'en'); ?>
                                <br><?php echo trans("other-item", 'bn'); ?>
                                <a href="#other_seized_item" class="cancelBtn"><i class=""></i></a>
                            </h2>
                            <table class="table table-bordered inner-textfield_two th_center" >
                                <thead>
                                    <tr>
                                        <th><b><?php echo trans("seiz-it", 'en') ?></b></th>
                                        <th><b><?php echo trans("typo", 'en'); ?></b></th>
                                        <th><b><?php echo trans("brand", 'en'); ?></b></th>
                                        <th><b><?php echo trans("model", 'en'); ?></b></th>
                                        <th><b><?php echo trans("reg", 'en'); ?></b></th>
                                        <th>Tools</th>
                                        <th>Quantity</th>
                                        <th>Measurement</th>
                                        <th><b><?php echo trans("locat", 'en'); ?></b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <% _.each(items_seizure_list,function(sitems_seizure_list) { %>
                                    <tr>
                                    <tr>
                                        <td class="capitalize"><%= sitems_seizure_list.seized_item %></td>
                                        <td><%= sitems_seizure_list.weapon_type %></td>
                                        <td><%= sitems_seizure_list.weapon_brand %>
                                        </td>
                                        <td> <%= sitems_seizure_list.weapon_model %>
                                        </td>
                                        <td> <%= sitems_seizure_list.weapon_reg_no %>
                                        </td>
                                        <td><%= sitems_seizure_list.tools %> <%= sitems_seizure_list.traps %></td>
                                        <td>
                                            <%=
                                            ut(sitems_seizure_list.quantity_number_1, "nos.", "<br>") +
                                            ut(sitems_seizure_list.quantity_gm_1, "gm", "<br>") +
                                            ut(sitems_seizure_list.quantity_ml_1, " ml", "<br>") %>
                                        </td>
                                        <td><%= ut(sitems_seizure_list.measurement_lenght, "cm", " X ") + 
                                            ut(sitems_seizure_list.measurement_width, "cm", " X ") +
                                            ut(sitems_seizure_list.measurement_height, "cm")  %>
                                        </td>
                                        <td><%= sitems_seizure_list.seizure_location %></td>
                                    </tr>
                                    </tr>
                                    <% }); %>
                                    <thead>
                                        <tr>
                                            <th><b><?php echo trans("nm-cus", 'en'); ?></b></th>
                                            <th><b><?php echo trans("cus-des", 'en'); ?></b></th>
                                            <th><b><?php echo trans("add-cus", 'en'); ?></b></th>
                                            <th><b><?php echo trans("phn-num", 'en'); ?></b></th>
                                        </tr>
                                    </thead>
                                    <% _.each(items_seizure_list,function(sitems_seizure_list) { %>
                                    <tr>
                                    <tr>
                                        <td><%= sitems_seizure_list.items_seizure_custodian.name %></td>
                                        <td><%= sitems_seizure_list.items_seizure_custodian.designation %></td>
                                        <td><%= sitems_seizure_list.items_seizure_custodian.address %></td>
                                        <td><%= sitems_seizure_list.items_seizure_custodian.phone %></td>
                                    </tr>
                                    </tr>
                                    <% }); %>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                         <h2 class="" id="cased">(ঙ) Other Seized Item (online/virtual)<br>
                                অন্যান্য জব্দকৃত (অনলাইন/ভার্চুয়াল)
                                <a href="#video_file" class="cancelBtn"><i class=""></i></a>
                            </h2>
                            <table class="table table-bordered inner-textfield_two th_center" >
                                <thead>
                                    <tr>

                                        <th><b>Online/Virtual(Video)</b></th>
                                        <th><b>Location of Seizure</th>
                                        <th><b>Name of the Custodian</b></th>
                                        <th><b>Designation of the Custodian</b></th>
                                        <th><b>Address of the Custodian</b></th>
                                        <th><b>Mobile Number</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <% _.each(online_seized_item,function(itemss_online_seized_item) { %>
                                    <tr>
                                    <tr>

                                        <td><%= itemss_online_seized_item.description %></td>
                                        <td><%= itemss_online_seized_item.location %></td>
                                        <td><%= itemss_online_seized_item.name_custodian %></td>
                                        <td><%= itemss_online_seized_item.designation_custodian %></td>
                                        <td><%= itemss_online_seized_item.custodian_address %></td>
                                        <td><%= itemss_online_seized_item.phn_custodian %></td>
                                    </tr>
                                    </tr>
                                    <% }); %>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="" id="cased">
                            ৩.<?php echo trans("accusedhead", 'en'); ?><br>
                            <?php echo trans("accusedhead", 'bn'); ?>
                                <a href="#input-offender-profile" class="cancelBtn"><i class=""></i></a>
                            </h2>
                            <table class="table table-bordered inner-textfield_two th_center td_center" >
                                <thead>
                                    <tr>

                                        <th>Name</th>
                                        <th><?php echo trans("age", 'en'); ?></th>
                                        <th>Father's name</th>
                                        <th>Mother's name</th>
                                        <th><?php echo trans("identity", 'en'); ?></th>
                                        <th>Accused organization</th>
                                        <th>Occupation</th>
                                        <th><?php echo trans("number", 'en'); ?></th>
                                        <th><?php echo trans("mobile", 'en'); ?></th>
                                        
                                        <th><?php echo trans("gender", 'en'); ?></th>
                                        <th><?php echo trans("pr-address", 'en'); ?></th>
                                        <th><?php echo trans("address", 'en'); ?></th>
                                        <th>Repeat offense</th>
                                        <th><?php echo trans("note", 'en'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <% _.each(offender,function(ioffender) { %>
                                    <tr>

                                        <td><%= ioffender.name %></td>
                                        <td><%= ioffender.age %></td>
                                        <td><%= ioffender.fathers_name  %></td>
                                        <td><%= ioffender.mother_name  %></td>
                                        <td><%= ioffender.nationality    %></td>
                                        <td><%= ioffender.accused_company %></td>
                                        <td><%= ioffender.occupation %></td>
                                        <td><%= ioffender.nid_number    %></td>
                                        <td><%= ioffender.mobile_number    %></td>
                                        <td><%= ioffender.sex  %></td>
                                        <td><%= ioffender.present_address  %></td>
                                        <td><%= ioffender.permanent_address  %></td>
                                        <td><%= ioffender.repeated_offender  %></td>
                                        <td><%= ioffender.note  %></td>
                                    </tr>
                                    <% }); %>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="" id="cased">৪.
                                <?php echo trans("wittness", 'en'); ?><br>
                                <?php echo trans("wittness", 'bn'); ?>
                                <a href="#input-witness-information" class="cancelBtn"><i
                                        class=""></i></a>
                            </h2>
                            <table class="table table-bordered inner-textfield_two th_center td_center" >
                                <thead>
                                    <tr>

                                        <th><b><?php echo trans("witnessname", 'en'); ?></b></th>
                                        <th><b>Designation</b></th>
                                        <th><b><?php echo trans("gender", 'en'); ?></b></th>
                                        <th>Mobile number</th>
                                        <th><b><?php echo trans("witness-address", 'en'); ?></b></th>
                                        <th><b><?php echo trans("note-2", 'en'); ?></b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <% _.each(witness,function(iwitness) { %>
                                    <tr>
                                        <td><%= iwitness.name %></td>
                                        <td><%= iwitness.witness_designation%></td>
                                        <td><%= iwitness.sex %></td>
                                        <td><%= iwitness.mobile_number %></td>
                                        <td><%= iwitness.present_address   %></td>
                                        <td><%= iwitness.note  %></td>
                                    </tr>
                                    <% }); %>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!---->
                <!---->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="" id="cased">
                            ৫.(ক) <?php echo trans("sampleinfo", 'en'); ?><br>
                                <?php echo trans("sampleinfo", 'bn'); ?>
                                <a href="#input-sample-collection" class="cancelBtn"><i class=""></i></a>
                            </h2>
                            <table class="table table-bordered inner-textfield_two th_center" >
                                <thead>
                                    <tr>

                                        <th><?php echo trans("speciesname", 'en'); ?></th>
                                        <th>Sample's name</th>
                                        <th><?php echo trans("code", 'en'); ?></th>
                                        <th><?php echo trans("coll-date", 'en'); ?></th>
                                        <th><?php echo trans("place", 'en'); ?></th>
                                        <th><?php echo trans("forensic-rp", 'en'); ?></th>
                                        <th><?php echo trans("rpdate", 'en'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <% _.each(sample,function(isample) { %>
                                    <tr>

                                        <td><%= isample.species_name %></td>
                                        <td><%= isample.sample_name %></td>
                                        <td><%= isample.code %></td>
                                        <td><%= date_formater(isample.date_collection)  %></td>
                                        <td><%= isample.collection_place  %></td>
                                        <td><%= isample.forensic_report_generated  %></td>
                                        <td><%= date_formater(isample.forensic_report_date)  %></td>

                                    </tr>
                                    <% }); %>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!----->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="" id="cased">(খ) <?php echo trans("dis-info", 'en'); ?><br>
                                <?php echo trans("dis-info", 'bn'); ?>
                                <a href="#input-disposal-information" class="cancelBtn"><i
                                        class=""></i></a>
                            </h2>
                            <table class="table table-bordered inner-textfield_two th_center"  >
                                <thead>
                                    <tr>
                                        <th><?php echo trans("sl", 'en'); ?></th>
                                        <th>Disposal orderer's name </th>
                                        <th>Disposal orderer's designation </th>
                                        <th>Species name</th>
                                        <th>Item type</th>
                                        <th><?php echo trans("mode", 'en'); ?></th>
                                        <th><?php echo trans("pl-dis", 'en'); ?></th>
                                        <th><?php echo trans("disposal-date", 'en'); ?></th>
                                        <th><?php echo trans("incharge", 'en'); ?></th>
                                        <th>Disposing officer's designation</th>
                                        <th>Disposing officer's workstation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <% _.each(disposal,function(idisposal) { %>
                                    <tr>

                                        <td><%= idisposal.sl %></td>
                                        <td><%= idisposal.orderers_name %></td>
                                        <td><%= idisposal.orderers_designation %></td>
                                        <td><%= idisposal.name   %></td>
                                        <td><%= idisposal.body_part   %></td>
                                        <td><%= idisposal.mode %></td>
                                        <td><%= idisposal.place  %></td>
                                        <td><%= date_formater(idisposal.date)  %></td>
                                        <td><%= idisposal.incharge  %></td>
                                        <td><%= idisposal.incharge_designation  %></td>
                                        <td> <%= idisposal.incharge_workstation  %> </td>
                                    </tr>
                                    <% }); %>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!---->
                
                <!---->
                <!---->
                
                <!---->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="" id="cased">
                            ৬.<?php echo trans("other", 'en'); ?><br>
                                <?php echo trans("other", 'bn'); ?>
                                <a href="#other-details" class="cancelBtn"><i class=""></i></a>
                            </h2>
                            <table class="table table-bordered inner-textfield_two th_center" >
                                <colgroup>
                                    <col span="1" style="width: 20%;">
                                    <col span="1" style="width: 80%;">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <td><b>Detection method</b></td>
                                        <td>
                                            <ul>
                                                <% _.each(others_info.discovering_method,function(off_type) { %>
                                                <li> <%= off_type %> </li>
                                                <% }); %>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b><?php echo trans("in2", 'en'); ?></b></td>
                                        <td>
                                            <ul>
                                                <% _.each(others_info.mode_of_transport,function(off_type) { %>
                                                <li> <%= off_type %> </li>
                                                <% }); %>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b><?php echo trans("in3", 'en'); ?></b></td>
                                        <td>
                                            <ul>
                                                <% _.each(others_info.concealment_method,function(off_type) { %>
                                                <li> <%= off_type %> </li>
                                                <% }); %>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b><?php echo trans("in4", 'en'); ?></b></td>
                                        <td><%=  others_info.alleged_country  %></td>
                                    </tr>
                                    <tr>
                                        <td><b><?php echo trans("in5", 'en'); ?></b></td>
                                        <td><%=  others_info.transition_country  %></td>
                                    </tr>
                                    <tr>
                                        <td><b><?php echo trans("in6", 'en'); ?></b></td>
                                        <td><%=  others_info.destination_contry  %></td>
                                    </tr>
                                    <tr>
                                        <td><b><?php echo trans("in7", 'en'); ?></b></td>
                                        <td><%=  others_info.reason_for_seizure  %></td>
                                    </tr>
                                    <tr>
                                        <td><b><?php echo trans("fine", 'en'); ?></b></td>
                                        <td><%=  comma_seperate(others_info.penalties.fine)  %></td>
                                    </tr>
                                    <tr>
                                        <td><b><?php echo trans("pelan", 'en'); ?></b></td>
                                        <td><%=  others_info.penalties.imprisonment  %></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <div class="form-group col-md-12">
        </div>
    <!---->
</div>
    </div>
        </div>
            <br>
                <div class="card">
                    <label class="form-label inner-label" for="image">Uploaded document & picture (PDF/JPG) <br>নথি ও ছবি আপলোড করুন</label>
                        <% _.each(image_files,function(item) { %>
                            <div class="card-body" style="font-size:18px;">
                                <a target="_blank" href="<%= item.url %> "><i class="fas fa-file-pdf"></i> <%= item.name %> </a>
                            </div>
                        <% }); %>
                </div>
                <div class="form-group col-md-12">
                    <label class="form-label inner-label" for="image">Upload document & picture (PDF/JPG) <br> নথি ও ছবি আপলোড করুন</label>
                        <input type="file" class="form-control inner-textfield_two" id="file" name="file" /><br>
                            <input type="button" style="font-size:20px;" class="btn btn-info" value="Upload আপলোড" id="but_upload">
                                <label class="inner-label" id="note-2">
                                    <?php echo trans("note-2", 'en'); ?><br>
                                        <?php echo trans("note-2", 'bn'); ?>
                                </label>
                                <% _.each(notes,function(items) { %>
                                    <div  style="font-size:18px;"><%= items %></div>
                                <% }); %>                                          
                                    <input type="text" id="additional_note" name="" value="" placeholder="" class="form-control inner-textfield_two">
                                    <input type="button" style="font-size:20px;" class="btn btn-info" value="Save" id="save"><br>                                                      
                                </div>
                            <a class="listinBtn pull-left" onclick="window.history.go(-1); return false;" style="cursor: pointer;"><?php echo trans("back", 'en'); ?>
                                <?php echo trans("back", 'bn'); ?></a>
                                    </div>
                                    <div class="control-sidebar-bg"></div>
                                
                                                                                            
                                                                                        
                                                                                       
                                                                                    
               