<div class="row speciesDetails" id="btnclick">
    <div class="col-md-12">
        <a class="btn btn-danger pull-right delete_item" data-index="">x</a>
    </div>

    <div>

        <div class="col-md-4">

            <a data-fancybox href="https://wcs.softlh.com/species-image/<%= static.id %>.webp"><img
                    src="https://wcs.softlh.com/species-image/<%= static.id %>.webp" class="img-responsive speciesimg"
                    alt="" style="height:100px; width:100px;"></a>
        </div>
        <div class="col-md-8">
            <div class="row m-b-20">
                <div class="col-md-6"><strong>Name নাম:</strong></div>
                <div class="col-md-6"><%= static.english_name %> <%= static.bangla_name %> </div>
            </div>
            <div class="row m-b-20">
                <div class="col-md-6"><strong>Scientific name বৈজ্ঞানিক নাম:</strong></div>
                <div class="col-md-6"><i><%= static.scientific_name %></i></div>
            </div>

            <div class="row m-b-20">
                <div class="col-md-6"><strong>IUCN <br>আইইউসিএন: </strong></div>
                <div class="col-md-6"><%= static.IUCN %> <br> <%= static.IUCN_bn %></div>

            </div>
            <div class="row m-b-20" id="demo">

                <div class="col-md-6"><strong>CITES <br>সাইটিস</strong></div>
                <div class="circle"><%= static.CITES %> <br> <%= static.CITES_bn %> </div>
            </div>
            <div class="row m-b-20" id="demo">
                <div class="col-md-6"><strong>Schedule <br> তফসিল</strong></div>
                <div class="square"><%= static.schedule %> <br> <%= static.schedule_bn %> </div>
                <!-- <div class="leaf"></div> -->
            </div>
            <div class="row m-b-20" id="demo">
                <div class="col-md-6"> Live/dead</div>
                <div class="square"><%= live_dead %></div>
                <!-- <div class="leaf"></div> -->
            </div>
            <div class="row m-b-20" id="demo">
                <div class="col-md-6"> Part/whole</div>
                <div class="square"><%= part_whole %></div>
                <!-- <div class="leaf"></div> -->
            </div>
            <div class="row m-b-20" id="demo">
                <div class="col-md-6"> Age</div>
                <div class="square"><%= age %></div>
                <!-- <div class="leaf"></div> -->
            </div>
            <div class="row m-b-20" id="demo">
                <div class="col-md-6">Sex </div>
                <div class="square"><%= sex %></div>
                <!-- <div class="leaf"></div> -->
            </div>
            <div class="row m-b-20" id="demo">
                <div class="col-md-6">Quantity</div>
                <div class="square"><%= quantity %></div>
                <!-- <div class="leaf"></div> -->
            </div>
            <div class="row m-b-20" id="demo">
                <div class="col-md-6">Value</div>
                <div class="square"><%= estimated_value %></div>
                
            </div>


        </div>
    </div>
</div>