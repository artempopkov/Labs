$('.choose li')
    .hover(function () {
        let picValue = $(this).val();
        $("#image").attr("src", "imgs/" + picValue + ".jpg");
        $("#image").css("display", "block");
    }, function () {
        $("#image").css("display", "none");
});