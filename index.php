<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>

        <p id="log"></p>
    </body>
</html>
<script>
    var sensibility=200;
    var touchStartX;
    document.addEventListener("touchstart", function(event){
        event.preventDefault();
        touchStartX = event.targetTouches[0].pageX;
    });
    
    document.addEventListener("touchend", function(event){
        var tmp = event.changedTouches[0].pageX-touchStartX;
        if(tmp>sensibility) swappedLeft();
        else if(tmp<sensibility*-1) swappedRight();
    });
    
    document.addEventListener("touchmove", function(event){
        var tmp = event.targetTouches[0].pageX-touchStartX;
        if(tmp<0) return;
    }, false);
    
    function swappedLeft(){
        console.log("Swapped left");
    }
    function swappedRight(){
        console.log("Swapped right");
    }
</script>