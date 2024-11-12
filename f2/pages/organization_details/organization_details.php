<div class="content-wrapper" style="min-height: 901px;">
    <!-- <div class="card-body"> -->
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="innerPage-box">
                <div>
                    <a class="listinBtn org_next" id="">
                        <b><?php echo trans("next", 'en'); ?>
                            <?php echo trans("next", 'bn'); ?></b>
                    </a>
                </div>
                <div class="topnav">
                        <a class="navbar" >1/13</a>
                    </div>

                
                    <h3 class="innerPage-head" id="organization_info">
                        <?php echo trans("organization_info", 'en'); ?><br>
                        <?php echo trans("organization_info", 'bn'); ?>
                    </h3>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered inner-textfield" style="table-layout: fixed;">
                                <form class="inputs-p10 " id="commentForm" method="post" action="" enctype="multipart/form-data">

                                    <tr>
                                        <th id="organization_name ">
                                            <?php echo trans("organization_name", 'en'); ?><br>

                                            <?php echo trans("organization_name", 'bn'); ?><span style="height:45px;color:#FF0000 !important">*</span>
                                        </th>
                                        <td><select class="form-control inner-textfield" id="organization_name" name="organization_name" data-key="reporting.officer.organization_name" required >
                                            <option></option>
                                        </select></td>
                                    </tr>
                                    <tr class="msl_event_types">
                                        <th>Forest Division/unit <sub> (For BFD only)</sub><br>ফরেস্ট ডিভিশন/ইউনিট
                                        <sub>( শুধুমাত্র বন অধিদপ্তরের জন্য)</sub></th>
                                        
                                        <td>
                                            
                                            <select id="for_fd" class="form-control inner-textfield" name="for_fd" data-key="reporting.officer.for_fd">
                                            <option></option>
                                        </select></td>
                                    </tr>
                                    <tr>
                                        <th id="reporting-officername">
                                            <?php echo trans("reporting-officername", 'en'); ?><br>

                                            কেস রিপোর্টিং কর্মকর্তার নাম<span style="height:45px;color:#FF0000 !important">*</span>
                                        </th>
                                        <td><input placeholder="" name="reporting_officer" id="reporting_officer" type="text" value="" class="form-control inner-textfield" required data-key="reporting.officer.name" style="text-transform:capitalize;" /></td>
                                    </tr>
                                    <tr>
                                        <th>
                                        Case reporting officer's designation
                                            <?php // echo trans("officer_designation", 'en'); ?><br>

                                            রিপোর্টিং কর্মকর্তার পদবি<span style="height:45px;color:#FF0000 !important">*</span>
                                        </th>
                                        <td><select id="officer_designation" class="form-control inner-textfield" name="officer_designation" data-key="reporting.officer.officer_designation" required >
                                            <option></option>
                                        </select></td>
                                    </tr>
                                    <tr>
                                        <th id="reporting-officername">
                                        Case reporting officer's workstation
                                            <?php // echo trans("reporting-officername", 'en'); ?><br>

                                            কেস রিপোর্টিং কর্মকর্তার কর্মস্থল 
                                        </th>
                                        <td><input  name="reporting_officer_workstation" id="reporting_officer_workstation" type="text" value="" class="form-control inner-textfield"  data-key="reporting.officer.workstation" style="text-transform:capitalize;" /></td>
                                    </tr>
                                    <tr id="officer_phnnum">
                                        <th>
                                            <?php echo trans("officer_phnnum", 'en'); ?><br>

                                            <?php echo trans("officer_phnnum", 'bn'); ?><span style="height:45px;color:#FF0000 !important">*</span>
                                        </th>
                                        <td><input type="number"  name="officer_phn" value="" class="form-control inner-textfield" id="officer_phn" data-key="reporting.officer.phone" maxlength="11"  required /></td>
                                    </tr>
                                    <tr>
                                        <th id="officers_email">
                                            <?php echo trans("officers_email", 'en'); ?><br>

                                            <?php echo trans("officers_email", 'bn'); ?><span style="height:45px;color:#FF0000 !important">*</span>
                                        </th>
                                        <td><input placeholder="" name="email" id="email" type="email" value="" class="form-control inner-textfield" data-key="reporting.officer.email" required /></td>
                                    </tr>
                                    <tr>
                                        <th id="reporting_number">
                                        Report number
                                            <?php // echo trans("reporting_number", 'en'); ?><br>
                                            রিপোর্ট নম্বর
                                            <?php // echo trans("reporting_number", 'bn'); ?><span style="height:45px;color:#FF0000 !important">*</span>
                                        </th>
                                        <td><input placeholder="" name="rprt_number" id="rprt_number" data-key="reporting.report.no" type="text"  value="" class="form-control inner-textfield" required /></td>
                                    </tr>
                                    <tr>
                                        <th id="reporting_date">
                                            <?php echo trans("reporting_date", 'en'); ?><br>

                                            রিপোর্টিং তারিখ 
                                        </th>
                                        <td><input  data-date-format="DD MMMM YYYY" name="rprt_date" id="rprt_date" data-key="reporting.report.date" type="date"  class="form-control inner-textfield"  readonly /></td>
                                    </tr>
                                </form>
                            </table>
                            <div>
                                <a class="listinBtn org_next" id="">
                                    <b><?php echo trans("next", 'en'); ?>
                                        <?php echo trans("next", 'bn'); ?></b>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<div class="control-sidebar-bg"></div>
<!-- <script>

</script> -->