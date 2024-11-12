var user_input = {
    
  input_rescues: [{
 
  "name" : "Pandora Hall"  /* string->varchar(256)*/ 
},

{
  "quantity":["188"], /** number */
  "dimension": "71", /**number */
  "live/dead": "Dead",/** ENUM (live,dead)*/
  "species_age": "NewBorn",  /* ENUM(adult,newborn,juvenile)*/ 
  "species": "Female" /** ENUM (unknown,male,female) */

},
{
   "quantity": "488", /**number */
  "dimension": "52", /**number */
  "live/dead": "Live", /**ENUM (live,dead) */
  "species_age": "Juvenile", /**ENUM (adult,newborn,juvenile) */
  "species": "Others" /**ENUM (male,female,unknown) */
},

{
  /** Boolean */
  "accusedHold": "Yes",
  "transportArea": "No",
  "protectedArea": "No",
  "permissionprotectedArea": "Yes",
  "CoreTigerReserve": "No",
  "[section 30 read with51(1)]": "Yes",
  "fireCaused": "No",
  "protectedWeapon": "No",
  "repeatOffender": "No",
  "accusedHoldThreeFour": "No"
}],
offence:{
"case_no": "13", /**number */
  "date_1": "2021-11-01", /**date */
  "co_ordinate1": "In consequatur ex q", /**string->varchar (256) */
  "co_ordinate2": "Sed enim et quia lab",  /**string->varchar (256) */
  "information": "Quaerat dolores adip", /**text */
  "action": "Est dolore similiqu", /**dropdown */
  "district": "Dhaka", /**dropdown */
  "upzilla": "Sundarbn",  /**dropdown */
  "station": "Dhaka" /**dropdown */
},
officer :{
  "officer_name": "Lila Parks", /**string->varchar (256) */
  "officer_designation": "Fugiat sunt et in q", /**text */
  "officer_posting": "Consequatur Dolor q" /**text */
},
offender:[{
  "offender_name": "Fritz Erickson", /**string->varchar (256) */
  "father_name": "Rooney Hale", /**string->varchar (256) */
  "approx_0": true, /**boolean */
  "nid_number": "897", /**number */
  "mobile_number": "703",  /**number */
  "repeated_offender1": "No", 
  "offender": "Yes",
  "offender_age": "33", /**number */
  "nationality": "others", /**ENUM */
  "addressOne": "Eligendi blanditiis ", /**text */
  "addressTwo": "Et suscipit magni od", /**text */
  "note": "Ullamco voluptate in" /**text */
},
{
  "offender_name": "Aquila Sheppard", /**string->varchar (256) */
  "father_name": "Fiona Strong", /**string->varchar (256) */
  "approx_0": false, /**boolean */
  "nid_number": "413", /**number */
  "mobile_number": "90", /**number */
  "repeated_offender1": "No",
  "offender": "Yes",
  "offender_age": "76", /**number */
  "nationality": "others", /**dropdown */
  "addressOne": "In dolore nisi alias", /**string->varchar (256) */
  "addressTwo": "Nostrud illum rerum",/**string->varchar (256) */
  "note": "Qui qui duis volupta" /**text */
}
],
witness : [{
  "witness_name": "Lionel Farrell", /**string->varchar (256) */
  "approx_0": false, /**boolean */
  "witness_address": "Dolore natus facere ", /**string->varchar (256) */
  "note": "Quo ut qui error nob", /**text */
  "witness_age": "85" /**number */
},
{
  "witness_name": "Buffy Erickson", /**string->varchar (256) */
  "approx_0": true, /**boolean */
  "witness_address": "Minim autem sit aut ", /**string->varchar (256) */
  "note": "Non provident vel a",  /**text */
  "witness_age": "50" /**number */
}],
disposal :{
  "sl": "64", /**number */
  "mode": "Ea quia anim hic exe", /**string->varchar (256) */
  "species_name": "Madaline Tillman", /**string->varchar (256) */
  "place": "Quis dolore error in", /**string->varchar (256) */
  "date0": "25-May-2003", /**date */
  "incharge": "Inventore eiusmod fu" /**string->varchar (256) */
},
seizure:{
  "sl": "19", /**number */
  "name": "Emerald Hammond",/**string->varchar (256) */
  "number": "867", /**number */
  "weight": "Atque sequi repellen", 
  "value": "Magni esse natus vo",
  "length": "Iste sunt aut repre",
  "width": "Dolor et rem id sit",
  "height": "Enim iste veniam hi"
},
sample_collection : {
  "species_name": "Zia Chapman", /**string->varchar (256) */
  "collection_date": "2002-02-03", /**date */
  "sample_code": "Dolorum quis cillum ", /**string->varchar (256) */
  "collection_place": "Culpa similique aut",/**string->varchar (256) */
  "report_date": "11-Sep-1993", /**date */
  "type": "Esse laboriosam te", /**string->varchar (256) */
  "brand": "Aut ullamco in delen", /**string->varchar (256) */
  "model": "Magna vel impedit d", /**string->varchar (256) */
  "reg_number": "421", /**number */
  "seizure_location": "Non consectetur aut", /**string->varchar (256) */
  "custodian_name": "Rebecca Oneal", /**string->varchar (256) */
  "custodian_designation": "Enim totam iste volu", /**string->varchar (256) */
  "custodian_address": "Dolor aliqua Harum ", /**string->varchar (256) */
  "custodian_phn": "100", /**number */
  "fornsic_report": "yes", 
  "seized_item": "tools" /**dropdown */
},
other_details : {
  "seizedAnimal[]": false, /**boolean */
  "transport_mode": false, /**boolean */
  "hide_method": false, /**boolean */
  "alleged_country": "Quia labore elit om", /**string->varchar (256) */
  "transition_country": "Magnam sit tempora ", /**string->varchar (256) */
  "destination_country": "Voluptate minus iure", /**string->varchar (256) */
  "imprisonment": "1971-02-26", /**date */
  "fine": "84", /**number */
  "additional_information": "Asperiores excepturi", /**string->varchar (256) */
  "add_more_no": "No",
  "reseason": "others" 
}


}