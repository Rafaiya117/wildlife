route[''] = function (){
    console.log('section 1-------------------11--- inside route');
        $(".part").click(function () {
            $("#whole").fadeOut();
            $("#skin").fadeIn();
            $(".commonWhole").hide();

        });
        $("selected.SpeciecSelect").change(function () {
            var selectedSpecies = $(this).children("option:selected").val();
            //alert(selectedSpecies);
            //DROP DOWN OPTION FIRST
            // $("#skin").fadeOut();
            
            $("#head").fadeOut();
            $("#cat").fadeOut();
            $("#scales").fadeOut();
            $("#type_Porcupine").fadeOut();


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
            //alert(species_cat);
        });
                
            }
            //DROP DOWN OPTION SECOND
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
                //modifications
//                $("#mammalReptile").fadeOut();
//                $("#skinBagPurse").fadeOut();
//                $("#otters").fadeOut();
//                $("#scales_quills").fadeOut();
//                $("#chinese1").fadeOut();
                
                
//                $(".Scales").change(function () {
//                     var scalesQuills = $('.Scales:checked').val();
//                    if (scalesQuills == "Scales") {
//                        //alert('hi');
//                      $("#country").fadeIn();
//                      $("#chinese").fadeIn();
//                      $("#chinese1").fadeIn();
//                      $("#asiatic_bru").fadeOut();
//                      $("#asiatic_bru1").fadeOut();
//                       $(".Pangolin").show();
//                       $(".Himalayan_crestless").show();
//
//                    }
//                    
//                    
//                
//                });
                
                
               
                
                
                
                
//                $("#sample_seized").fadeOut();
//                $("#species_claws").fadeOut();
//                $("#antler_selection").fadeOut();
//                $("#horn_size").fadeOut();
//                $("#miscellaneoussize").fadeOut();
//                
//                
//                $("#mammalReptile").fadeOut();
//                $("#skinBagPurse").fadeOut();
//
//
//                $("#head").fadeOut();
//                $("#tiger").fadeOut();
//                $("#cat").fadeOut();
//                $("#reptile").fadeOut();
//
//
//
//
//
//                $("#scales").fadeIn();
//                

               
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
            //DROP DOWN OPTION THIRD
            if (selectedSpecies == "Antter_Horn") {
                
                 $(".furSkinHairVal").hide();
                $(".quillVal").hide();
                $(".scalsVal").hide();
                $(".teethVal").hide();
                $(".clawsVal").hide();
                $(".seaShellsVal").hide();
                $(".miscellaneousVal").hide();
                $("#bonesDiv").hide();
                
                
                //Miscellaneous Hide
                $("#gallBladder").hide(); 
                $("#HathaJodi").hide(); 
                $("#Muskpod").hide(); 
                $("#siyarSinghi").hide(); 
                $("#sharkFin").hide();
                $("#rayGillRakers").hide();
                $("#carapacekeyChain").hide();
                $("#quills").hide();
                
                 //modifications
                $("#scales_quills").fadeOut();
                $("#mammalReptile").fadeOut();
                $("#country").fadeOut();
                $("#skinBagPurse").fadeOut();


                $("#antler_size").fadeOut();
                $("#miscellaneoussize").fadeOut();
                $("#sample_seized").fadeOut();
                $("#species_canine").fadeOut();
                $("#species_claws").fadeOut();
                $("#tiger").fadeOut();
                $("#reptile").fadeOut();
                $("#antler_size").fadeOut();

                $("#antler_selection").fadeIn();
                $("#antler_id").change(function () {
                    var antler = $('#antler_id:checked').val();
                    if (antler == "Antler") {
                        $("#antler_size").fadeIn();
                        $("#horn_size").fadeOut();
                    }
                });
                $("#horn_id").change(function () {
                    var horn = $('#horn_id:checked').val();
                    if (horn == "Horn") {
                        $("#horn_size").fadeIn();
                        $("#antler_size").fadeOut();
                        //alert('horn_size');
                    }
                });




            }

            //DROP DOWN OPTION FOURTH
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

            //alert(selectedSpecies);

            //DROP DOWN OPTION Five
            if (selectedSpecies == "Claws") {
                
                //modification
                 $(".furSkinHairVal").hide();
                $(".quillVal").hide();
                $(".scalsVal").hide();
                $(".anterHornVal").hide();
                $(".teethVal").hide();
                $(".seaShellsVal").hide();
                $(".miscellaneousVal").hide();
                $("#mammalReptile").hide();
                $("#cat_canine").fadeOut();
                $("#antler_selection").fadeOut();
                $("#horn_size").fadeOut();
                //$("#skin").fadeOut();
                $("#bear_canine").fadeOut();
                $("#clawsoption").fadeIn();
                
                $("#scales_quills").hide();
                $("#country").hide();
                $("#antler_size").hide();
                $("#bonesDiv").hide();
                
               
                
                
                
                 $(".claws_fld").change(function () {
                    var claws = $('.claws_fld:checked').val();
                    if (claws == "Cats") {
                        $("#claws_cat").fadeIn();
                        $("#claws_bear").fadeOut(); 
                        //$("#species_canine").fadeOut();
                        //$("#antler_size").fadeOut();
                        
                       
                    }
                    if(claws == "Bear"){
                       $("#claws_cat").fadeOut(); 
                       $("#claws_bear").fadeIn(); 
                    }
                });
                
                
                //alert('hi');
                $("#miscellaneoussize").fadeOut();
                $("#species_tusk").fadeOut();


                $("#species_claws").fadeIn();
                $("#species_canine").fadeOut();
                $("#sample_seized").fadeOut();


            }
            
            //DROP DOWN OPTION SEVEN
            if (selectedSpecies == "bones") {
                $("#bonesDiv").show();
                $("#mammalReptile").hide();
                $("#tiger").hide();
                $("#miscellaneoussize").hide();
                $("#sample_seized").hide();
                $("#antler_selection").hide();
                $("#country").hide();
                $("#quills").hide();
                $("#clawsoption").hide();
                $("#claws_cat").hide();
            }

            //DROP DOWN OPTION SEVEN
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
                Venom
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


            //DROP DOWN OPTION SEVENTH
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


        });

               //In case of conch in sea product 
                 $(".species_seaShellsVal_select").click(function () {
                     var species_seaShellsVal_select = $("input[name='sea_shells']:checked").val()
                     //var species_tiger_select = $(this).children(":checked").val();
                     //alert(species_seaShellsVal_select);
                      if(species_seaShellsVal_select=="Conch"){
                      $("#conch").show();
                  }else{
                       $("#conch").hide();
                  }
                 });
                 
                 $("#rayGillRakers").hide();
                 //In caes of part->mislinn
                 $(".miscellaneoussizeDrop").click(function () {
                    var miscellaneoussizeDrop = $("input[name='miscellaneoussizeDrop']:checked").val()
                     //var species_tiger_select = $(this).children(":checked").val();
                    if(miscellaneoussizeDrop=="Hathajodi"){
                    $("#HathaJodi").show(); 
                    $("#rayGillRakers").hide();
                    $("#Muskpod").hide(); 
                    $("#gallBladder").hide();
                    $("#siyarSinghi").hide(); 
                    $("#sharkFin").hide(); 
                    $("#carapacekeyChain").hide();
                    $("#venomdiv").hide();
                    $("#FeatherDiv").hide();
                }
                if(miscellaneoussizeDrop=="Musk_Pod"){
                    $("#HathaJodi").hide(); 
                    $("#Muskpod").show(); 
                    $("#gallBladder").hide();
                     $("#siyarSinghi").hide(); 
                      $("#sharkFin").hide(); 
                      $("#rayGillRakers").hide();
                      $("#carapacekeyChain").hide();
                       $("#venomdiv").hide();
                    $("#FeatherDiv").hide();
                }
                if(miscellaneoussizeDrop=="Gall_bladder"){
                    $("#gallBladder").show(); 
                    $("#HathaJodi").hide(); 
                    $("#Muskpod").hide(); 
                    $("#siyarSinghi").hide(); 
                     $("#sharkFin").hide(); 
                     $("#rayGillRakers").hide();
                     $("#carapacekeyChain").hide();
                      $("#venomdiv").hide();
                    $("#FeatherDiv").hide();
                    
                }
                if(miscellaneoussizeDrop=="Siyar_singhi"){
                    $("#gallBladder").hide(); 
                    $("#HathaJodi").hide(); 
                    $("#Muskpod").hide(); 
                    $("#siyarSinghi").show(); 
                     $("#sharkFin").hide();
                     $("#rayGillRakers").hide();
                     $("#carapacekeyChain").hide();
                      $("#venomdiv").hide();
                    $("#FeatherDiv").hide();
                    
                }
                if(miscellaneoussizeDrop=="Shark_Fin"){
                    $("#gallBladder").hide(); 
                    $("#HathaJodi").hide(); 
                    $("#Muskpod").hide(); 
                    $("#siyarSinghi").hide(); 
                    $("#sharkFin").show(); 
                    $("#rayGillRakers").hide();
                    $("#carapacekeyChain").hide();
                     $("#venomdiv").hide();
                   $("#FeatherDiv").hide();
                    
                }
                
                if(miscellaneoussizeDrop=="Ray_gill_rakers"){
                    $("#gallBladder").hide(); 
                    $("#HathaJodi").hide(); 
                    $("#Muskpod").hide(); 
                    $("#siyarSinghi").hide(); 
                    $("#sharkFin").hide(); 
                    $("#rayGillRakers").show();
                    $("#carapacekeyChain").hide();
                     $("#venomdiv").hide();
                   $("#FeatherDiv").hide();
                    
                }
                
                if(miscellaneoussizeDrop=="Carapace_key_chain"){
                    $("#gallBladder").hide(); 
                    $("#HathaJodi").hide(); 
                    $("#Muskpod").hide(); 
                    $("#siyarSinghi").hide(); 
                    $("#sharkFin").hide();
                     $("#rayGillRakers").hide();
                     $("#carapacekeyChain").show();
                      $("#venomdiv").hide();
                   $("#FeatherDiv").hide();
                     //alert('nnnnn');
                }
                
                 if(miscellaneoussizeDrop=="Venom"){
                  $("#gallBladder").hide(); 
                  $("#HathaJodi").hide(); 
                    $("#Muskpod").hide(); 
                    $("#siyarSinghi").hide(); 
                    $("#sharkFin").hide();
                     $("#rayGillRakers").hide();
                      $("#venomdiv").show();
                      $("#FeatherDiv").hide();
                }
                                
                if(miscellaneoussizeDrop=="Feather"){
                    $("#gallBladder").hide(); 
                    $("#HathaJodi").hide(); 
                    $("#Muskpod").hide(); 
                    $("#siyarSinghi").hide(); 
                    $("#sharkFin").hide();
                     $("#rayGillRakers").hide();
                     $("#carapacekeyChain").hide();
                     $("#venomdiv").hide();
                     $("#FeatherDiv").show();
                }
                     
                 });
                 
           $(".whole").click(function () {
           //alert('hi');
           $("#whole").fadeIn();
           $("#skin").fadeOut();
           $("#wholeSelectDrop").show();
           $(".commonPart").hide();
       });



    };