<?php
session_start();
include 'header.html';
?>

<li><a href="who.php">Qui sommes nous?</a></li>
<li><a href="inform.php">S'informer</a></li>
<li class="active"><a href="feed.php">Live Feed</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</div><!-- /.nav-collapse -->
</div><!-- /.container -->
</nav><!-- /.navbar -->

<br/><br/><br/>
<p>Aidez-nous à accélérer le traitement des alertes données grâce au réseaux sociaux !</p>
<p>Pour celà, rien de plus simple, dites-nous si vous pensez que les messages qui apparaissent vous sembles utiles ou non.</p>
<p>Vous pouvez utiliser les boutons on faire glisser votre doigt vers la gauche (Inutile) ou la droite (utile) !</p>
<p id="data">On continue de bosser sérieusement avec le bureau des jeux #nuitinfo </p>

<button onclick="next()">Inutile !</button>
<button onclick="next()">Utile !</button>

<script type="text/javascript" src="js/swipe.js"></script>
    <script>
        
        
        var donnees = ["Vous tenez comment pour la #nuitinfo ? Thé ou café ? #mascotte ",
                       "H - 4 ! Mine de rien, ça fait plus de 11h que vous planchez sur le sujet de la @ProtecCivile !",
                       "Et hop, le petit bugfix de #Island pendant la #nuitinfo",
                       "Ok, on passe aux choses sérieuses, on passe au Lac du Connemara #nuitinfo",
                       "C'est bien évidemment quand tu as 300 bonhommes dans le bâtiment pour la #nuitinfo que les chiottes te lâche à 2h du mat #Enjoy #Moultitache",
                       "Les meilleures crèpes de la #NuitInfo, c'est @ChezBienvenue évidemment ! #Challenge #Nutella #Corruption #BonEsprit"];
        
        function next(){
            document.getElementById("data").innerHTML = donnees.pop();
        }
        
        swippedRight = next;
        swippedLeft = next;
    </script>
 <?php
    include 'footer.html';
    ?>