$(".btn").click(function(e){
    $(".popup").css("display", "block");
    e.preventDefault();
});

$(".popupClose").click(function(e){
    $(".popup").css("display", "none");
    e.preventDefault();
});

