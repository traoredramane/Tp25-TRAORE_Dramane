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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <header>
       
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid justify-content-between nav1">
          <!-- Left elements -->
          <div class="d-flex">
            <!-- Brand -->
            <a
              class="navbar-brand me-2 mb-1 d-flex align-items-center"
              href="#"
            >
              <img
                src=""
              />
            </a>

            <!-- Search form -->
            <form class="input-group w-auto my-auto d-none d-sm-flex">
              <input
                autocomplete="off"
                type="search"
                class="form-control rounded"
                placeholder="Search"
                style="min-width: 125px"
              />
              <span class="input-group-text border-0 d-none d-lg-flex"
                ><i class="fas fa-search"></i
              ></span>
            </form>
          </div>
          <!-- Left elements -->


          <!-- Right elements -->
          <ul class="navbar-nav flex-row">
            <li class="nav-item me-3 me-lg-1">
              <a class="nav-link d-sm-flex align-items-sm-center" href="">
                <!-- <img
                  src="https://mdbcdn.b-cdn.net/img/new/avatars/1.webp"
                  class="rounded-circle"
                  height="22"
                  alt="Black and White Portrait of a Man"
                  loading="lazy"
                />
                <strong class="d-none d-sm-block ms-1">John</strong> -->
              </a>
            </li>
            <li class="nav-item me-3 me-lg-1">
              <a class="nav-link" href="index.php">
                <span><i class="fas fa-plus-circle fa-lg"></i></span>
              </a>
            </li>
            <li class="nav-item dropdown me-3 me-lg-1">
              <a
                class="nav-link dropdown-toggle hidden-arrow"
                href="service.php"
                id="navbarDropdownMenuLink"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fas fa-comments fa-lg"></i>

                <span class="badge rounded-pill badge-notification bg-danger"
                  >6</span
                >
              </a>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li>
                  <a class="dropdown-item" href="#">Some news</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Another news</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown me-3 me-lg-1">
              <a
                class="nav-link dropdown-toggle hidden-arrow"
                href="connexion.php"
                id="navbarDropdownMenuLink"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fas fa-bell fa-lg"></i>
                <span class="badge rounded-pill badge-notification bg-danger"
                  >12</span
                >
              </a>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li>
                  <a class="dropdown-item" href="#">Some news</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Another news</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown me-3 me-lg-1">
              <a
                class="nav-link dropdown-toggle hidden-arrow"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="fas fa-chevron-circle-down fa-lg"></i>
              </a>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li>
                  <a class="dropdown-item" href="#">Some news</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Another news</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
          </ul>
          <!-- Right elements -->
        </div>
      </nav>
      <!-- Navbar -->
      
    

<div class="head1">

  <div class="head">
    <h1>Bienvenu sur la page</h1>
    <p>Communauté, vivez en communauté, discuté, apprenez et <br> partager des experiences tous en vous cnnextant <br>sur le reseau communautaire.</p>
  </div>
<div class="head2">
<img src="hed.png" alt="">
</div>

</div>
</header><br><br>