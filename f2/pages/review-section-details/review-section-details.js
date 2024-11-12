route['review-section-details'] = function () {

    function review_details() {

       

        // console.log(wlor_user_input);

        // wlor_user_input = _.clone(model_wlor_user_input);
        // wlor_user_input.species_list =[{

                    
        //     age: "Adult",
        //     estimated_value: "11",
        //     id: "",
        //     live_dead: "Live",
        //     quantity: "537",
        //     sex: "Others",
        //     static:{


        //         CITES: "Not listed",
        //         Group: "Amphibia",
        //         IUCN: undefined,
        //         alt_scientific_name: "",
        //         bangla_name: "শ্রীলংকান ভ্যাঁপু ব্যাঙ/ শ্রীলংকান সোনা ব্যাঙ",
        //         english_name: "Srilankan Painted Bull Frog",
        //         id: 10,
        //         part: "",
        //         schedule: "Schedule 1",
        //         scientific_name: "Kaloula taprobanica",
        //         scientific_ref: "Parker, 1935",
        //         subspecies: "",
        //         trade_for: "",
        //         type: "Native",
        //     }
        // }
        // ]

        var getstring = $("#pg_" + 'review-section-details_1').html();

        var mytemplates = _.template(getstring);
        // wlor_user_input.reporting.officer.name = 'Nafis Ahmad';


        $('#dynamic_datas').html(mytemplates(wlor_user_input));

    }
    function initialpage() {
        review_details();
        previousPage ='review-section-details';
    }

    initialpage();
 
    $('#saved').on('click',function(){
       
        fire('wlor_save');
        gonxt('my_wlor_list');
     });

    $('#published').on('click',function(){
       
       fire('wlor_publish');
        gonxt('wlor_list');
    });
    $('tbody:not(:has(*))').closest('table').hide();
      
};

