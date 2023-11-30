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

<footer>

<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
  
        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                <strong>Sign up for our newsletter</strong>
              </p>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example21" class="form-control" />
                <label class="form-label" for="form5Example21">Email address</label>
              </div>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-light mb-4">
                Subscribe
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->
  
      <!-- Section: Text -->
      <section class="mb-4">
        <p>
        Ensemble nous batisons un mondes meilleur basé sur la communication et le partages des experiences. avec la communauté nous arrivons toujours au bout de nos préocupations quotidiennes
        </p>
      </section>
      <!-- Section: Text -->
  
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0 vaut2">
            <h3 class="text-uppercase">contact Us</h3>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Telephone : 66 91 98 71</a>
              </li>
              <li>
                <a href="#!" class="text-white">Portable : +226 78 20 01 00</a>
              </li>
              <li>
                <a href="#!" class="text-white"><input type="text" placeholder="Adress Email"></a>
              </li>
              <li>
                <a href="#!" class="text-white"><button type="button">Submit</button></a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0 vaut1">
            <h3 class="text-uppercase">Legal</h3>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Politique de confidentialité</a>
              </li>
              <li>
                <a href="#!" class="text-white">Mention Legale</a>
              </li>
              <li>
                <a href="#!" class="text-white">Experience</a>
              </li>
              <li>
                <a href="#!" class="text-white">Domaine</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0 vaut">
            <h3 class="text-uppercase">Explore</h3>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Commentaire</a>
              </li>
              <li>
                <a href="#!" class="text-white">Actualité</a>
              </li>
              <li>
                <a href="#!" class="text-white">Revus</a>
              </li>
              <li>
                <a href="#!" class="text-white">Activié</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0 vau">
            <h3 class="text-uppercase">Suivez-nous</h3>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Facebook</i></a>
              </li>
              <li>
                <a href="#!" class="text-white">Linkedin</i></a>
              </li>
              <li>
                <a href="#!" class="text-white">Instagram</i></a>
              </li>
              <li>
                <a href="#!" class="text-white">Twitter</i></a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MonSITE.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->



</footer>

  </body>
</html>
