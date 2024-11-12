__.hash_active['#no-identify-species'] = ['#pre_loader'];
route['no-identify-species'] = function (){
    
    var json_data = {};
    var filePath = '../backend/api/species/get.php';
  //Alleged Country
    $.getJSON(filePath, function( data ) {
      json_data = data;
    });


    $('#identify-species-next').on('click',function(evt){
        console.log('');
        
         
      
        fire('wlor_save');
        //gonxt('input-rescue-information');
        window.location.hash = 'input-rescue-information';
    });
   
    console.log('section 1-------------------11--- inside route test 1' );
    $(".part").click(function () {
        $("#whole").fadeOut();
        $("#skin").fadeIn();
        $(".commonWhole").hide();

    });

//Softwarelgthue
    
    $("input[type=radio].SpeciecSelect").change(function(){
        
         var selectedSpecies = $(this).val();
         console.log(selectedSpecies);
        //  $("#head").fadeOut();
        //  $("#cat").fadeOut();
        //  $("#scales").fadeOut();
        //  $("#type_Porcupine").fadeOut();
 
         if (selectedSpecies == "Skin_Fur") {
            
            $(".quillVal").hide();
            $(".scalsVal").hide();
            $(".anterHornVal").hide();
            $(".teethVal").hide();
            $(".clawsVal").hide();
            $(".seaShellsVal").hide();
            $(".miscellaneousVal").hide();
            
            //Miscellaneous Hide
            $("#gallBladder").hide(); 
            $("#HathaJodi").hide(); 
            $("#Muskpod").hide(); 
            $("#siyarSinghi").hide(); 
            $("#sharkFin").hide();
            $("#rayGillRakers").hide();
            $("#carapacekeyChain").hide();
            $("#quills").hide();
            

            $("#miscellaneoussize").fadeOut();
            $("#antler_selection").fadeOut();
            $("#species_claws").fadeOut();
            $("#sample_seized").fadeOut();
            $("#species_tusk").fadeOut();
            $("#mammalReptile").fadeIn();
            $("#scales_quills").fadeOut();
            $("#species_canine").fadeOut();
            $("#country").fadeOut();
            $("#sea_shells").fadeOut();
            $("#conch").fadeOut();
            $("#clawsoption").fadeOut();
            $("#bonesDiv").hide();
            $(".mammal_reptile").change(function () {
                var mammalreptile = $('.mammal_reptile:checked').val();
                //alert(mammalreptile);
                 if (mammalreptile == "Mammal_Fur") {
                     
                    $("#head").fadeIn();
                     $("#skinBagPurse").fadeOut();
                     $("#crocodilesSkin").hide();
                     $("#snakeSkin").hide();
                   
                 }
                 
                 if (mammalreptile == "Reptile_Skin_Product") {
                     
                    $("#head").fadeOut();
                    $("#tiger").fadeOut();
                    $("#cat").fadeOut();
                    $("#otters").fadeOut();
                    $("#skinBagPurse").fadeIn();
                    $("#Bear").hide();
                    $("#otherOtters").hide();
                 }
                
            });
             $(".skin").change(function () {
                var skin = $('.skin:checked').val();
                //alert(skin);
                if(skin=="Snakeskin_Purse"){
                    $("#snakeSkin").show();
                    $("#crocodilesSkin").hide();
                }
                if(skin=="Crocodile_Skin_Bag"){
                    $("#snakeSkin").hide();
                    $("#crocodilesSkin").show();
                }
            });
            $(".head_tail").change(function () {
                var headtail = $('.head_tail:checked').val();
                //alert(headtail);
                if (headtail == "Greater or equal to 2m") {
                   
                    $("#head").fadeIn();
                    $("#tiger").fadeIn();
                    $("#cat").fadeOut();
                    $("#reptile").fadeIn();
                    $("#otters").fadeOut();
                    $("#otherOtters").hide();
                }
                if (headtail == "less than 2m") {
                     $("#tiger").fadeOut();
                     $("#cat").fadeIn();
                     $("#Bear").hide();
                }
                
                if (headtail == "shahtooshShawl") {
                     $("#tiger").hide();
                     $("#cat").hide();
                     $("#Bear").hide();
                     $("#otters").hide();
                     $("#otherOtters").hide();
                }
            });
            
            
            
             $(".species_tiger_select").click(function () {
                 var species_tiger_select = $("input[name='species_tiger']:checked").val()
                 //var species_tiger_select = $(this).children(":checked").val();
                 //alert(species_tiger_select);
                 if(species_tiger_select=="Bear"){
                  $("#Bear").show();
              }else{
                   $("#Bear").hide();
              }
             });
             
            
             
             
             
            
            $("select.species_cat").change(function () {
             var speciesCat = $(this).children("option:selected").val();
             //alert(speciesCat);
            if (speciesCat == "52cmHTL73_cm") {
             $("#otters").show();
             $("#otherOtters").hide();
            }
            if(speciesCat=="85cm<HTL130cm"){
                $("#otters").hide();
                $("#otherOtters").show();
            }
            if(speciesCat=="Red_Panda"){
                 $("#otters").hide();
                $("#otherOtters").hide();
            }
            if(speciesCat=="Mongoose_hair_brush"){
                 $("#otters").hide();
                $("#otherOtters").hide();
            }
        
    });
            
        }

        if (selectedSpecies == "Scales") {
            //alert('Scales');
            //$("#asiatic_bru1").hide();
            

            $(".furSkinHairVal").hide();
            $(".quillVal").hide();
            $(".anterHornVal").hide();
            $(".teethVal").hide();
            $(".clawsVal").hide();
            $(".seaShellsVal").hide();
            $(".miscellaneousVal").hide();
            
            $("#country").show();
            $("#quills").hide();
            $("#antler_selection").hide();
            $("#mammalReptile").hide();
            $("#tiger").hide();
            $("#Bear").hide();
            $("#otters").hide();
            $("#clawless_otters").hide();
            $("#skinBagPurse").hide();
            $("#crocodilesSkin").hide();
            $("#bonesDiv").hide();
           
        }

        if (selectedSpecies == "Quills") {
            //$("#asiatic_bru1").hide();      
           //$("#Himalayan_crestless").show();
           //$("#asiatic_bru").hide();
          //$(".Pangolin").hide();
          //$("#chinese").hide();
          // $("#asiatic_bru").show();
          
          $(".furSkinHairVal").hide();
          $(".scalsVal").hide();
          $(".anterHornVal").hide();
          $(".teethVal").hide();
          $(".clawsVal").hide();
          $(".seaShellsVal").hide();
          $(".miscellaneousVal").hide();
          
          
         $("#country").hide();
         $("#mammalReptile").hide();
         $("#tiger").hide();
         $("#quills").show();
          $("#skinBagPurse").hide();
          $("#snakeSkin").hide();
          $("#crocodilesSkin").hide();
          $("#Bear").hide();
          $("#bonesDiv").hide();
          // alert('Quills');
        }

        if (selectedSpecies == "Tusk_Teeth") {
            
            $(".furSkinHairVal").hide();
            $(".quillVal").hide();
            $(".scalsVal").hide();
            $(".anterHornVal").hide();
            $(".clawsVal").hide();
            $(".seaShellsVal").hide();
            $(".miscellaneousVal").hide();
            
            $(".furSkinHairVal").hide();
            //Miscellaneous Hide
            $("#gallBladder").hide(); 
            $("#HathaJodi").hide(); 
            $("#Muskpod").hide(); 
            $("#siyarSinghi").hide(); 
            $("#sharkFin").hide();
            $("#rayGillRakers").hide();
            $("#carapacekeyChain").hide();
            
            $("#sea_shells").hide();
            $("#selectShells").hide();
            
            
            //modify
            $(".teethInput").change(function () {
                 var teethInput = $('.teethInput:checked').val();
                 if(teethInput == "Big_Cats"){
                   $("#teethBigCat").show();
                   $("#teethBeer").hide();
                 }
                 else if(teethInput=="Bear"){
                    $("#teethBigCat").hide(); 
                    $("#teethBeer").show(); 
                 }
                 else{
                    $("#teethBigCat").hide(); 
                    $("#teethBeer").hide();  
                 }
                 //alert(teethInput);
            });
            //modify
            $("#mammalReptile").hide();
            $("#antler_size").fadeOut();
            $("#scales_quills").fadeOut();
            $("#country").fadeOut();
            
            $("#clawsoption").fadeOut();
            
            $("#species_claws").fadeOut();
            $("#antler_selection").fadeOut();
            $("#horn_size").fadeOut();
            $("#reptile").fadeOut();
            $("#miscellaneoussize").fadeOut();
            $("#bonesDiv").hide();

            $("#sample_seized").fadeIn();

            $("#tusks_id").change(function () {
                var tusk = $('#tusks_id:checked').val();
                if (tusk == "Tusks") {
                    $("#species_tusk").fadeIn();
                    $("#species_canine").fadeOut();
                    //$("#antler_size").fadeOut();
                    //alert('horn_size');
                }
            });
            $("#canine_id").change(function () {
                var canine = $('#canine_id:checked').val();
                if (canine == "Canine") {
                    $("#species_canine").fadeIn();
                    $("#species_tusk").fadeOut();
                    //$("#antler_size").fadeOut();
                    //alert('horn_size');
                }
            });
            
            $(".species_canine_cl").change(function () {
                var catcanine = $('.species_canine_cl:checked').val();
                if (catcanine == "Cats") {
                    $("#cat_canine").fadeIn();
                    $("#bear_canine").fadeOut();
                }
                if (catcanine == "Bear") {
                    $("#cat_canine").fadeOut();
                    $("#bear_canine").fadeIn();

                }
            });
            
        }
        
        if (selectedSpecies == "Sea_Shells") {
            
            
            $(".furSkinHairVal").hide();
            $(".quillVal").hide();
            $(".scalsVal").hide();
            $(".anterHornVal").hide();
            $(".teethVal").hide();
            $(".clawsVal").hide();
            $(".miscellaneousVal").hide();
            
            $("#antler_selection").hide();
           //Miscellaneous Hide
            $("#gallBladder").hide(); 
            $("#HathaJodi").hide(); 
            $("#Muskpod").hide(); 
            $("#siyarSinghi").hide(); 
            $("#sharkFin").hide();
            $("#rayGillRakers").hide();
            $("#carapacekeyChain").hide();
            $("#bonesDiv").hide();
            
            
           $("#miscellaneoussize").hide();
           $("#sample_seized").hide();
           $("#teethBeer").hide();
           $("#sea_shells").fadeIn();
           $("#selectShells").fadeIn();
           $("#clawsoption").fadeOut();
           $("#claws_cat").fadeOut();
           $("#claws_bear").fadeOut();
          $("select#selectShells").change(function () {
            var conch = $(this).children("option:selected").val();
            //alert(conch);
            if(conch == "Conch" ){
                
                $("#conch").fadeIn();
                $("#ClamsSelect").hide();
                $("#ChamberedNautilus").hide();
            }
            if(conch == "Clams"){
                //alert('hi');
                $("#conch").hide();
                $("#ChamberedNautilus").hide();
               $("#ClamsSelect").show();
            }
            if(conch == "Nautilus"){
                //alert('hi');
               $("#conch").hide();
               $("#ClamsSelect").hide();
               $("#ChamberedNautilus").show();
            }
           if(conch == "Turban" || conch == "Trumpet" || conch == "pineapple" ||conch == "Helmet" || conch == "Glory_of_India" ||conch == "Cowrie,h_arausiaca" ||conch == "P_placenta"){
               $("#conch").hide();
               $("#ClamsSelect").hide();
               $("#ChamberedNautilus").hide();
           }
            });
           
           
            }

            if (selectedSpecies == "Miscellaneous") {
                //alert('hi');
                
                $(".furSkinHairVal").hide();
                $("#bonesDiv").hide();
                $(".quillVal").hide();
                $(".scalsVal").hide();
                $(".anterHornVal").hide();
                $(".teethVal").hide();
                $(".clawsVal").hide();
                $(".seaShellsVal").hide();
    
    
                $("#miscellaneoussize").hide();
                $("#claws_cat").hide();
                $("#skinBagPurse").hide();
                //alert('hi');
                $("#sea_shells").hide();
                $("#miscellaneoussize").hide();
                $("#mammalReptile").fadeOut();
                $("#clawsoption").fadeOut();
                $("#selectShells").fadeOut();
                $("#bear_canine").fadeOut();
                $("#cat_canine").fadeOut();
                $("#conch").fadeOut();
                $("claws_bear").fadeOut();
              
                
                
                $("#scales_quills").fadeOut();
    
                $("#horn_size").fadeOut();
                $("#antler_selection").fadeOut();
                $("#sample_seized").fadeOut();
                $("#miscellaneoussize").fadeOut();
                $("#species_claws").fadeOut();
                $("#reptile").fadeOut();
                $("#miscellaneoussize").fadeIn();
    
    
                $("select.miscellaneoussizeDrop").change(function () {
                alert('sdjhfkjsdfh');    
                var miscellaneoussizeDrop = $(this).children("option:selected").val(); 
                //alert(miscellaneoussizeDrop);
                
                if(miscellaneoussizeDrop=="Hathajodi"){
                    $("#rayGillRakers").hide();
                    $("#HathaJodi").show(); 
                    $("#Muskpod").hide(); 
                    $("#gallBladder").hide();
                     $("#siyarSinghi").hide(); 
                      $("#sharkFin").hide(); 
                      $("#carapacekeyChain").hide();
                      
                }
                if(miscellaneoussizeDrop=="Musk_Pod"){
                   $("#rayGillRakers").hide();
                    $("#HathaJodi").hide(); 
                    $("#Muskpod").show(); 
                    $("#gallBladder").hide();
                     $("#siyarSinghi").hide(); 
                      $("#sharkFin").hide(); 
                      $("#carapacekeyChain").hide();
                      
                }
                if(miscellaneoussizeDrop=="Gall_bladder"){
                    $("#rayGillRakers").hide();
                    $("#gallBladder").show(); 
                    $("#HathaJodi").hide(); 
                    $("#Muskpod").hide(); 
                    $("#siyarSinghi").hide(); 
                     $("#sharkFin").hide(); 
                     $("#carapacekeyChain").hide();
                    
                    
                }
                if(miscellaneoussizeDrop=="Siyar_singhi"){
                    $("#rayGillRakers").hide();
                    $("#gallBladder").hide(); 
                    $("#HathaJodi").hide(); 
                    $("#Muskpod").hide(); 
                    $("#siyarSinghi").show(); 
                    $("#sharkFin").hide(); 
                    $("#carapacekeyChain").hide();
                    
                    
                }
                if(miscellaneoussizeDrop=="Shark_Fin"){
                    $("#rayGillRakers").hide();
                    $("#gallBladder").hide(); 
                    $("#HathaJodi").hide(); 
                    $("#Muskpod").hide(); 
                    $("#siyarSinghi").hide(); 
                    $("#sharkFin").show(); 
                    $("#carapacekeyChain").hide();
                    
                }
                
                if(miscellaneoussizeDrop=="Ray_gill_rakers"){
                    $("#rayGillRakers").show();
                    $("#gallBladder").hide(); 
                    $("#HathaJodi").hide(); 
                    $("#Muskpod").hide(); 
                    $("#siyarSinghi").hide(); 
                    $("#sharkFin").hide(); 
                    $("#carapacekeyChain").hide();
                    
                }
                
                if(miscellaneoussizeDrop=="Carapace_key_chain"){
                    $("#rayGillRakers").hide();
                    $("#gallBladder").hide(); 
                    $("#HathaJodi").hide(); 
                    $("#Muskpod").hide(); 
                    $("#siyarSinghi").hide(); 
                    $("#sharkFin").hide();
                    $("#44carapacekeyChain").show();
                }
                if(miscellaneoussizeDrop=="Venom"){
                    alert('sdfsdfds');
                    $("#rayGillRakers").hide();
                    $("#gallBladder").hide(); 
                    $("#HathaJodi").hide(); 
                    $("#Muskpod").hide(); 
                    $("#siyarSinghi").hide(); 
                    $("#sharkFin").hide();
                    $("#44carapacekeyChain").hide();
                    $("#44carapacekeyChain").show();
                }
                // Venom
                if(miscellaneoussizeDrop=="Loris"){
                    $("#gallBladder").hide(); 
                    $("#HathaJodi").hide(); 
                    $("#Muskpod").hide(); 
                    $("#siyarSinghi").hide(); 
                    $("#sharkFin").hide();
                     $("#rayGillRakers").hide();
                     $("#carapacekeyChain").hide();
                }
    
                  //alert(miscellaneoussizeDrop);
             });


    
            }
            
    });
               ///Whole Starts

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

            //Mammals Start
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

        //Birds Start

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
               ///FFT Starts
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

            //Lizard/Amphibians Starts

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
              
            // Marine Starts

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
            
    });


    $('.fspecies').change(function(evt){
         //console.log(evt.target);

       var id = $(evt.target).val();
        
    //    console.log('selected_id', id);
    //    console.log('json ', json_data);
       



       var specie = model_get_base_obj('specie');
  
  
         var tmp_user_input = take_all_inputs_value();
         var id_element = tmp_user_input.edit_species;
      
        
         var st_spec = _.where(json_data, {id: parseInt(id)});
         console.log("0000",specie, st_spec);
      
         specie.static = st_spec[0];
        // // change
         wlor_user_input.last_selected_species= _.clone(specie);
    });

           //Image
     $(document).ready('click',function(){

         
    //      var img = document.getElementsById("imageLocation");
    //      img.src = "https://wcs.softlh.com/species-image/";
    //      $("#imageLocation").attr("src","https://wcs.softlh.com/species-image/");
              var imageLocation = "https://wcs.softlh.com/species-image/";

     });

    const img = document.getElementById("image")
    img.addEventListener("error", function(event) {
    event.target.src = "../dist/species_img/image_nfound.jpg"
    event.onerror = null
})


 };


 



