$(document).ready(function () {
  console.log("----- LOGIN CHECKD!!");

  function log_out() {
    console.log("logout !!! ");
    localStorage.clear();
    window.location = "login.php";
  }

  window.log_out = log_out;

  function backend_check() {
    $.post("../backend/login/jwt_check_login.php", {
      jwt: localStorage["jwt"],
      uuid: localStorage["uuid"],
      rx_id: localStorage["rx_id"],
      name: localStorage["name"],
    })
      .done(function (login_data) {
        if (
          !_.isEmpty(login_data) &&
          !_.isEmpty(login_data.jwt) &&
          !_.isEmpty(login_data.uuid)
        ) {
          localStorage["jwt"] = login_data.jwt;
          localStorage["uuid"] = login_data.uuid;
          localStorage["name"] = login_data.name;
          localStorage["rx_id"] = login_data.rx_id;
        } else {
          log_out();
        }
      })
      .fail(function (httpObj, textStatus) {
        console.log(httpObj.status, httpObj, textStatus);
        if (httpObj.status === 401) {
          log_out();
        }
      });
  }

  function check_user_login() {
    if (
      _.isEmpty(localStorage["jwt"]) ||
      _.isEmpty(localStorage["uuid"]) ||
      _.isEmpty(localStorage["rx_id"])
    ) {
      console.log("---->>>>> get out --->> ");
      log_out();
    } else {
      backend_check();
      console.log("---!! Login --->> login ok! --- --->> ");
    }
  }

  check_user_login();
});

route["logout"] = function () {
  log_out();
};
