<?php
session_start();
include 'header.html';
?>

<li><a href="who.php">Qui sommes nous?</a></li>
<li class="active"><a href="inform.php">S'informer</a></li>
<li><a href="feed.php">Live Feed</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</div><!-- /.nav-collapse -->
</div><!-- /.container -->
</nav><!-- /.navbar -->

<script type="text/javascript" src="js/swipe.js"></script>
    <script>
        swippedLeft = function(){
            document.location="feed.php";
        }
        swippedRight = function(){
            document.location="who.php";
        }
    </script>

 <?php
    include 'footer.html';
    ?>