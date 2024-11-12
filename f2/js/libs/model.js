// console.log('model .loaded');

// save locally !
// save in server

var model = {
  get_new_id: function (user_input_data) {
    $.post(
      user_input_data.meta.get_id_url,
      user_input_data,
      function (data) {
        if (!_.isUndefined(data.fire)) {
          console.log(":->: id", data);
          fire(data.fire, data);
        }
      },
      "json"
    );
  },
  localsave: function () {},
  save_server: function (user_input_data) {
    $.post(
      user_input_data.meta.save_url,
      user_input_data,
      function (data) {
        if (!_.isUndefined(data.fire)) {
          fire(data.fire, data);
          fire("get_all_my_" + user_input_data.meta.model_name, data);
        }
      },
      "json"
    );
  },
  get_all: function (user_input_data) {
    var limit = 10,
      offset = 0;
    $.post(
      user_input_data.meta.get_url,
      { limit: limit, offset: offset },
      function (ajax_input_data) {
        fire("get_all_" + user_input_data.meta.model_name, [ajax_input_data]);
        console.log("got data !!! all data!!", ajax_input_data);
      }
    );
  },
  get_all_my: function (user_input_data) {
    var limit = 10,
      offset = 0;
    $.post(
      user_input_data.meta.get_my_url,
      { limit: limit, offset: offset },
      function (data) {
        fire("get_all_my_" + user_input_data.meta.model_name, data);
      }
    );
  },
  publish_server: function (user_input_data) {
    $.post(
      user_input_data.meta.publish_url,
      user_input_data,
      function (data) {
        if (!_.isUndefined(data.fire)) {
          fire(data.fire, data);
        }
      },
      "json"
    );
  },
};

// model.save('save!!');

// check localstoriage
//

$(document).ready(function () {
  // fire('wlor_create_user_input'); // ???
});
