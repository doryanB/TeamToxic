var swippedRight = function(){
    console.log("Swapped right");
};
var swippedLeft = function(){
    console.log("Swapped left");
};

var sensibility = 200;
var touchStartX;
document.addEventListener("touchstart", function (event) {
    event.preventDefault();
    touchStartX = event.targetTouches[0].pageX;
});

document.addEventListener("touchend", function (event) {
    var tmp = event.changedTouches[0].pageX - touchStartX;
    if (tmp < sensibility)
        swippedLeft();
    else if (tmp > sensibility * -1)
        swippedRight();
});

document.addEventListener("touchmove", function (event) {
    var tmp = event.targetTouches[0].pageX - touchStartX;
    if (tmp < 0)
        return;
}, false);


