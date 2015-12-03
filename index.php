<?php
session_start();
include 'header.html';
?>
<body>
<div class="triangle"></div>
<div class="row">
<div><!--/.col-xs-12.col-sm-9-->
    <div class="col-xs-6 col-lg-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div><!--/.col-xs-6.col-lg-4-->
    <div class="col-xs-6 col-lg-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div><!--/.col-xs-6.col-lg-4-->
    <div class="col-xs-6 col-lg-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div><!--/.col-xs-6.col-lg-4-->
    <div class="col-xs-6 col-lg-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div><!--/.col-xs-6.col-lg-4-->
</div><!--/row-->
</div><!--/.col-xs-12.col-sm-9-->
</body>
<?php
include 'footer.html';
?>

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