<style>
.bar-chart {
    min-height: 450px;
}
</style>

<!-----------#####################MULTIPLE IMAGE PREVIEW JS#########---->
<div class="content-wrapper" style="min-height: 901px;">
    <section class="container">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="innerPage-box">
                        <h3 class="innerPage-head " id="officerhead">
                            Report Generation <br> প্রতিবেদন তৈরি
                        </h3>
                        <form id="commentForm" class="inputs-p10  " method="post" action="#populate"
                            enctype="multipart/form-data">
                            <div class="form-row">
                                <!-- FIRST SECTION CODE EXECUTE WITHOUT SESSION---------->
                                <div class="input_fields_wrap ">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group col-md-12">
                                                <label class="inner-label" id="">
                                                    Select the report <br> প্রতিবেদন বাছাই করুন
                                                </label>
                                                <div class="form-group col-md-12 ">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label style="font-size: 18px;">Starting date শুরুর
                                                                তারিখ</label>
                                                            <input type="date" class="form-control inner-textfield" id="start_date" name="start_date" value="2022-07-22" required />
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label style="font-size: 18px;">Ending date শেষের তারিখ</label>
                                                            <input type="date" class="form-control inner-textfield" id="end_date" name="end_date" required
                                                                value="2022-12-02">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label style="font-size: 18px;">Division  </label>
                                                                <select style="height:45px;color:#009472 !important" class="form-control inner-textfield" id="division" name="division" data-key="division"></select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label style="font-size: 18px;">District  </label>
                                                                <select style="height:45px;color:#009472 !important" class="form-control inner-textfield" id="district" name="district" data-key="district"></select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label style="font-size: 18px;">Upzilla  </label>
                                                                <select style="height:45px;color:#009472 !important" class="form-control inner-textfield" id="upzilla" name="upzilla" data-key="upzilla"></select>  
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label style="font-size: 18px;">Agency / Organization </label>
                                                                <select style="height:45px;color:#009472 !important" class="form-control inner-textfield" id="organization" name="organization" data-key="organization"></select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label style="font-size: 18px;"> Species  </label>
                                                                <select style="height:45px;color:#009472 !important" class="form-control inner-textfield" id="species" name="species" data-key="species"></select>
                                                        </div>
                                                        </div>
                                                        <div></div>
                                                    <div class="form-group col-md-12 ">
                                                    
                                                        
                                                       

                                                        
                                                        
                                                        
                                                    </div>
                                                    <div></div>
                                                    <div class="form-group col-md-12 ">
                                                    
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-7" style="text-align:center">
                                                    <input class="btn btn-primary" style="font-size: 18px; float:right"
                                                        value="Search" id="search" readonly />
                                                </div>
                                            </div>





                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>Offence detected by agencies and divisions</b></h3>
                                            </label>
                                            <table id="report_data" class="table" style="font-size: 20px;">

                                                </tbody>
                                            </table>
                                            <div id="chart_offence_detected_in_divisions" class="bar-chart"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>Offence detected by agencies and districts</b></h3>
                                            </label>
                                            <table id="report_data_district" class="table" style="font-size: 20px;">


                                            </table>
                                            <div id="chart_offence_detected_in_district" class="bar-chart"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>Offence detected by agencies and offence types</b></h3>
                                            </label>
                                            <table id="report_data_offence" class="table" style="font-size: 20px;">

                                            </table>
                                            <div id="chart_offence_type" class="bar-chart"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>Prosecution action by agencies</b></h3>
                                            </label>

                                            <table id="report_data_prosecution" class="table" style="font-size: 20px;">
                                            </table>
                                            <div id="chart_prosecution" class="bar-chart"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>Monthly incidents recorded by agencies</b></h3>
                                            </label>

                                            <table id="report_data_monthly" class="table" style="font-size: 20px;">


                                            </table>
                                            <div id="chart_monthly" class="bar-chart"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>Yearly incidents recorded by agencies</b></h3>
                                            </label>

                                            <table id="report_data_yearly" class="table" style="font-size: 20px;">

                                            </table>
                                            <div id="chart_yearly" class="bar-chart"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>Live wildlife species seized by agencies</b></h3>
                                            </label>

                                            <table id="report_data_live" class="table" style="font-size: 20px;">
                                 
                                            </table>
                                            <div id="chart_live" class="bar-chart"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>Dead wildlife species seized by agencies</b></h3>
                                            </label>

                                            <table id="report_data_dead" class="table" style="font-size: 20px;">
                                               
                                            </table>
                                            <div id="chart_dead" class="bar-chart"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>Wildlife trophy/body part seized by agencies</b></h3>
                                            </label>

                                            <table id="report_data_part" class="table" style="font-size: 20px;">

                                            </table>
                                            <div id="chart_part_seized" class="bar-chart"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>Plant or plant part seized by agencies</b></h3>
                                            </label>

                                            <table id="report_data_plant_seized" class="table" style="font-size: 20px;">
                                                
                                            </table>
                                            <div id="chart_plant_seized" class="bar-chart"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>Fate of live animal confiscated/siezed</b></h3>
                                            </label>

                                            <table id="report_data_fate" class="table" style="font-size: 20px;">
                                               
                                            </table>
                                            <div id="chart_fate" class="bar-chart"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>Disposal details of confiscated/siezed specimen(s)</b></h3>
                                            </label>

                                            <table id="report_data_disposal" class="table" style="font-size: 20px;">
                                               
                                            </table>
                                            <div id="chart_disposal" class="bar-chart"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>Sample collection details (confiscated/siezed specimen)</b></h3>
                                            </label>

                                            <table id="report_data_sample" class="table" style="font-size: 20px;">
                                               
                                            </table>
                                            <div id="chart_sample" class="bar-chart"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>Detected officers and offence type</b></h3>
                                            </label>

                                            <table id="report_data_officer" class="table" style="font-size: 20px;">
                                               
                                            </table>
                                            <div id="chart_officer" class="bar-chart"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>Conservation status of siezed Live animal </b></h3>
                                            </label>

                                            <table id="report_data_conservation" class="table" style="font-size: 20px;">
                                               
                                            </table>
                                            <div id="chart_conservation" class="bar-chart"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>CITES Appendices and number of confiscated specimens</b></h3>
                                            </label>

                                            <table id="report_data_cities" class="table" style="font-size: 20px;">
                                               
                                            </table>
                                            <div id="chart_cities" class="bar-chart"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>IUCN global status and number of confiscated specimens</b></h3>
                                            </label>

                                            <table id="report_data_iucn" class="table" style="font-size: 20px;">
                                               
                                            </table>
                                            <div id="chart_iucn" class="bar-chart"></div>
                                        </div>
                                    </div>
                                    <!-- <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>Arrested offender details</b></h3>
                                            </label>

                                            <table class="table" style="font-size: 20px;">
                                                <thead>
                                                    <tr id="report_data_offender_details">

                                                    </tr>

                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div> -->
                                    <!-- <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>Number of arrested offenders and divisions</b></h3>
                                            </label>

                                            <table class="table" style="font-size: 20px;">
                                                <thead>
                                                    <tr id="report_data_offender_division">

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>Number of arrested offenders and districts by agencies</b></h3>
                                            </label>

                                            <table class="table" style="font-size: 20px;">
                                                <thead>
                                                    <tr id="report_data_offender_district">

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>List of seized vehicle/weapons/tools/traps/guns etc and numbers
                                                        by agencies</b></h3>
                                            </label>

                                            <table class="table" style="font-size: 20px;">
                                                <thead>
                                                    <tr id="report_data_item">

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>


                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="inner-label">
                                                <h3><b>Offence detection and penalty detail</b></h3>
                                            </label>

                                            <table class="table" style="font-size: 20px;">
                                                <thead>
                                                    <tr id="report_data_seizeditem">

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>


                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> -->
                                </div>
                               
                            </div>
                        </form>
                        <a class="listinBtn pull-left" onclick="window.history.go(-1); return false;"
                                    style="cursor: pointer;"><b><?php echo trans("back", 'en'); ?>
                                        <?php echo trans("back", 'bn'); ?></b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="control-sidebar-bg"></div>
</div>
