$(document).ready(function () {
  $(".confirm_region .aprove").on("click", function (e) {
    var _this = $(this);
    $.removeCookie("current_region");

    if (arAllcorp3Options["SITE_ADDRESS"].indexOf(",") != "-1") {
      var arDomains = arAllcorp3Options["SITE_ADDRESS"].split(",");
      if (arDomains) {
        for (var i in arDomains) {
          var domain_name = arDomains[i].replace("\n", "");
          domain_name = arDomains[i].replace("'", "");
          $.cookie("current_region", _this.data("id"), { path: "/", domain: domain_name });
        }
      }
    } else $.cookie("current_region", _this.data("id"), { path: "/", domain: arAllcorp3Options["SITE_ADDRESS"] });

    $(".confirm_region").remove();
    if (typeof _this.data("href") !== "undefined") location.href = _this.data("href");
  });
  $(".js_city_change").on("click", function () {
    var _this = $(this);
    if (window.matchMedia("(min-width:992px)").matches) {
      $(".regions").find(".js_city_chooser").trigger("click");
    } else if (_this.closest(".top_mobile_region").length) {
      $("#mobileheader .burger").click();

      $(".mobilemenu__menu--regions > ul > li > div > a").click();
    }
    $(".confirm_region").remove();
  });
  $(".js_city_chooser").on("click", function () {
    $(".confirm_region").remove();
  });
});
