route ['annual_report'] = function(){
  
  
    fire('annual_report_get_all');
    
    listen('get_all_annual_report', function(event, d_list_data){
    console.log('data ?? found..', d_list_data);

    var data_for_table = [];


    var meta = {
        jq_id: '#report_data',
        tbl_squence:['Species','organization_name','alleged_country','other_note','location_details', 'mode','nationality','live_dead','quantity','estimated_value','law_sections', 'discovering_method','mode_of_transport','concealment_method',
            'reason_for_seizure', 'destination_contry','transition_country',],
        tbl_titles: {
            'Species':'Species',
            'organization_name':'Detecting agency',
            'alleged_country':'Alleged country of origin',
            'other_note':'Additional information*',
            'location_details':'Location of incident',
            'mode':'Disposal of confiscated specimens',
            'nationality':'Nationality of offenders',
            'live_dead':'Description of specimen',
            'quantity':'Quantity',
            'estimated_value':'Estimated value in country(amount and currency)',
            'law_sections': 'Law under which charges were brought',
            'discovering_method':'Method of detection',
            'mode_of_transport':'Mode of transport',
            'concealment_method':'Method of concealment',
            'reason_for_seizure': 'Reason for seizure',
            'destination_contry':'Alleged final destination',
            'transition_country':'Country(ies) of transit',
        }
    };
  
  
  var temp_json;
  _.each(d_list_data, function(item){
        console.log('---------',item);
  
    var law = _.isUndefined(item.law_sections);
    temp_json = {
        Species: item.Species,
        organization_name:item.organization_name,
        alleged_country: item.alleged_country,
        other_note: item.other_note,
        location_details: item.location_details,
        mode:item.mode,
        nationality:item.nationality,
        live_dead:item.live_dead,
        quantity:item.quantity,
        estimated_value:item.estimated_value,
        law:item.law,
        discovering_method:item.discovering_method,
        mode_of_transport:item.mode_of_transport,
        concealment_method:item.concealment_method,
        reason_for_seizure:item.reason_for_seizure,
        destination_contry:item.destination_contry,
        transition_country:item.transition_country,   
    };
  
    data_for_table.push(temp_json);
  
  });
  
  
  table_populate(meta, data_for_table);


  });
  function make_pdf(){
    $("#pdf").on("click",function () {
        html2canvas($('#tab')[0], {
            onrendered: function (canvas) {
                var data = canvas.toDataURL();
                var docDefinition = {
                    content: [{
                        image: data,
                        width: 500
                    }]
                };
                pdfMake.createPdf(docDefinition).download("cites-annual-report.pdf");
            }
        });
    });
  }
  make_pdf();
  $("#export").click(function(){
      $("table").tableToCSV();
    });

  }