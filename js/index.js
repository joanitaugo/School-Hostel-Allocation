$("#SimpleCarouselControls").carousel();
$(".item").click(function(){
    $("#SimpleCarouselControls").carousel(1);
});
$(".left").click(function(){
    $("#SimpleCarouselControls").carousel("previous");
}

);