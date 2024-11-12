<div class="content-wrapper" style="min-height: 901px;">

    <div class="row">
        <div class="col-md-12">
            <div class="flash-message">
            </div>
            <div class="listing-panel box">
                <div class="container-fulid">
                    <div class="">
                        <h3 class="innerPage-head m-0" id="rev"> <?php echo trans("rev", 'en'); ?>
                            <br>
                            <?php echo trans("rev", 'bn'); ?>
                        </h3>
                        <br>
                        <a href="javascript:void(0)" class=""></a>
                    </div>
                    <div class="row"></div>
                    <div class="clearfix"></div>
                    <div class="panel-group" id="" role="tablist" aria-multiselectable="true">
                        <!--************************************************-->
                        <!--***********SECTION-1****************************-->
                        <!--************************************************-->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        <img src="">
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <div style="min-height: 350px;">
                                        <section class="container">
                                            <div class="col-md-12">
                                                <div class="innerPage-box">
                                                    <h3 class="innerPage-head">
                                                        <?php echo trans("organization_info", 'en'); ?><br>

                                                        <?php echo trans("organization_info", 'bn'); ?>
                                                        <a href="#organization_details" class="cancelBtn"><i class="fa fa-edit"></i>Edit</a>
                                                    </h3>
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <section class="container"></section>
                                                            <table class="table inner-textfield" style="table-layout: fixed;">
                                                                <tr>
                                                                    <td>
                                                                        <b><?php echo trans("organization_name", 'bn'); ?></b>
                                                                        <p><%= reporting.officer.organization_name %></p>
                                                                    </td>
                                                                    <td>
                                                                        <b><?php echo trans("reporting_number", 'bn'); ?></b>
                                                                        <p><%= reporting.report.no %></p>
                                                                    </td>
                                                                    <td>
                                                                        <b><?php echo trans("reporting_date", 'bn'); ?></b>
                                                                        <p><%= date_formater(reporting.report.date) %></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <b><?php echo trans("reporting-officername", 'bn'); ?></b>
                                                                        <p><%= reporting.officer.name %> <br>
                                                                            <%= reporting.officer.officer_designation %><br>
                                                                            <%= reporting.officer.phone %><br><a href="mailto:<%= reporting.officer.email %>"><%= reporting.officer.email %></a>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <!--************************************************-->
                    <!--***********SECTION-2****************************-->
                    <!--************************************************-->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <img src="">
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <div style="min-height: 350px;">
                                    <section class="container">
                                        <div class="col-md-12">
                                            <div class="innerPage-box">
                                                <h3 class="innerPage-head">
                                                    <?php echo trans("offenceinfo", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("offenceinfo", 'bn'); ?>
                                                    <a href="#input-offence-information" class="cancelBtn"><i class="fa fa-edit"></i>Edit</a>
                                                </h3>
                                                <div class="card">
                                                    <div class="card-body">
                                                    <table class="table inner-textfield">
                                        <tr>
                                            <tr>
                                                <th><b><?php echo trans("case", 'bn'); ?></b></th>
                                                <td><%= case_info.case_no %></td>
                                            </tr>
                                            <tr>
                                                <th><b><?php echo trans("c_date", 'bn'); ?></b></th>
                                                <td><%= date_formater(case_info.offence_date) %></td>
                                            </tr>
                                            <tr>
                                                <th><b><?php echo trans("c_add", 'bn'); ?></b></th>
                                                <td> <%= case_info.location_info.district %>,<%= case_info.location_info.thana_name %>,
                                                    <br><%= case_info.location_info.location_village %>
                                                    <br><%= case_info.location_info.location_moholla %>
                                                    <br><%= case_info.location_info.location_road %>,
                                                        <%= case_info.location_info.station.fd %>,
                                                        <%= case_info.location_info.station.range %>,
                                                        <%= case_info.location_info.station.beat %>
                                                    <br><%= case_info.location_info.station.station1 %>,<%= case_info.location_info.station.camp %>
                                                    <br><b><u><?php echo trans("gps", 'bn'); ?></u></b>
                                                    <br><p>দ্রাঘিমাংশ<br><%= case_info.location_info.gps.lat %></p>
                                                        <p>অক্ষাংশ<br><%= case_info.location_info.gps.lon %></p></td>
                                            </tr>
                                            <tr>
                                                <th><b><?php echo trans("crime_l", 'bn'); ?></b></th>
                                                <td>
                                                    <ul>
                                                        <% _.each(case_info.offence_type,function(off_type) { %>
                                                            <li><%= off_type %> </li>
                                                        <% }); %>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><b><?php echo trans("act_t", 'bn'); ?></b></th>
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
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!--************************************************-->
    <!--***********SECTION-3****************************-->
    <!--************************************************-->
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <img src="">
                </a>
            </h4>
        </div>
        <div id="collapseThree" class="" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
                <div style="min-height: 350px;">
                    <section class="container">
                        <div class="col-md-12">
                            <div class="innerPage-box">
                                <h3 class="innerPage-head">
                                    <?php echo trans("offenceinfo", 'en'); ?>
                                        <br>
                                    <?php echo trans("offenceinfo", 'bn'); ?>
                                    <a href="#review-section" class="cancelBtn"><i class="fa fa-edit"></i>Edit</a></h3>
                                        <div class="card">
                                            <div class="card-body">
                                                <table class="table inner-textfield">
                                                    <tr>
                                                        <th><b> লংঘনকৃত আইন/বিধি</b></th>
                                                        <td>
                                                            <ul>
                                                                <% _.each(law_sections,function(off_type) { %>
                                                                    <li> <%= off_type %> </li>
                                                                <% }); %>
                                                            </ul>
                                                        </td>
                                                        <td><a href="#review-section" class="cancelBtn"><i class="fa fa-edit"></i>Edit</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                    <!--************************************************-->
                    <!--***********SECTION-4****************************-->
                    <!--************************************************-->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <img src="">
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <div style="min-height: 350px;">
                                    <section class="container">
                                        <div class="col-md-12">
                                            <div class="innerPage-box">
                                                <h3 class="innerPage-head">
                                                    <?php echo trans("officerhead", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("officerhead", 'bn'); ?>
                                                    <a href="#input-officer-information" class="cancelBtn"><i class="fa fa-edit"></i>Edit</a>
                                                </h3>
                                                <div class="card">
                                                    <div class="card-body">
                                                    <table class="table inner-textfield">
                                                        <tr>
                                                            <th><?php echo trans("officername", 'bn'); ?></th>
                                                                <td rowspan="1">
                                                                    <%=  investigation_officer.officer_name  %><br>
                                                                    <%=  investigation_officer.officer_designation  %><br>
                                                                    <%=  investigation_officer.rank  %><br>
                                                                    <%=  investigation_officer.posting  %><br>
                                                                    <%=  investigation_officer.organization  %><br>
                                                                    <%=  investigation_officer.mobile_number  %>
                                                                </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <!--************************************************-->
                    <!--***********SECTION-5****************************-->
                    <!--************************************************-->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <img src="">
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <div style="min-height: 350px;">
                                    <section class="container">
                                        <div class="col-md-12">
                                            <div class="innerPage-box">
                                                <h3 class="innerPage-head" id="speciesdetails">
                                                    <?php echo trans("speciesdetails", 'en'); ?><br>

                                                    <?php echo trans("speciesdetails", 'bn'); ?>
                                                    <a href="#input-rescue-information" class="cancelBtn"><i class="fa fa-edit"></i>Edit</a>
                                                </h3>
                                                <div class="card">
                                                    <div class="card-body" style="table-layout: fixed;">
                                                    <table class="table inner-textfield" style="table-layout: fixed;">
                                                            <thead>
                                                                <tr>
                                                                <th></th>
                                                                    <th>নাম</th>
                                                                    <th>অবস্থা</th>
                                                                    <th>সাইটিস</th>
                                                                    <th>তফসিল</th>
                                                                    <th>আইইউসিএন</th>
                                                                    <th>ইউনিট/পরিমাণ</th>
                                                                    <th>আনুমানিক বাজার মূল্য</th>
                                                                    
                                                                   </tr>
                                                            </thead>
                                                       <tbody>
                                                           <% _.each(whole_species_list,function(item) { %>
                                                                <tr>
                                                                    <td></td>
                                                                    <td><%= item.static.english_name %><br><%= item.static.bangla_name %><br><i><%= item.static.scientific_name %></i></td>
                                                                    <td><%= item.live_dead %><br><%= item.age %><br><%= item.sex %><br><%= item.part_whole %></td>
                                                                    <td><%= item.static.CITES %></td>
                                                                    <td><%= item.static.schedule %></td>
                                                                    <td><%= item.static.IUCN %></td>
                                                                    <td><%= item.quantity %></td>
                                                                    <td><%= comma_seperate(item.estimated_value)  %></td>
                                                                    
                                                                </tr>
                                                            
                                                            <% }); %>
                                                        </tbody>
                                                    </table> 
                                                      
                                                        <table class="table inner-textfield" style="table-layout: fixed;">
                                                           <h3 class="innerPage-head" id="speciesdetails">
                                                           Seized Species (body-parts/whole)<br> জব্দকৃত প্রজাতি সমূহ (দেহাংশ/সম্পূর্ণ)</h3>
                                                            <thead>
                                                                
                                                                <tr>
                                                                    <th></th>      
                                                                    <th>নাম</th>
                                                                    <th>সাইটিস</th>
                                                                    <th>তফসিল</th>
                                                                    <th>আইইউসিএন</th>
                                                                    <th>দেহাংশ / ট্রফি / পণ্য এর নাম</th>
                                                                    <th>পরিমাণ</th>
                                                                    <th>আনুমানিক বাজার মূল্য</th>
                                                                    <th>দৈর্ঘ্য x প্রস্থ x উচ্চতা</th>
                                                                    <td></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <% _.each(bodypart_species_list,function(item_part) { %>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td><%= item_part.static.english_name %><br><%= item_part.static.bangla_name %><br><i><%= item_part.static.scientific_name %></i></td>
                                                                        <td><%= item_part.static.CITES %></td>
                                                                        <td><%= item_part.static.schedule %></td>
                                                                        <td><%= item_part.static.IUCN %></td>
                                                                        <td><%= item_part.trophy_name %></td>
                                                                        <td><%= item_part.quantity_nmbr %></td>
                                                                        <td><%= comma_seperate(item_part.estimated_value_tf)  %></td>
                                                                        <td><%= item_part.length %><br><%= item_part.width %><br><%= item_part.height %></td>
                                                                        </tr>
                                                                
                                                            <% }); %>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <!--************************************************-->
                    <!--***********SECTION-6****************************-->
                    <!--************************************************-->
                  
                    <!--************************************************-->
                    <!--***********SECTION-7****************************-->
                    <!--************************************************-->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <img src="">
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <div style="min-height: 350px;">
                                    <section class="container">
                                        <div class="col-md-12 col-md-12 col-sm-12">
                                            <div class="innerPage-box">
                                                <h3 class="innerPage-head">
                                                    <?php echo trans("accusedhead", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("accusedhead", 'bn'); ?>
                                                    <a href="#input-offender-profile" class="cancelBtn"><i class="fa fa-edit"></i>Edit</a>
                                                </h3>
                                                <div class="card">
                                                    <div class="card-body">
                                                    <table class="table inner-textfield" style="table-layout: fixed;">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>    
                                                            <th>নাম</th>
                                                            <th>পিতার নাম</th>
                                                            <th>মাতার নাম</th>
                                                            <th><?php echo trans("identity", 'bn'); ?></th>
                                                            <th>অভিযুক্ত প্রতিষ্ঠান</th>
                                                            <th>পেশা</th>
                                                            <th><?php echo trans("number", 'bn'); ?></th>
                                                            <th><?php echo trans("mobile", 'bn'); ?></th>
                                                            <th><?php echo trans("age", 'bn'); ?></th>
                                                            <th><?php echo trans("gender", 'bn'); ?></th>
                                                            <th><?php echo trans("pr-address", 'bn'); ?></th>
                                                            <th><?php echo trans("address", 'bn'); ?></th>
                                                            <th>অপরাধের পুনরাবৃত্তি</th>
                                                            <th><?php echo trans("note", 'bn'); ?></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <% _.each(offender,function(ioffender) { %> 
                                                                <tr>
                                                                    <td></td>
                                                                    <td><%= ioffender.name %></td>
                                                                    <td><%= ioffender.accused_company %></td>
                                                                    <td><%= ioffender.occupation %></td>
                                                                    <td><%= ioffender.fathers_name  %></td>
                                                                    <td><%= ioffender.mother_name  %></td>
                                                                    <td><%= ioffender.nationality    %></td>
                                                                    <td><%= ioffender.nid_number    %></td>
                                                                    <td><%= ioffender.mobile_number    %></td>
                                                                    <td><%= ioffender.age %></td>
                                                                    <td><%= ioffender.sex  %></td>
                                                                    <td><%= ioffender.present_address  %></td>
                                                                    <td><%= ioffender.permanent_address  %></td>
                                                                    <td><%= ioffender.repeated_offender  %></td>
                                                                    <td><%= ioffender.note  %></td>
                                                                </tr>
                                                            <% }); %>
                                                        </tbody>
                                                    </table>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <!--************************************************-->
                    <!--***********SECTION-8****************************-->
                    <!--************************************************-->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <img src="">
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <div style="min-height: 350px;">
                                    <section class="container">
                                        <div class="col-md-12">
                                            <div class="innerPage-box">
                                                <h3 class="innerPage-head">
                                                    <?php echo trans("wittness", 'en'); ?>
                                                    <br>
                                                    <?php echo trans("wittness", 'bn'); ?>
                                                    <a href="#input-witness-information" class="cancelBtn"><i class="fa fa-edit"></i>Edit
                                                    </a>
                                                </h3>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <table class="table inner-textfield" style="table-layout: fixed;">
                                                        <thead>
                                                            <tr rowspan="7">
                                                                <th>#</th>
                                                                <th><b><?php echo trans("witnessname", 'bn'); ?></b></th>
                                                                <th><b>পদবি</b></th>
                                                                <th><b><?php echo trans("gender", 'bn'); ?></b></th>
                                                                <th>মোবাইল নম্বর</th>
                                                                <th><b><?php echo trans("witness-address", 'bn'); ?></b></th>
                                                                <th><b><?php echo trans("note-2", 'bn'); ?></b></th>
                                                            </tr>
                                                        </thead>
                                                            <tbody>
                                                                <% _.each(witness,function(iwitness) { %> 
                                                                        <tr>
                                                                            <td></td>
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
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <!--************************************************-->
                <!--***********SECTION-9****************************-->
                <!--************************************************-->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <img src="">
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <div style="min-height: 350px;">
                                <section class="container">
                                    <div class="col-md-12">
                                        <div class="innerPage-box">
                                            <h3 class="innerPage-head">
                                                <?php echo trans("sampleinfo", 'en'); ?>
                                                <br>
                                                <?php echo trans("sampleinfo", 'bn'); ?>
                                                <a href="#input-sample-collection" class="cancelBtn"><i class="fa fa-edit"></i>Edit</a>
                                            </h3>
                                            <div class="card">
                                                <div class="card-body">
                                                <table class="table inner-textfield">
                                                      <thead>
                                                        <tr>
                                                            <th class="css-serial">#</th>
                                                            <th><?php echo trans("speciesname", 'bn'); ?></th>
                                                            <th><?php echo trans("code", 'bn'); ?></th>
                                                            <th><?php echo trans("sa_date", 'bn'); ?></th>
                                                            <th><?php echo trans("place", 'bn'); ?></th>
                                                            <th><?php echo trans("forensic-rp", 'bn'); ?></th>
                                                            <th><?php echo trans("rpdate", 'bn'); ?></th>                                                                                                                         
                                                        </tr>                          
                                                      </thead>                                              
                                                        <tbody>            
                                                            <% _.each(sample,function(isample) { %>            
                                                                <tr>           
                                                                   <tr>             
                                                                      <td></td>            
                                                                      <td><%= isample.species_name %></td>              
                                                                      <td><%= isample.code %></td>         
                                                                      <td><%= date_formater(isample.date_collection)  %></td>          
                                                                      <td><%= isample.collection_place  %></td>             
                                                                      <td><%= isample.forensic_report_generated  %></td>              
                                                                      <td><%= date_formater(isample.forensic_report_date)  %></td>              
                                                                         </tr>           
                                                                    </tr>                
                                                                <% }); %>                    
                                                            </tbody>                        
                                                        </table>                        
                                                    </div>                        
                                                </section>                            
                                            </div>                            
                                        </div>                            
                                    </div>                            
                                </div>                             
                                                        
                                                    
                                                
                                            
                <!--************************************************-->
                <!--***********SECTION-10****************************-->
                <!--************************************************-->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <img src="">
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <div style="min-height: 350px;">
                                <section class="container">
                                    <div class="col-md-12">
                                        <div class="innerPage-box">
                                            <h3 class="innerPage-head">
                                                <?php echo trans("dis-info", 'en'); ?>
                                                <br>
                                                <?php echo trans("dis-info", 'bn'); ?>
                                                <a href="#input-disposal-information" class="cancelBtn"><i class="fa fa-edit"></i>Edit</a>
                                            </h3>
                                            <div class="card">
                                                <div class="card-body">
                                                <table class="table inner-textfield">
                                                     <thead>
                                                        <tr>
                                                            <th><?php echo trans("sl", 'bn'); ?></th>
                                                            <th><?php echo trans("nis_c", 'bn'); ?></th>
                                                            <th><?php echo trans("sp_t_c", 'bn'); ?></th>
                                                            <th><?php echo trans("disposal-date", 'bn'); ?></th>
                                                            <th><?php echo trans("pl-dis", 'bn'); ?></th>
                                                            <th><?php echo trans("incharge", 'bn'); ?></th>
                                                            <th><?php echo trans("incharge", 'bn'); ?></th>                                
                                                            <th> নিষ্পত্তিকারী কর্মকর্তার পদবি </th>                                                                                                                                                                                                                             
                                                        </tr>
                                                    </thead>                        
                                                    <tbody>
                                                        <% _.each(disposal,function(idisposal) { %>
                                                            <tr>
                                                                <tr>
                                                                    <td><%= idisposal.sl %></td>
                                                                    <td><%= idisposal.mode %></td>
                                                                    <td><%= idisposal.name   %></td>
                                                                    <td><%= date_formater(idisposal.date)  %></td>
                                                                    <td><%= idisposal.place  %></td>
                                                                    <td><%= idisposal.incharge  %></td>
                                                                    <td><%= idisposal.incharge_designation  %></td>
                                                                    <td> <%= idisposal.incharge_workstation  %> </td>                                                                                                                                                                                                       
                                                                </tr>
                                                                    </tr>
                                                                        <% }); %>
                                                                            </tbody>                            
                                                                        </table>    
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                            
                                                                                        
                <!--************************************************-->
                <!--***********SECTION-11****************************-->
                <!--************************************************-->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <img src="">
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <div style="min-height: 350px;">
                                <section class="container">
                                    <div class="col-md-12">
                                        <div class="innerPage-box">
                                            <h3 class="innerPage-head">
                                                <?php echo trans("other-item", 'en'); ?>
                                                <br>
                                                <?php echo trans("other-item", 'bn'); ?>
                                                <a href="#other_seized_item" class="cancelBtn"><i class="fa fa-edit"></i>Edit</a>
                                            </h3>
                                            <div class="card">
                                                <div class="card-body">
                                                    <table class="table inner-textfield">
                                                        <thead>
                                                            <tr>
                                                              <th><b><?php echo trans("seiz-it", 'bn') ?></b></th>
                                                              <th><b><?php echo trans("typo", 'bn'); ?></b></th>
                                                              <th><b><?php echo trans("brand", 'bn'); ?></b></th>
                                                              <th><b><?php echo trans("model", 'bn'); ?></b></th>
                                                              <th><b><?php echo trans("reg", 'bn'); ?></b></th>
                                                              <th>যন্ত্রপাতি ইত্যাদি</th>
                                                              <th>পরিমাপ</th>
                                                              <th>পরিমান</th>
                                                              <th><b><?php echo trans("locat", 'bn'); ?></b></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <% _.each(items_seizure_list,function(sitems_seizure_list) { %>
                                                                <tr>
                                                                    <tr>
                                                                        <td><%= sitems_seizure_list.item_type %></td>
                                                                        <td><%= sitems_seizure_list.type %> <%= sitems_seizure_list.weapon_type %></td>
                                                                        <td><%= sitems_seizure_list.brand %> <%= sitems_seizure_list.weapon_brand %></td>
                                                                        <td><%= sitems_seizure_list.model_no %> <%= sitems_seizure_list.weapon_model %></td>
                                                                        <td><%= sitems_seizure_list.reg_no %> <%= sitems_seizure_list.weapon_reg_no %></td>
                                                                        <td><%= sitems_seizure_list.tools %> <%= sitems_seizure_list.traps %></td>
                                                                        <td><%= sitems_seizure_list.quantity_number_1 %>
                                                                            <br><%= sitems_seizure_list.quantity_gm_1 %>
                                                                            <br><%= sitems_seizure_list.quantity_ml_1 %></td>
                                                                        <td><%= sitems_seizure_list.measurement.measurement_length %>
                                                                            <br><%= sitems_seizure_list.measurement.measurement_width %>
                                                                            <br><%= sitems_seizure_list.measurement.measurement_height %></td>
                                                                        <td><%= sitems_seizure_list.seizure_location %></td>
                                                                    </tr>
                                                                </tr>
                                                                <% }); %> 
                                                                <thead>
                                                                    <tr>
                                                                        <th><b><?php echo trans("nm-cus", 'bn'); ?></b></th>
                                                                        <th><b><?php echo trans("cus-des", 'bn'); ?></b></th>
                                                                        <th><b><?php echo trans("add-cus", 'bn'); ?></b></th>
                                                                        <th><b><?php echo trans("phn-num", 'bn'); ?></b></th>
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
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                <!--************************************************-->
                <!--***********SECTION-12****************************-->
                <!--************************************************-->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <img src="">
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <div style="min-height: 350px;">
                                <section class="container">
                                    <div class="col-md-12">
                                        <div class="innerPage-box">
                                            <h3 class="innerPage-head">
                                            Other Seized Item(online/virtual)<br>
                                                 অন্যান্য জবকৃত(অনলাইন/ভার্চুয়াল)
                                                <a href="#video_file" class="cancelBtn"><i class="fa fa-edit"></i>Edit</a>
                                            </h3>
                                            <div class="card">
                                                <div class="card-body">
                                                <table class="table inner-textfield" style="table-layout: fixed;">
                                                    <thead>
                                                         <tr>
                                                            <th>#</th>
                                                            <th><b>Online/Virtual(Video)<br>(ভিডিও)</b></th>
                                                            <th><b>Location of Seizure<br>জব্দকরণের স্থান</th>
                                                            <th><b>Name of the Custodian<br>জিম্মাদার-এর নাম</b></th>
                                                            <th><b>Designation of the Custodian<br>জিম্মাদার-এর পেশা / পদবি</b></th>
                                                            <th><b>Address of the Custodian<br>জিম্মাদার-এর ঠিকানা</b></th>
                                                            <th><b>Mobile Number<br>মোবাইল নম্বর</b></th>
                                                        </tr> 
                                                    </thead>
                                                    <tbody>
                                                        <% _.each(online_seized_item,function(itemss_online_seized_item) { %>
                                                            <tr>
                                                                <tr>
                                                                    <td></td>
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
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!--************************************************-->
                <!--***********SECTION-13****************************-->
                <!--************************************************-->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <img src="">
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <div style="min-height: 350px;">
                                <section class="container">
                                    <div class="col-md-12">
                                        <div class="innerPage-box">
                                            <h3 class="innerPage-head">
                                                <?php echo trans("other", 'en'); ?>
                                                <br>
                                                <?php echo trans("other", 'bn'); ?>
                                                <a href="#other-details" class="cancelBtn"><i class="fa fa-edit"></i>Edit</a>
                                            </h3>
                                            <div class="card">
                                                <div class="card-body">
                                                    <table class="table inner-textfield">
                                                        <tbody>
                                                            <tr>
                                                                <td><b>উদ্ঘাটনের পদ্ধতি</b></td>
                                                                <td>
                                                                    <ul>
                                                                        <% _.each(others_info.discovering_method,function(off_type) { %>
                                                                        <li> <%= off_type %> </li>
                                                                        <% }); %>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><b><?php echo trans("in2", 'bn'); ?></b></td>
                                                                <td>
                                                                    <ul>
                                                                        <% _.each(others_info.mode_of_transport,function(off_type) { %>
                                                                        <li> <%= off_type %> </li>
                                                                        <% }); %>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><b><?php echo trans("in3", 'bn'); ?></b></td>
                                                                <td>
                                                                    <ul>
                                                                        <% _.each(others_info.concealment_method,function(off_type) { %>
                                                                        <li> <%= off_type %> </li>
                                                                        <% }); %>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><b><?php echo trans("in4", 'bn'); ?></b></td>
                                                                <td><%=  others_info.alleged_country  %></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b><?php echo trans("in5", 'bn'); ?></b></td>
                                                                <td><%=  others_info.transition_country  %></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b><?php echo trans("in6", 'bn'); ?></b></td>
                                                                <td><%=  others_info.destination_contry  %></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b><?php echo trans("in7", 'bn'); ?></b></td>
                                                                <td><%=  others_info.reason_for_seizure  %></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b><?php echo trans("fine", 'bn'); ?></b></td>
                                                                <td><%=  comma_seperate(others_info.penalties.fine)  %></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b><?php echo trans("pelan", 'bn'); ?></b></td>
                                                                <td><%=  others_info.penalties.imprisonment  %></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div>
                                <a class="listinBtn pull-left" id="saved">Save সংরক্ষণ করুন</a>
                                <!--<a href="" class="listinBtn" data-toggle="modal" data-target="#AddMoreSpeciesAlert">Next1</a>-->
                                <a class="listinBtn" id="published">Publish প্রকাশ করুন</a>
                            </div>
                            <div class="control-sidebar-bg"></div>