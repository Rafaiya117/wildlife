function fire(event_name, data) {
  __.fire(event_name, data);
}

function listen(event_name, callback) {
  __.listen(event_name, callback);
}

var user_input = {};

function get_input_by_id() {}

function take_all_inputs_value() {
  var input_json = {};

  $("#js_main_container input[type=text]").each(function (id, ele) {
    input_json[ele.id] = $(ele).val();
  });
  $("#js_main_container input[type=number]").each(function (id, ele) {
    input_json[ele.id] = $(ele).val();
  });
  $("#js_main_container input[type=date]").each(function (id, ele) {
    input_json[ele.id] = $(ele).val();
  });
  $("#js_main_container input[type=hidden]").each(function (id, ele) {
    input_json[ele.id] = $(ele).val();
  });
  $("#js_main_container input[type=email]").each(function (id, ele) {
    input_json[ele.id] = $(ele).val();
  });

  $("#js_main_container select").each(function (id, ele) {
    input_json[ele.id] = $(ele).val();
  });

  if ($("#js_main_container input[type=checkbox]:checked").length > 0) {
    var id_list = [];
    $("#js_main_container input[type=checkbox]:checked").each(function (
      id,
      ele
    ) {
      id_list.push($(ele).data("id"));
    });
    id_list = _.uniq(id_list);

    _.each(id_list, function (item) {
      input_json[item] = [];
    });

    $("#js_main_container input[type=checkbox]:checked").each(function (
      id,
      ele
    ) {
      input_json[$(ele).data("id")].push($(ele).val());
    });
  }
  // save this?

  $("#js_main_container input[type=radio]:checked").each(function (id, ele) {
    input_json[$(ele).data("id")] = $(ele).val();
  });

  // $('input[name="name_of_your_radiobutton"]:checked').val();

  $("#js_main_container textarea").each(function (id, ele) {
    input_json[ele.id] = $(ele).val();
  });

  return input_json;
}

function input_required_check() {
  var valid_fields_bool = true;

  $("#js_main_container input").each(function (id, ele) {
    if ($(this).prop("required")) {
      if ($(ele).val().trim().length === 0) {
        $(ele).addClass("input_error");
        valid_fields_bool = false;
      } else {
        $(ele).removeClass("input_error");
      }
    }
  });

  $("#js_main_container select").each(function (id, ele) {
    if ($(this).prop("required")) {
      if ($(ele).val() === null) {
        valid_fields_bool = false;
        $(ele).addClass("input_error");
        return;
      }
      if ($(ele).val().trim().length === 0) {
        $(ele).addClass("input_error");
        valid_fields_bool = false;
      } else {
        $(ele).removeClass("input_error");
      }
    }
  });

  if (valid_fields_bool === false) {
    notify_error(
      "Some of the Required fields are missing! <br /> সবগুলো আবশ্যক তথ্য দেয়া হয়নি।"
    );
  }

  return valid_fields_bool;
}

function empty_all_inputs_value() {
  $("#js_main_container input[type=text]").val("");
  $("#js_main_container input[type=number]").val("");
  $("#js_main_container input[type=date]").val("");
  $("#js_main_container input[type=email]").val("");
  $("#js_main_container textarea").val("");
  $("#js_main_container input[type=checkbox]").prop(false);
  $("#js_main_container input[type=radio]:checked").prop("checked", false);
  $("#js_main_container option:selected").prop("selected", false);
}

function table_populate(meta, data) {
  /*
         meta:{
                 jq_id: '#tbl_seizure_list',
                 tbl_squence:['sl', 'name', 'weight','value'],
                 tbl_titles: {
                     'sl':'SL',
                     'name':'Name',
             
                     'weight':'Weight',
                     'value':'Value'
                     
                 }
         }
     */
  var table_html = "<thead><tr>";

  _.each(meta.tbl_squence, function (item, index) {
    table_html += "<td>" + meta.tbl_titles[item] + "</td>";
  });
  table_html += "</tr></thead>";
  table_html += "<tbody>";
  
  if (_.isArray(data) && data.length > 0) {
    _.each(data, function (data_item, index) {
      table_html += "<tr>";
      _.each(meta.tbl_squence, function (item, index) {
        table_html += "<td>" + data_item[item] + "</td>";
      });
      table_html += "</tr>";
    });
  }
  table_html += "</tbody>";
  $(meta.jq_id).html(table_html);
}

function chart_setup(obj) {
  CanvasJS.addColorSet("greenShades", [
    //colorSet Array

    "#2F4F4F",
    "#008080",
    "#2E8B57",
    "#3CB371",
    "#90EE90",
  ]);
}

function chart_populate_bar(obj) {
  _.extend(obj, {
    // document_id:''
    // data: data,
  });

  console.log("chart????", obj);
  console.table(obj.data);

  var dp_all = [];

  _.each(obj.data, function (dt_item, index) {
    dp_all.push({
      label: dt_item[obj.meta.x_tb_col],
      y: dt_item[obj.meta.y_tb_col],
    });
  });

  console.table(dp_all);

  chart = new CanvasJS.Chart(obj.meta.document_id, {
    animationEnabled: true,
    theme: "light1",
    colorSet: "greenShades",
    title: {
      text: obj.meta.title,
    },
    axisY: {
      // suffix: "%",
      // scaleBreaks: {
      // autoCalculate: true
      // }
    },
    data: [
      {
        type: "column",
        // yValueFormatString: "#,##0\"%\"",
        indexLabel: "{y}",
        indexLabelPlacement: "inside",
        indexLabelFontColor: "white",
        dataPoints: dp_all,
      },
    ],
  });
  chart.render();
}

function model_update(model_name, data) {
  fire("model_" + model_name, [data]);
}

function uns_temple(obj) {}
var previousPage = "";
function gonxt(last_page) {
  if (previousPage == "") {
    window.location.hash = last_page;
    return false;
  }

  var page = previousPage;
  previousPage = "";
  window.location.hash = page;
}

function is_all_inputs_empty(input_values) {
  if (_.uniq(_.values(input_values))[0] === "") {
    return true;
  }
  return false;
}

function date_formater(date) {
  return new Date(date).toLocaleString("en-us", {
    day: "numeric",
    month: "short",
    year: "numeric",
  });
}

function comma_seperate(x) {
  return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
}

function init_input_date_format() {
  $("input[type=date]")
    .on("change", function () {
      if (this.value) {
        this.setAttribute(
          "data-date",
          moment(this.value, "YYYY-MM-DD").format("DD MMMM YYYY")
        );
      } else {
        $(this).attr("data-date", "");
      }
    })
    .trigger("change");

  $("input[type=date]").on("click", function () {
    $(this)[0].showPicker();
  });
  //.trigger("change");
}
/*  hide and show based on checkbox */
function show_hide() {
  /*  input-offence-information */
  $(".answer").hide();
  $("#others").click(function () {
    if ($(this).is(":checked")) {
      $(".answer").show();
    } else {
      $(".answer").hide();
    }
  });

  $(".answer1").hide();
  $("#info_others").click(function () {
    if ($(this).is(":checked")) {
      $(".answer1").show();
    } else {
      $(".answer1").hide();
    }
  });
  /*  other-details */
  $(".other_specify_hide").hide();
  $("#othersp").click(function () {
    if ($(this).is(":checked")) {
      $(".other_specify_hide").show();
    } else {
      $(".other_specify_hide").hide();
    }
  });
  $(".note2_hide").hide();
  $("#os").click(function () {
    if ($(this).is(":checked")) {
      $(".note2_hide").show();
    } else {
      $(".note2_hide").hide();
    }
  });
}

function ut(value, unit, delemeter) {
  if (_.isUndefined(unit)) {
    unit = "";
  }
  if (_.isUndefined(delemeter)) {
    delemeter = "";
  }
  if (!_.isEmpty(value)) {
    return value + "" + unit + delemeter;
  }
  return "";
}
 function number_length(){
    $("input[type=number]").on('input',function(){
      if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);
      if (this.value.length < this.minLength && this.value.length < 0){ 
        this.value = this.value.toString(0,this.minLength);
        return false;
      }
    });
  }
  