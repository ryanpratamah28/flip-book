$(".toggle-password").click(function () {
    $(this).toggleClass("fa-sharp fa-solid fa-eye-low-vision");

    var input = $($(this).attr("toggle"));

    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
