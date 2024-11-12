$(document).ready(function() {
    var max_fields      = 50; //maximum input boxes allowed
    var wrapper   	= $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
        var y=x;  
        var z=y+1;
        x++; //text box increment
        var number=document.getElementById("number").value=y+1;
        $("#AddMoreSpeciesAlert").modal('hide');
        $("#add_more_yes"). prop("checked", false);
        $(wrapper).append('<div> <div class="form-group col-md-12">\
        <label class="inner-label"> Status of Accused</label>\
            <div class="form-group col-md-4">\
            <label class="radioBtnHolder">\
                <input type="radio" name="accusestatus_'+y+'"  id="accusestatus_'+y+'" class="part" value="Under Arrest" >Under Arrest\
                <span class="checkmark"></span>\
            </label>\
            </div>\
            <div class="form-group col-md-4">\
                   <label class="radioBtnHolder">\
                       <input type="radio" name="accusestatus_'+y+'"  id="accusestatus_'+y+'" class="part" value="Deceased">Deceased\
                       <span class="checkmark"></span>\
                   </label>\
            </div>\
            <div class="form-group col-md-4">\
                   <label class="radioBtnHolder">\
                       <input type="radio" name="accusestatus_'+y+'"  id="accusestatus_'+y+'" class="part" value="Absconding" >Absconding\
                       <span class="checkmark"></span>\
                   </label>\
            </div>\
        </div>\<div class="form-group col-md-12">\
        <label class="inner-label required">Name of Accused</label>\
        <input type="hidden" name="manageid[]" value="'+y+'">\
        <input type="text" class="form-control inner-textfield"  value=""  name="accused_'+y+'" required  >\
    </div>\<div class="form-group col-md-12">\
        <label class="inner-label required">Accused\'s Father\'s Name</label>\
        <input type="text" class="form-control inner-textfield"  name="father_'+y+'"  required value="" >\
    </div>\<div class="form-group col-md-12">\<label class="inner-label required">Age (In Years)<input type="checkbox" name="approx_'+y+'"  id="approx_'+y+'"  class="" value="approc"> Approximately</label>\
    <select class="form-control  inner-textfield" name="age_'+y+'" required>\
        <option  value="">Select Age</option>\
        \
            <option value="18" >18</option>\
            \
            <option value="19" >19</option>\
            \
            <option value="20" >20</option>\
            \
            <option value="21" >21</option>\
            \
            <option value="22" >22</option>\
            \
            <option value="23" >23</option>\
            \
            <option value="24" >24</option>\
            \
            <option value="25" >25</option>\
            \
            <option value="26" >26</option>\
            \
            <option value="27" >27</option>\
            \
            <option value="28" >28</option>\
            \
            <option value="29" >29</option>\
            \
            <option value="30" >30</option>\
            \
            <option value="31" >31</option>\
            \
            <option value="32" >32</option>\
            \
            <option value="33" >33</option>\
            \
            <option value="34" >34</option>\
            \
            <option value="35" >35</option>\
            \
            <option value="36" >36</option>\
            \
            <option value="37" >37</option>\
            \
            <option value="38" >38</option>\
            \
            <option value="39" >39</option>\
            \
            <option value="40" >40</option>\
            \
            <option value="41" >41</option>\
            \
            <option value="42" >42</option>\
            \
            <option value="43" >43</option>\
            \
            <option value="44" >44</option>\
            \
            <option value="45" >45</option>\
            \
            <option value="46" >46</option>\
            \
            <option value="47" >47</option>\
            \
            <option value="48" >48</option>\
            \
            <option value="49" >49</option>\
            \
            <option value="50" >50</option>\
            \
            <option value="51" >51</option>\
            \
            <option value="52" >52</option>\
            \
            <option value="53" >53</option>\
            \
            <option value="54" >54</option>\
            \
            <option value="55" >55</option>\
            \
            <option value="56" >56</option>\
            \
            <option value="57" >57</option>\
            \
            <option value="58" >58</option>\
            \
            <option value="59" >59</option>\
            \
            <option value="60" >60</option>\
            \
            <option value="61" >61</option>\
            \
            <option value="62" >62</option>\
            \
            <option value="63" >63</option>\
            \
            <option value="64" >64</option>\
            \
            <option value="65" >65</option>\
            \
            <option value="66" >66</option>\
            \
            <option value="67" >67</option>\
            \
            <option value="68" >68</option>\
            \
            <option value="69" >69</option>\
            \
            <option value="70" >70</option>\
            \
            <option value="71" >71</option>\
            \
            <option value="72" >72</option>\
            \
            <option value="73" >73</option>\
            \
            <option value="74" >74</option>\
            \
            <option value="75" >75</option>\
            \
            <option value="76" >76</option>\
            \
            <option value="77" >77</option>\
            \
            <option value="78" >78</option>\
            \
            <option value="79" >79</option>\
            \
            <option value="80" >80</option>\
            \
            <option value="81" >81</option>\
            \
            <option value="82" >82</option>\
            \
            <option value="83" >83</option>\
            \
            <option value="84" >84</option>\
            \
            <option value="85" >85</option>\
            \
            <option value="86" >86</option>\
            \
            <option value="87" >87</option>\
            \
            <option value="88" >88</option>\
            \
            <option value="89" >89</option>\
            \
            <option value="90" >90</option>\
            \
            <option value="91" >91</option>\
            \
            <option value="92" >92</option>\
            \
            <option value="93" >93</option>\
            \
            <option value="94" >94</option>\
            \
            <option value="95" >95</option>\
            \
            <option value="96" >96</option>\
            \
            <option value="97" >97</option>\
            \
            <option value="98" >98</option>\
            \
            <option value="99" >99</option>\
            \
            <option value="100" >100</option>\
            \
        </select>\
    </div>\
     <div class="form-group col-md-12">\
        <label class="inner-label required">Gender</label>\
        <div class="row">\
            <div class="col-md-3">\
                <label class="radioBtnHolder">\
                    <input type="radio" name="gender_'+y+'" required  class="part" value="Male" >Male\
                    <span class="checkmark"></span>\
                </label>\
            </div>\
            <div class="col-md-3">\
                <label class="radioBtnHolder">\
                    <input type="radio" name="gender_'+y+'" required  class="whole" value="Female" >Female\
                    <span class="checkmark"></span>\
                </label>\
            </div>\
            <div class="col-md-3">\
                <label class="radioBtnHolder">\
                    <input type="radio" name="gender_'+y+'" required  class="whole" value="Other" >Other\
                    <span class="checkmark"></span>\
                </label>\
            </div>\
        </div>\
    </div>\
     <div class="form-group col-md-12">\
        <label class="inner-label required">Present Address</label>\
        <textarea type="text" class="form-control inner-textfield" required name="addressOne_'+y+'" ></textarea>\
    </div>\
     <div class="form-group col-md-12">\
        <label class="inner-label required">Parmanent Address</label>\
        <textarea type="text" class="form-control inner-textfield" required name="addressTwo_'+y+'" ></textarea>\
    </div>\
    <div class="form-group col-md-12">\
        <label class="inner-label required">NID Number</label>\
        <input type="text" class="form-control inner-textfield"  minlength="14" maxlength="14" required name="pinCode_'+y+'" attr="called" value="" >\
    </div>\
    <div class="form-group col-md-12">\
    <label class="inner-label required">obile Number</label>\
    <input type="text" class="form-control inner-textfield"  minlength="11" maxlength="11" required name="pinCode_'+y+'" attr="called" value="" >\
</div>\
    <a href="#" class="remove_field"><img src="../images/remove_fields.png"> Remove Field</a></div>'); //add input box
} });

        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
        })
});   