
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
<!-- partie communauté -->

    <section class="commu1">

<h1>La communauté</h1>

      <div class="commu">
      <div class="">
          <h3>Fratertnité</h3>
          <img class="car2" src="com0.jpg" alt="" />

          <p>
            Lorem, ipsum dolor sit amet consectetur <br> adipisicing elit. In aliquid
            perferendis <br> mollitia dolor et omnis.
          </p>
        </div>

        <div class="">
            <h3>Solidarité</h3>
          <img class="co2" src="com2.jpg" alt="" />

          <p>
            Lorem, ipsum dolor sit amet consectetur <br> adipisicing elit. In aliquid
            perferendis <br> mollitia dolor et omnis.
          </p>
        </div>

        <div class="">
            <h3>Travail</h3>
          <img class="co3" src="com3.jpg" alt="" />

          <p>
            Lorem, ipsum dolor sit amet consectetur <br> adipisicing elit. In aliquid
            perferendis <br> mollitia dolor et omnis.
          </p>
        </div>
      </div>
    </section><br><br>

    <!-- partie famille et amis -->

<section class="sect2">

<h1>Famille et Amis (es)</h1>

<div class="sect-1">

<div class="sec-1">
<h2>Famille</h2>
<img src="famille.jpg" alt="">
</div>

<div class="sec-2">
    <h2> Amis (es)</h2>
    <img src="ami.jpg" alt="">
    </div>


</div>

</section><br><br>






<!-- partie experiences -->

<section class="sect3">

    <h1>Experience et societé</h1>

<div id="carouselExampleCaptions" class="carousel slide far">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="" src="exper1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="" src="societé.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="" src="fraternite.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


</section><br><br>


<?php
include("footer.php")
?>