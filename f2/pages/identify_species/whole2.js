console.log('00000000000000000000000000section-1');
$(document).ready(function () {



$("input[type=radio].wholeSelect").change(function () {
            var selectedWhole = $(this).val();
            //alert(selectedWhole);
            console.log(selectedWhole );
            if(selectedWhole=="amphibians"){
                
                $(".birdVal").hide();
                $(".fftVal").hide();
                $(".marineval").hide();
                $(".lizardVal").hide();
                $(".mammalVal").hide();
                $(".snakeVal").hide();
                
                
                $("#amphibiansSelect").show();
                $(".commonPart").hide();
            }
            
            if(selectedWhole=="fft"){
                
                $(".amphibianVal").hide();
                $(".birdVal").hide();
                $(".marineval").hide();
                $(".lizardVal").hide();
                $(".mammalVal").hide();
                $(".snakeVal").hide();
                
                
                $(".inputWholeSelect").show();
                $(".commonPart").hide();
                $("#birdsLiveMeat").hide();
                $("#birdmeatradio").hide();
            }
            $(".fftInput").change(function () {
            var fftInput = $('.fftInput:checked').val();
            if(fftInput == "Live"){
              $("#liveInput").show();  
              $("#customDiv").hide();  
              $("#meatEggsDiv").hide(); 
              $(".commonPart").hide();
            }
            if(fftInput == "Meat_eggs"){
              $("#liveInput").hide();  
              $("#wlpaSelectDiv").hide();
              $("#customDiv").hide();
               $("#meatEggsDiv").show();
               $(".commonPart").hide();
            }
            });
             $(".liveInput").change(function () {
            var liveInput = $('.liveInput:checked').val();
           // alert(liveInput);
            if(liveInput == "Wlpa"){
                $("#wlpaSelectDiv").show();
                $("#customDiv").hide();
                $(".commonPart").hide();
            }
            if(liveInput == "Customs"){
                $("#wlpaSelectDiv").hide();
                $("#customDiv").show();
                $(".commonPart").hide();
               
                
            }
            
             });
             
            if(selectedWhole=="marine"){
                
                $(".amphibianVal").hide();
                $(".birdVal").hide();
                $(".fftVal").hide();
                $(".lizardVal").hide();
                $(".mammalVal").hide();
                $(".snakeVal").hide();   
                
            $(".inputWholeSelect").hide();
            $("#marineDiv").show();
            $("#liveInput").hide();
            $("#customDiv").hide();
            $(".commonPart").hide();
            }
            
            
            
            
             if(selectedWhole=="lizard"){
                 
                 $(".amphibianVal").hide();
                    $(".birdVal").hide();
                    $(".fftVal").hide();
                    $(".marineval").hide();
                    $(".mammalVal").hide();
                    $(".snakeVal").hide();
                 
                 
                 $("#marineDiv").hide();
                 $("#lizardDiv").show();
                 $(".commonPart").hide();
             }
             
            $(".lizardSelect").change(function () {
            var lizardSelect = $('.lizardSelect:checked').val();
           // alert(liveInput);
            if(lizardSelect == "Live"){
              $("#lizardInput").show();
              $(".commonPart").hide();
            }
            if(lizardSelect == "Meat"){
               
               $("#lizardInput").hide();
               $("#maetInputDiv").show();
               $("#customInput").hide();
               $(".commonPart").hide();
               $("#wlpaInput").hide();
                
            }
            
             });
             
            $(".lizardradio").change(function () {
            var lizardradio = $('.lizardradio:checked').val();
           // alert(lizardradio);
            if(lizardradio == "Custom"){
              $("#customInput").show();
              $("#maetInputDiv").hide();
              $(".commonPart").hide();
              $("#wlpaInput").hide();
            }
            if(lizardradio == "Wlpa"){
              $("#wlpaInput").show();
              $("#customInput").hide();
              $(".commonPart").hide();
            }
            
            
             });
             
             if(selectedWhole=="birds"){
                 
                $(".amphibianVal").hide();
                $(".fftVal").hide();
                $(".marineval").hide();
                $(".lizardVal").hide();
                $(".mammalVal").hide();
                $(".snakeVal").hide();
                 
                 
                 
                $("#liveInput").hide();
                $("#wlpaSelectDiv").hide();
                $("#customDiv").hide();
                $("#meatEggsDiv").hide();
                $("#marineDiv").hide();
                $("#wlpaInput").hide();
                $("#maetInputDiv").hide();
                $("#birdsSelect").hide();
                $("#birdsLiveMeat").show();
                $(".commonPart").hide();
                $("#amphibiansSelect").hide();
                
              }
            
            //function to select bird live|meat radio button
            $(".birdslivemeatradio").change(function () {
            var birdslivemeatradio = $('.birdslivemeatradio:checked').val();
            if(birdslivemeatradio == "live"){
                //alert('live');
              $("#birdsSelect").show();
              $("#wlpaSize").hide();
              $("#wlpaLarge").hide();
              $("#wlpaMedium").hide();
              $("#birdmeatradio").hide();
              $("#birdslivemeatradio").hide();
             
            }
           if(birdslivemeatradio == "meat"){
               //alert('meat');
                $("#birdsSelect").hide();
                $("#wlpaSize").hide();
                $("#birdsLarge").hide();
                $("#birdsCustom").hide();
                $("#wlpaLarge").hide();
                $("#birdsSmallSelect").hide();
                $("#birdsLargeSelect").hide();
                $("#birdmeatradio").show();
                $("#wlpaMediumSelect").hide();
                $("#birdslivemeatradio").show();
                $("#wlpaSmall").hide();
                $("#wlpaSmallowl").hide();

                
            }
            });
            
            
            $(".birdsSelectradio").change(function () {
            var birdsSelectradio = $('.birdsSelectradio:checked').val();
            if(birdsSelectradio == "Wlpa"){
              $("#wlpaSize").show();
              $("#birdsCustom").hide();
              $(".commonPart").hide();
            }
           if(birdsSelectradio == "Customs"){
                $("#wlpaSize").hide();
                $("#wlpaLarge").hide();
                $("#wlpaMedium").hide();
                $("#birdsCustom").show();
                $(".commonPart").hide();
                $("#wlpaSmall").hide();
            }
            });
            
            $(".wlpaSizeRadio").change(function () {
            var wlpaSizeRadio = $('.wlpaSizeRadio:checked').val();
            if(wlpaSizeRadio == "Small"){
             $("#wlpaSmall").show();
             $("#wlpaMedium").hide();
             $("#wlpaLarge").hide();
             $(".commonPart").hide();
            }
            if(wlpaSizeRadio == "Medium"){
             $("#wlpaSmall").hide();
             $("#wlpaLarge").hide();
             $("#wlpaMedium").show();
             $(".commonPart").hide();
            }
            if(wlpaSizeRadio == "Large"){
             $("#wlpaSmall").hide();
             $("#wlpaMedium").hide();
             $("#wlpaLarge").show();
             $(".commonPart").hide();
            }
            
            
             });
             
             //BIRD CUSTOM
            $(".birdsCustomRadio").change(function () {
            var birdsCustomRadio = $('.birdsCustomRadio:checked').val();
            if(birdsCustomRadio == "Small"){
                $("#birdsSmallSelect").show();
                $("#birdsMediumSelect").hide();
                $("#birdsLargeSelect").hide();
                $(".commonPart").hide();

            }
            if(birdsCustomRadio == "Medium"){
                $("#birdsSmallSelect").hide();
                $("#birdsMediumSelect").show();
                $("#birdsLargeSelect").hide();
                $(".commonPart").hide();
            }
            if(birdsCustomRadio == "Large"){
                $("#birdsSmallSelect").hide();
                $("#birdsMediumSelect").hide();
                $("#birdsLargeSelect").show();
                $(".commonPart").hide();
            }
            
            
             });
             
             //Mammals selection
             if(selectedWhole=="mammals"){
                 //alert('hi');
                $(".amphibianVal").hide();
                $(".birdVal").hide();
                $(".fftVal").hide();
                $(".marineval").hide();
                $(".lizardVal").hide();
                $(".snakeVal").hide(); 
                 
                $("#birdsSmallSelect").hide();
                $("#birdsMediumSelect").hide();
                $("#birdsLargeSelect").hide();
                $("#birdsSelect").hide();
                $("#mammalsSelect").show();
                $(".commonPart").hide();
             }
             
             $(".mammalRadio").change(function () {
            var mammalRadio = $('.mammalRadio:checked').val();
            if(mammalRadio == "Live"){
                $("#mammalsLive").show();
                 $("#mammalsMeat").hide(); 
                 $("#Small_MammalsSelect").hide(); 
                 $(".commonPart").hide();
               

            }
            if(mammalRadio == "Meat"){
               $("#mammalsLive").hide(); 
               $("#mammalsMeat").show(); 
               $("#mammalsLiveWlpa").hide(); 
               $(".commonPart").hide();
                
                
            }

             });
             
             
             $(".mammalsMeatRadio").change(function () {
            var mammalsMeatRadio = $('.mammalsMeatRadio:checked').val();
            if(mammalsMeatRadio == "Civets"){
            $("#UngulatesSelect").hide();
            $("#Small_MammalsSelect").hide();
            $(".commonPart").hide();
            }
            if(mammalsMeatRadio == "Ungulates"){
                $("#UngulatesSelect").show();
                $("#Small_MammalsSelect").hide();
                $(".commonPart").hide();
            }
            if(mammalsMeatRadio == "Small_Mammals"){
                $("#UngulatesSelect").hide();
                $("#Small_MammalsSelect").show();
                $(".commonPart").hide();
            }
             });
             
             
             $(".mammalsLiveRadio").change(function () {
            var mammalsLiveRadio = $('.mammalsLiveRadio:checked').val();
            if(mammalsLiveRadio == "Wlpa"){
                //alert('hi');
                $("#mammalsLiveWlpa").show();
                $("#mammalsLiveCustom").hide();
                $(".commonPart").hide();
                
            
            }
            
            if(mammalsLiveRadio == "Customs"){
                $("#mammalsLiveWlpa").hide();
                $("#mammalsLiveCustom").show();
                $(".commonPart").hide();
                //alert('hi');
                
            
            }
           
             });
             
       //Snakes selection
             if(selectedWhole=="snakes"){
             $(".amphibianVal").hide();
            $(".birdVal").hide();
            $(".fftVal").hide();
            $(".marineval").hide();
            $(".lizardVal").hide();
            $(".mammalVal").hide();   
             $("#maetInputDiv").hide();
             $("#mammalsLiveWlpa").hide();
             $("#mammalsLiveCustom").hide();
             $("#UngulatesSelect").hide();
             $("#Small_MammalsSelect").hide();
             $("#mammalsLive").hide(); 
             $("#mammalsMeat").hide(); 
             $("#mammalsLiveWlpa").hide(); 
             $("#mammalsSelect").hide(); 
             $("#snakesSelect").hide();
             $("#snakeLiveMeatSelect").show();
             $(".commonPart").hide();
                // alert('hi');
             }      
         $(".snakeLiveMeatRadio").change(function () {
               
            var snakeslivemeatradio = $('.snakeLiveMeatRadio:checked').val();
            //alert(snakeslivemeatradio);
            
            if(snakeslivemeatradio == "live"){
                $("#snakesSelect").show();
                $(".commonPart").hide();
                $("#snakeMeatSelect").hide();
            }
            if(snakeslivemeatradio == "meat"){
               // alert('meat');
                $("#snakeMeatSelect").show();   
                $("#snakesCustom").hide();
                $(".commonPart").hide();
                $("#snakesSelect").hide();
                $("#snakesLiveWlpa").hide();
                $("#snakesCustom").hide();
            }
           });   
           
         $(".snakesradio").change(function () {
            var snakesradio = $('.snakesradio:checked').val();
            if(snakesradio == "Customs"){
                //alert('hi');
                $("#snakesCustom").show();
                $("#snakesLiveWlpa").hide();
                $(".commonPart").hide();
            }
            if(snakesradio == "Wlpa"){
                //alert('hi');
                $("#snakesCustom").hide();
                $("#snakesLiveWlpa").show();
                $(".commonPart").hide();
            }
           });   
           
           $(".snakesLiveWlpa").change(function () {
            var snakesLiveWlpa = $('.snakesLiveWlpa:checked').val();
            if(snakesLiveWlpa == "Colubridae"){
                //alert('hi');
             $("#ColubridaeSelect").show();
             $(".commonPart").hide();
            
            }else{
                
            $("#ColubridaeSelect").hide();    
            $(".commonPart").hide();
                
            }
            
            
           
             });
            //in caes of marinselect 
            $(".marineSelect").click(function () {
            var marineSelect = $("input[name='marineSelect']:checked").val();
            if(marineSelect=="Coral"){
               $("#marineCorla").show();
            }else{
              $("#marineCorla").hide();  
            }
            });
             
             
});
});
