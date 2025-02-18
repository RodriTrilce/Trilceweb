/* MENU STICKY */

$(document).on("scroll", function () {
    if ($(document).scrollTop() > 86) {
        $("#trilce-navbar").addClass("shrink");
    } else {
        $("#trilce-navbar").removeClass("shrink");
    }
});