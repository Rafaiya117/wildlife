$(document).ready(function () {
  function district_load(data) {
    __data["district"] = _.uniq(data, function (x) {
      return x.district_id;
    }).map(function (x) {
      return {
        district_id: x.district_id,
        district_name: x.district_name,
      };
    });
  }
  __.preload_json("upzilla", "district/get.php", district_load);
  __.preload_json("country", "district/country_codes.json");
  __.preload_json("country", "district/countries.json");
  __.preload_json("species", "species/get.php");
});

$(document).ready(function () {
  function org_load(data) {
    __data["agency"] = _.uniq(data, function (x) {
      return x.org_id;
    }).map(function (x) {
      return {
        org_id: x.org_id,
        org_name: x.org_name,
      };
    });
  }

  __.preload_json("officer_designation", "organization/get.php", org_load);
 
});

$(document).ready(function () {
  function fd_load(data) {
    __data["forest_division"] = _.uniq(data, function (x) {
      return x.forest_division_id;
    }).map(function (x) {
      return {
        forest_division_id: x.forest_division_id,
        forest_division_name: x.forest_division_name,
      };
    });
  }
  __.preload_json("ranges", "organization/get_fd.php", fd_load);
});


