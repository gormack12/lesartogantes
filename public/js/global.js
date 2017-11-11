$(document).ready(function() {

  var curent_url = window.location.href;

  $(".nav-link").each(function () {

    var href = this.href;

    if (curent_url.indexOf(href) !== -1)
    {
      $(this).addClass(" active");
    }
  });

});