<?php
session_start();
include 'header.html';
?>

<li class="active"><a href="who.php">Qui somme nous?</a></li>
<li><a href="inform.php">S'informer</a></li>
<li><a href="feed.php">Live Feed</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</div><!-- /.nav-collapse -->
</div><!-- /.container -->
</nav><!-- /.navbar -->

    <script type="text/javascript" src="js/swipe.js"></script>
    <script>
        swippedLeft = function(){
            document.location="inform.php";
        }
        swippedRight = function(){
            document.location="index.php";
        }
    </script>
 <?php
    include 'footer.html';
    ?>