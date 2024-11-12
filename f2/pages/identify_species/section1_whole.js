

$(document).ready(function () {

    console.log('00000000000000000000000000section-1');
    

$(".whole").click(function () {
    //alert('hi');
    $("#whole").fadeIn();
    $("#skin").fadeOut();
     $("#wholeSelectDrop").show();
     $(".commonPart").hide();
});

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
                    
                    
                    $("#wlpaSelectDiv").show();
                    $(".commonPart").hide();
                    $("#birdsLiveMeat").hide();
                    $("#birdmeatradio").hide();
                }
              //   $(".fftInput").change(function () {
              //   var fftInput = $('.fftInput:checked').val();
              //   if(fftInput == "Live"){
              //     $("#liveInput").show();  
              //     $("#customDiv").hide();  
              //     $("#meatEggsDiv").hide(); 
              //     $(".commonPart").hide();
              //   }
              //   if(fftInput == "Meat_eggs"){
              //     $("#liveInput").hide();  
              //     $("#wlpaSelectDiv").hide();
              //     $("#customDiv").hide();
              //      $("#meatEggsDiv").show();
              //      $(".commonPart").hide();
              //   }
              //   });
              //    $(".liveInput").change(function () {
              //   var liveInput = $('.liveInput:checked').val();
              //  // alert(liveInput);
              //   if(liveInput == "Wlpa"){
              //       $("#wlpaSelectDiv").show();
              //       $("#customDiv").hide();
              //       $(".commonPart").hide();
              //   }
              //   if(liveInput == "Customs"){
              //       $("#wlpaSelectDiv").hide();
              //       $("#customDiv").show();
              //       $(".commonPart").hide();
                   
                    
              //   }
                
              //    });
                 
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
                     $("#wlpaInput").show();
                     $(".commonPart").hide();
                 }
                 
                // $(".lizardSelect").change(function () {
                // var lizardSelect = $('.lizardSelect:checked').val();
             
                // if(lizardSelect == "Live"){
                //   $("#lizardInput").show();
                //   $(".commonPart").hide();
                // }
                // if(lizardSelect == "Meat"){
                   
                //    $("#lizardInput").hide();
                //    $("#maetInputDiv").show();
                //    $("#customInput").hide();
                //    $(".commonPart").hide();
                //    $("#wlpaInput").hide();
                    
                // }
                
                //  });
                 
                // $(".lizardradio").change(function () {
                // var lizardradio = $('.lizardradio:checked').val();
               
                // if(lizardradio == "Custom"){
                //   $("#customInput").show();
                //   $("#maetInputDiv").hide();
                //   $(".commonPart").hide();
                //   $("#wlpaInput").hide();
                // }
                // if(lizardradio == "Wlpa"){
                //   $("#wlpaInput").show();
                //   $("#customInput").hide();
                //   $(".commonPart").hide();
                // }
                
                
                //  });
                 
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
                    $("#wlpaSize").show();
                    $(".commonPart").hide();
                    $("#amphibiansSelect").hide();
                    
                    
                    
                  }
                
     
                
                $(".wlpaSizeRadio").change(function () {
                var wlpaSizeRadio = $('.wlpaSizeRadio:checked').val();
                if(wlpaSizeRadio == "Duck"){
                 $("#wlpaDuck").show();
                 $("#wlpaMedium").hide();
                 $("#wlpaLarge").hide();
                 
                 $(".commonPart").hide();
                }
                if(wlpaSizeRadio == "Parakeet"){
                 $("#Parakeetdiv").show();
                 $("#wlpaDuck").hide();
                 $("#wlpaLarge").hide();
                
                 $(".commonPart").hide();
                }
                if(wlpaSizeRadio == "Raptor"){
                 $("#wlpaDuck").hide();
                 $("#wlpaMedium").hide();
                 $("#Parakeetdiv").hide();
                 $("#Raptordiv").show();
                
                 $(".commonPart").hide();
                }
                if(wlpaSizeRadio == "Hornbill"){
                 $("#hornbilldiv").show();
                 $("#wlpaMedium").hide();
                 $("#wlpaLarge").hide();
                 $("#Raptordiv").hide();
                 $(".commonPart").hide();
                   }
                   if(wlpaSizeRadio == "Waterbird"){
                    $("#wlpaDuck").hide();
                    $("#wlpaLarge").hide();
                    $("#waterbirdselect").show();
                    $("#hornbilldiv").hide();
                    $(".commonPart").hide();
                   }
                   if(wlpaSizeRadio == "Woodpecker"){
                    $("#woodpeckerholder").show();
                    $("#wlpaMedium").hide();
                    $("#wlpaLarge").hide();
                    $("#waterbirdselect").hide();
                    $(".commonPart").hide();
                   }
                   if(wlpaSizeRadio == "Owl"){
                    
                    $("#wlpaDuck").hide();
                    $("#wlpaMedium").hide();
                    $("#wlpaLarge").hide();
                    $("#owlholder").show();
                    $("#woodpeckerholder").hide();
                    $(".commonPart").hide();
                      }
                      if(wlpaSizeRadio == "Fowl"){
                    
                        $("#wlpaDuck").hide();
                        $("#wlpaMedium").hide();
                        $("#wlpaLarge").hide();
                        $("#foundFowl").show();
                        $("#owlholder").hide();
                        $(".commonPart").hide();
                          }
    
                        if(wlpaSizeRadio == "Kingfisher"){
                    
                            $("#wlpaDuck").hide();
                            $("#wlpaMedium").hide();
                            $("#wlpaLarge").hide();
                            $("#findKingfisher").show();
                            $("#foundFowl").hide();
                            $(".commonPart").hide();
                            }
                        if(wlpaSizeRadio == "Shorebird"){
                            $("#wlpaDuck").hide();
                            $("#wlpaMedium").hide();
                            $("#wlpaLarge").hide();
                            $("#shorebirdslct").show();
                            $("#findKingfisher").hide();
                            $(".commonPart").hide();
                            }
                        if(wlpaSizeRadio == "Forest_bird"){
                            $("#forestbirdselect").show();
                            $("#wlpaLarge").hide();
                            $("#waterbirdselect").hide();
                            $("#shorebirdslct").hide();
                            $(".commonPart").hide();
                            }
                        if(wlpaSizeRadio == "Dove&Pegion"){
                                $("#dove_pigeon").show();
                                $("#wlpaLarge").hide();
                                $("#waterbirdselect").hide();
                                $("#forestbirdselect").hide();
                                $(".commonPart").hide();
                                }
                 });
                   
                 //Mammals selection
                 if (selectedWhole == "mammals") {
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
                    if (mammalRadio == "Large") {
                        $("#mammalsLive").show();
                        $("#mammalsMeat").hide();
                        $("#Small_MammalsSelect").hide();
                        $(".commonPart").hide();
        
        
                    }
                    if (mammalRadio == "Meat") {
                        $("#mammalsLive").hide();
                        $("#mammalsMeat").show();
                        $("#mammalsLiveWlpa").hide();
                        $(".commonPart").hide();
        
        
                    }
        
                });
        
        
                $(".mammalsMeatRadio").change(function () {
                    var mammalsMeatRadio = $('.mammalsMeatRadio:checked').val();
                    if (mammalsMeatRadio == "Civets") {
                        $("#UngulatesSelect").hide();
                        $("#Small_MammalsSelect").hide();
                        $(".commonPart").hide();
                    }
                    if (mammalsMeatRadio == "Ungulates") {
                        $("#UngulatesSelect").show();
                        $("#Small_MammalsSelect").hide();
                        $(".commonPart").hide();
                    }
                    if (mammalsMeatRadio == "Small_Mammals") {
                        $("#UngulatesSelect").hide();
                        $("#Small_MammalsSelect").show();
                        $(".commonPart").hide();
                    }
                });
        
        
                $(".mammalsLiveRadio").change(function () {
                    var mammalsLiveRadio = $('.mammalsLiveRadio:checked').val();
                    if (mammalsLiveRadio == "Wlpa") {
                        //alert('hi');
                        $("#mammalsLiveWlpa").show();
                        $("#mammalsLiveCustom").hide();
                        $(".commonPart").hide();
        
        
                    }
        
                    if (mammalsLiveRadio == "Customs") {
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
    

  





