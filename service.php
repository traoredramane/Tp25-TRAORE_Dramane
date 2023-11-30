
<?php
try
{
// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=dramane', 'root', '');
} 
catch(Exception $e)
{
// En cas d'erreur, on affiche un message et on arrête tout
die('Erreur : '.$e->getMessage());
}
?>


<?php
include("nav.php")
?> 

<section class="dis1">
<h1>DISCUTION</h1>

<div class="dis">

<div  class="dir">
<h2>Interaction</h2>
<p>Interagissez avec les personnes de votre <br> entourage  pour vous envoyez des messages</p>
<i class="fas fa-comment-dots da1"></i>
</div>


<div  class="dir2">
<h2>Partage</h2>
<p>Partagez des photos et videos avec vos proches <br> en toute  securité tout en restant connecté</p>
<i class="fas fa-share-from-square da2"></i>
</div>



<div  class="dir3">
<h2>Recevoir</h2>
<p>Une fois les messages et vidéos envoyés vous pouvez <br> les recévoir en toute rapidité, cela est valable lorsque <br> vous etes connecté</p>
<i class="fas fa-satellite-dish da3"></i>
</div>



</div>

</section><br>



<section class="docu">

<h1>Les Documents</h1>

<div class="not">

<div class="not1">


<i class="fa-solid fa-photo-film do1"></i>
<h2>La Galerie</h2>
<p>Vous pouvez ajoutez vos <br> images et sauvegarder des <br> images dejà telechargé</p>
</div>

<div class="not2">
<i class="fa-regular fa-folder-open do1"></i>
<h2>Status</h2>
<p>Regardez et mettre des status <br> pour vos contacts</p>
</div>

<div class="not3">
<i class="fa-regular fa-bell do1"></i>
<h2>Notification</h2>
<p>Recevez les notifications des <br> differentes conversations et les <br> fichiers et videos reçus</p>
</div>
</div>

</section><br><br>


<?php
include("footer.php")
?>