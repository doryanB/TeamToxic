var swippedRight = function () {
    console.log("Swapped right");
};
var swippedLeft = function () {
    console.log("Swapped left");
};
var swippedUp = function () {
    console.log("Swapped up");
};
var swippedDown = function () {
    console.log("Swapped down");
};

var sensibility = 200;
var lockSensibility = 30;
var locked;
var touchStartX;
var touchStartY;
document.addEventListener("touchstart", function (event) {
    event.preventDefault();
    touchStartX = event.targetTouches[0].pageX;
    touchStartY = event.targetTouches[0].pageY;
});

document.addEventListener("touchend", function (event) {
    if (locked === undefined)
        return;
    var tmp;
    if (locked === "Y") {
        tmp = event.changedTouches[0].pageY - touchStartY;
        if (tmp < sensibility*-1)
            swippedUp();
        else if (tmp > sensibility)
            swippedDown();
    } else {
        tmp = event.changedTouches[0].pageX - touchStartX;
        if (tmp < sensibility*-1)
            swippedLeft();
        else if (tmp > sensibility)
            swippedRight();
    }
    locked=undefined;
});

document.addEventListener("touchmove", function (event) {
    var tmp = event.targetTouches[0].pageX - touchStartX;
    if(tmp>lockSensibility || tmp<lockSensibility*-1){ locked="X";
    console.log("locked X");
    }
    else {
        tmp = event.targetTouches[0].pageY - touchStartY;
        if(tmp>lockSensibility || tmp<lockSensibility*-1){ locked="Y";
        console.log("locked Y");}
    }
}, false);


