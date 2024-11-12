$(document).ready(function () {
  var style_push =
    '<div class="noti_loca_xrgb"></div>' +
    "<style>.noti_loca_xrgb{ position: fixed;top: 65px;right: 22px;z-index: 21;}" +
    ".nt_icon_x{font-size:2.2em;}" +
    " .notification_error{color: #b71c1c;background: #FFCCBC;} " +
    " .notification_sucess{color: #33691E;background: #DCEDC8;} " +
    ".float-left{float:left;margin-left:7px;}" +
    ".nt-clear{clear:both}" +
    ".notification_push{position: relative; font-size: 2.2em;padding: 10px;z-index: 315;border-radius: 10px; margin: 5px;} </style>";

  $(document.body).prepend(style_push); // <div class="noti_loca_xrgb"></div>

  // clean up ....

  function notify(msg, type_message) {
    var elemen_id = "nt_fxt_bo" + Date.now();
    var icon = "";
    if (type_message === "error") {
      icon = "fa-triangle-exclamation";
    } else if (type_message === "sucess") {
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
  }

  function notify_error(msg) {
    notify(msg, "error");
  }
  function notify_sucess(msg) {
    notify(msg, "sucess");
  }
  window.notify_error = notify_error;
  window.notify_sucess = notify_sucess;
});
