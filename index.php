<?php
session_start();
include 'header.html';
?>

<li><a href="who.php">Qui somme nous?</a></li>
<li><a href="inform.php">S'informer</a></li>
<li><a href="feed.php">Live Feed</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</div><!-- /.nav-collapse -->
</div><!-- /.container -->
</nav><!-- /.navbar -->






<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">


        <div class="jumbotron">
        </div>






        <div><!--/.col-xs-12.col-sm-9-->
            <div class="col-md-2 col-md-offset-1 col-lg-4">
                <h2>Qui somme nous?</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-md-3 col-md-offset-1 col-lg-4">
                <h2>S'informer</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-md-6 col-md-offset-1 col-lg-4">
                <h2>Live Feed</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-md-6 col-md-offset-1 col-lg-4">
                <h2>Contact</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
        </div><!--/row-->
    </div><!--/.col-xs-12.col-sm-9-->
    </body>


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

   <?php
    include 'footer.html';
    ?>