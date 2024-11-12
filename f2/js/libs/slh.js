var __ = (function () {
  "use strict";
  var slh = {};
  var tmp = {};

  slh.setup_audio = function () {
    try {
      slh.click_audio = new Audio("dist/audio/click0.mp3");
      slh.click_audio.volume = 0.2;
    } catch (error) {}
  };

  slh.__doc_init = function () {
    slh.$app = $("#js_main_container");
    tmp.hash_uri_mapping();

    $(document.body).prepend('<div class="noti_loca_xrgb"></div>');
    slh.setup_audio();
  };

  //####### Events
  slh.fire = function (event_name, data) {
    slh.$app.trigger(window.location.hash + "---" + event_name, data);
    $(window).trigger(event_name, data);
    // console.info(
    //   "event 🔥 : ",
    //   event_name,
    //   "💣",
    //   window.location.hash,
    //   " 🚩🚩",
    //   data
    // );
  };

  slh.page_listen = function (event_name, callback) {
    slh.$app.on(window.location.hash + "---" + event_name, callback);
  };
  slh.listen = function (event_name, callback) {
    $(window).on(event_name, callback);
  };

  //## hash URL mapping ..
  slh.init_page_hash = "dashboard";
  slh.route = {};
  tmp.hash_uri_mapping = function () {
    var hash = decodeURI(location.hash.substring(1));
    var hash_array = hash.split("/"),
      contrl = hash_array[0];
    slh.fire("hash-change", contrl);
    if (route.hasOwnProperty(contrl) === true) {
      route[contrl](hash_array);
      return;
    }
  };

  window.addEventListener("hashchange", tmp.hash_uri_mapping, false);
  slh.my_route = []; // keep track of my path

  slh.listen("hash-change", function (e, hash) {
    if (_.isEmpty(hash)) {
      window.location.hash = slh.init_page_hash;
    }
    slh.my_route.push(hash); // keep track of my path
  });

  slh.listen("hash-change", function () {
    try {
      slh.click_audio.play();
    } catch (error) {
      // console.error("audio not found", error);
    }
  });
  window.route = slh.route;

  //## View Loader !!
  //@Depency on template_list build from PHP
  slh.viewLoader = function (event, page_name) {
    if (_.contains(template_list, page_name)) {
      var content = $("#pg_" + page_name).html();
      slh.$app.html(content);
      slh.fire("__page_loaded", page_name);
    }
  };
  slh.listen("hash-change", slh.viewLoader);

  slh.hash_active = {};
  tmp.active_url_using_hash = function (url_hash) {
    $('a[href="' + url_hash + '"]').addClass("active"); // only the active url
    var active_classes = _(slh.hash_active).get(url_hash, []);
    _.each(active_classes, function (active_class) {
      $('a[href="' + active_class + '"]').addClass("active"); // only the active url
    });
    console.log(active_classes);
  };

  slh.listen("__page_loaded", function () {
    $(".active").removeClass("active");
    tmp.active_url_using_hash(location.hash);
  });

  slh.listen("__page_loaded", function () {
    window.scrollTo({ top: 0, behavior: "auto" });
  });

  slh.get_last_page = function () {
    if (slh.my_route.length < 2) {
      return slh.my_route[0];
    }
    return slh.my_route[slh.my_route.length - 2];
  };
  //####### Input Manager
  slh.empty_input_value = function () {
    var ui_val_to_clear = [
      "input[type=text]",
      "input[type=number]",
      "input[type=date]",
      "input[type=email]",
      "textarea",
    ];
    _(ui_val_to_clear).each(function (ui) {
      slh.$app.find(ui).val("");
    });

    slh.$app.find("input[type=checkbox]").prop(false);
    slh.$app.find("input[type=radio]:checked").prop("checked", false);
    slh.$app.find("option:selected").prop("selected", false);
  };

  slh.error_required_ui =
    "Some of the Required fields are missing! <br /> সবগুলো আবশ্যক তথ্য দেয়া হয়নি।";
  tmp.is_required_ui_element_looper = function (id, ele) {
    if ($(ele).prop("required")) {
      if ($(ele).val() === null) {
        slh.required_ui_bool = false;
        $(ele).addClass("input_error");
        return;
      }
      if ($(ele).val().trim().length === 0) {
        slh.required_ui_bool = false;
        $(ele).addClass("input_error");
        return;
      }
      $(ele).removeClass("input_error");
    }
  };

  tmp.page_inputs = [];
  window.slh_tmp = tmp;

  slh.is_required_ui = function () {
    slh.required_ui_bool = true;
    var ui_raw_data = tmp.build_ui_raw_data();

    $(".input_error").removeClass("input_error");
    $("label.input_error_lebel_text").removeClass("input_error_lebel_text");

    _.each(ui_raw_data, function (ui_item) {
      if (ui_item.required) {
        if (ui_item.ui_type === "checkbox" || ui_item.ui_type === "radio") {
          if (_(ui_item.value).isEmpty()) {
            slh.required_ui_bool = false;
            _(ui_item.$elements_obj).each(function ($element, key) {
              $('label[for="' + $element.attr("id") + '"]').addClass(
                "input_error_lebel_text"
              );
            });
          }
        } else {
          if (ui_item.value === "") {
            slh.required_ui_bool = false;
            ui_item.$ele.addClass("input_error");
          }
        }
      }
    });

    if (slh.required_ui_bool === false) {
      slh.notify_error(slh.error_required_ui);
    }
    return slh.required_ui_bool;
  };

  tmp.ui_types = [
    "input[type=text]",
    "input[type=number]",
    "input[type=date]",
    "input[type=hidden]",
    "input[type=email]",
    "select",
    "textarea",
  ];

  tmp.page_ui_data = {};
  tmp.keys_to_obj = function (ui_datas) {
    var r = {};

    _.each(ui_datas, function (one_ui) {
      var _tmp = r;
      var paths = one_ui.key_split;
      for (var i = 0, ilen = paths.length; i < ilen; i += 1) {
        if (!_(_tmp).has(paths[i])) {
          if (i + 1 !== ilen) {
            _tmp[paths[i]] = {};
          } else {
            _tmp[paths[i]] = one_ui.value;
          }
        }
        _tmp = _tmp[paths[i]];
      }
    });

    tmp.page_ui_data = _.clone(r);
  };
  tmp.radio_build_ui_raw_data = function () {
    var checkbox_list = [],
      all_checkboxs = [];
    slh.$app.find("input[type=radio]").each(function (index, ele) {
      var $ele = $(ele);
      checkbox_list.push($ele.data("key"));
      all_checkboxs.push({
        key: $ele.data("key"),
        html_id: ele.id,
        required: $ele.prop("required"),
        value: $ele.val(),
        $ele: $ele,
        checked: $ele.prop("checked"),
      });
    });

    checkbox_list = _.unique(checkbox_list);

    var final_ui_raw_data = [];

    _.each(checkbox_list, function (checkbox_single_item) {
      var check_boxs_of_a = _(all_checkboxs).filter(function (item) {
        return item.key === checkbox_single_item;
      });

      var elements = {},
        required = false;
      _(check_boxs_of_a).each(function (item) {
        elements[item.value] = item.$ele;
        if (item.required) {
          required = true;
        }
      });

      var value = _(check_boxs_of_a)
        .filter(function (item) {
          return item.checked === true;
        })
        .map(function (item) {
          return item.value;
        });

      if (value.length === 0) {
        value = "";
      } else {
        value = value[0];
      }

      final_ui_raw_data.push({
        key: check_boxs_of_a[0]["key"],
        ui_type: "radio",
        key_split: check_boxs_of_a[0]["key"].split("."),
        required: required,

        all_possible_value: _(check_boxs_of_a).map(function (item) {
          return item.value;
        }),
        value: value,
        $elements_obj: elements,
      });
    });
    return final_ui_raw_data;
  };

  tmp.checkbox_build_ui_raw_data = function () {
    var checkbox_list = [],
      all_checkboxs = [];
    slh.$app.find("input[type=checkbox]").each(function (index, ele) {
      var $ele = $(ele);
      checkbox_list.push($ele.data("key"));
      all_checkboxs.push({
        key: $ele.data("key"),
        html_id: ele.id,
        required: $ele.prop("required"),
        value: $ele.val(),
        $ele: $ele,
        checked: $ele.prop("checked"),
      });
    });

    checkbox_list = _.unique(checkbox_list);

    var final_ui_raw_data = [];

    _.each(checkbox_list, function (checkbox_single_item) {
      var check_boxs_of_a = _(all_checkboxs).filter(function (item) {
        return item.key === checkbox_single_item;
      });

      var elements = {},
        required = false;
      _(check_boxs_of_a).each(function (item) {
        elements[item.value] = item.$ele;
        if (item.required) {
          required = true;
        }
      });

      final_ui_raw_data.push({
        key: check_boxs_of_a[0]["key"],
        ui_type: "checkbox",
        key_split: check_boxs_of_a[0]["key"].split("."),
        required: required,

        all_possible_value: _(check_boxs_of_a).map(function (item) {
          return item.value;
        }),
        value: _(check_boxs_of_a)
          .filter(function (item) {
            return item.checked === true;
          })
          .map(function (item) {
            return item.value;
          }),
        $elements_obj: elements,
      });
    });
    return final_ui_raw_data;
  };

  // tmp.ui_data
  tmp.build_ui_raw_data = function () {
    var ui_raw_data = [];
    var keys = [];
    _.map(tmp.ui_types, function (ui_type) {
      slh.$app.find(ui_type).each(function (index, ele) {
        var $ele = $(ele);
        var element_value = $ele.val();

        if (element_value === null) {
          element_value = "";
        }

        keys.push($ele.data("key"));
        ui_raw_data.push({
          key: $ele.data("key"),
          ui_type: "text",
          key_split: $ele.data("key").split("."),
          html_id: ele.id,
          required: $ele.prop("required"),
          value: element_value.trim(),

          $ele: $ele,
        });
      });
    });
    // Add input checkbox here!!
    ui_raw_data = _.union(ui_raw_data, tmp.checkbox_build_ui_raw_data());
    ui_raw_data = _.union(ui_raw_data, tmp.radio_build_ui_raw_data());

    return ui_raw_data;
  };

  slh.get_user_inputs = function () {
    tmp.page_ui_data = {};
    tmp.keys_to_obj(tmp.build_ui_raw_data());
    window.page_ui_data = tmp.page_ui_data;
    return tmp.page_ui_data;
  };
  slh.user_has_atleast_one_input = function () {
    let check = _(_(slh.get_user_inputs()).values()[0])
      .values()
      .reduce(function (item, str) {
        if (_.isEmpty(item)) {
          item = "";
        }
        return item + str;
      }, "");
    if (check === "") {
      return false;
    }
    return true;
  };

  tmp.preload_checkbox = function (ui_item, value_array) {
    _(value_array).each(function (value) {
      ui_item.$elements_obj[value].prop("checked", "checked");
    });
  };
  slh.preload_user_inputs = function (parent_obj) {
    var ui_raw_data = tmp.build_ui_raw_data();

    _(ui_raw_data).each(function (ui_item) {
      var pre_value = _(parent_obj).get(ui_item.key_split);
      if (ui_item.ui_type !== "checkbox") {
        ui_item.$ele.val(pre_value);
      } else {
        tmp.preload_checkbox(ui_item, pre_value);
      }
    });
  };

  //## combination ...

  slh.save_user_inputs = function (parent_obj) {
    slh.is_required_ui();
    slh.get_user_inputs();
    return _.extend(parent_obj, tmp.page_ui_data);
  };

  /// Notification

  slh.notify = function (msg, type_message) {
    var elemen_id = "nt_fxt_bo" + Date.now();
    var icon = "";
    if (type_message === "error") {
      icon = "fa-triangle-exclamation";
    } else if (type_message === "sucess") {
      icon = "fa-check";
    } else if (type_message === "sucess") {
      icon = "fa-check";
    } else if (type_message === "developer") {
      icon = "fa-check";
    }

    var html =
      '<div id="' +
      elemen_id +
      '"  class="notification_push notification_' +
      type_message +
      '" > ' +
      '<div class="float-left"><i class="nt_icon_x fa-solid ' +
      icon +
      '"></i></div> <div class="float-left"> ' +
      msg +
      ' </div> <div class="nt-clear"></div></div>';

    $(".noti_loca_xrgb").append(html);

    setTimeout(function () {
      $(".noti_loca_xrgb")
        .children("#" + elemen_id)
        .remove();
    }, 7000);
  };

  slh.notify_error = function (msg) {
    slh.notify(msg, "error");
  };
  slh.notify_sucess = function (msg) {
    slh.notify(msg, "sucess");
  };
  slh.notify_developer = function (msg) {
    slh.notify(msg, "developer");
  };

  //
  window.__data = {};
  /// Get json from server
  slh.get_json = function (uri, callback) {
    $.getJSON(__config.backend_url + uri, callback);
  };
  slh.preload_json = function (data_key, uri, callback) {
    slh.get_json(uri, function (sever_data) {
      __data[data_key] = sever_data;

      if (_.isFunction(callback)) {
        callback(sever_data);
      }
    });
  };

  slh.fill_select_options = function (opts) {
    // {el: "#district",
    // data: __data["district"],
    // value_key: "district_bn_name",
    // value_html: "district_bn_name",}

    var options_str = "<option></option>";
    _.each(opts.data, function (x) {
      options_str +=
        "<option value='" +
        x[opts.value_key] +
        "'>" +
        x[opts.value_html] +
        "</option>";
    });
    slh.$app.find(opts.el).html(options_str);
  };

  window.notify_error = slh.notify_error;
  window.notify_sucess = slh.notify_sucess;

  $(document).ready(function () {
    slh.__doc_init();
  });

  return slh;
})();
