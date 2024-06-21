<!DOCTYPE html>
<html lang="fr">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="The District est un restaurant situé à Amiens(80000)">
    <meta name="keywords" content="restaurant, amiens, 80000">
    <meta name="robots" content="noindex">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous">
            
    <link rel="stylesheet" href="assets/css/colors.css" type="text/css" media="all">
    <link rel="shortcut icon" href="assets/img/district/favicon.webp" type="image/webp">
    
    <title>Restaurant The District</title>

</head>


<body class="parallax_desktop">

    <!-- HEADER -->
    <header class="container-fluid">

        <div class="row">
            
            <!--NAVBAR-->
            <nav class="navbar navbar-expand-lg">
                
                <div class="container-fluid">
      
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/district/logo.png" alt="Logo The District" width="200" height="auto" class="bordures_logo d-none d-lg-block">
                        <img src="assets/img/district/logo.png" alt="Logo The District" width="100" height="auto" class="bordures_logo d-block d-sm-none">
                    </a>
    
                    <button class="navbar-toggler bordures border-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse bg-sm-white" id="navbarNavAltMarkup">
        
                        <div class="navbar-nav gap-lg-5">
          
                            <a class="nav-link liens_header fs-2 fw-medium" aria-current="page" href="#">ACCUEIL</a>
                            <a class="nav-link liens_header fs-2 fw-medium" href="#">CATEGORIES</a>
                            <a class="nav-link liens_header fs-2 fw-medium" href="#">PLATS</a>
                            <a class="nav-link liens_header fs-2 fw-medium" href="#">CONTACT</a>
                            
                            <div>
                                
                                <a class="nav-link liens_header fs-2 fw-medium justify-content-end" href="#"><img src="assets/img/icones/icone_user_district.png" width="30" height="auto" class="mb-2 me-2">Connexion</a>
                                <a class="nav-link liens_header fs-2 fw-medium" href="#"><img src="assets/img/icones/icone_panier_1_district.png" width="30" height="auto" class="mb-2 me-2">Panier</a>
                            
                            </div>
                            
                        </div>
      
                    </div>
    
                </div>
  
            </nav>
            
            <!-- barre de recherche -->
            <div class="row">

                <div class="z-3 input-group d-flex flex-column 
                            d-none d-lg-block champ_recherche" style="width: 25rem; height: auto;">

                    <div class="d-flex p-1 ms-2">

                        <span class="input-group-text fs-5 sans_bordures bg-white">&#x1F50E;</span>

                            <input type="text" class="ms-1 fs-5 fw-medium form-control sans_bordures" 
                                    placeholder="Rechercher un plat" aria-label="Rechercher" id="recherche_dynamique">
                
                    </div>

                    <div id="suggestions" class="fs-5 fw-medium"></div>
                        
                </div>

            </div>
                        
        </div>
        
    </header>

    
    <!-- NAV -->
    <nav class="container-fluid">
    
        <div class="row fond_logo d-flex align-items-center">

            <!-- videos -->
            <div class="col-lg-4 d-none d-lg-block">

                <div class="actually mx-auto">
                    <p class="fs-3 fw-medium lettres_blanches">" En ce moment "</p>
                </div>

                <div class="bordures_promo mx-auto">
                    <p class="promo fw-bold mx-auto mt-3">-10%</p>
                    <p class="phrase_promo lettres_blanches fw-bold text-center">Sur catégorie VEGGIE</p>
                </div>

            </div>
    
            <div class="col-4 display-inline-block d-none d-lg-block bordure_haut">

                <video autoplay loop muted class="img-fluid">

                    <source src="assets/img/videos/video_the_district_projet.mp4" type="video/mp4">
                    <p>Votre navigateur ne prend pas en charge la vidéo.</p>

                </video>                
    
            </div>

            <div class="col-4 d-none d-lg-block text-center">

                <img src="assets/img/district/ecriture_district_blanc.png" class="w-75"><br>
                <p class="lettres_blanches fs-3">Ce site est un projet de formation</p>

            </div>


            <!-- barre de recherche dans video -->
            <!-- <div class="position-absolute input-group d-flex flex-column align-self-center justify-content-center
                        w-50 d-none d-lg-block champ_recherche">

                <div class="d-flex p-1 ms-2">

                    <span class="input-group-text fs-4 sans_bordures bg-white" id="basic-addon1">&#x1F50E;</span>

                    <input type="text" class="ms-1 fs-4 fw-medium form-control sans_bordures" 
                            placeholder="Rechercher un plat" aria-label="Rechercher" id="recherche_dynamique">
                
                </div>

                <div id="suggestions" class="fs-4 fw-medium"></div>
                        
            </div> -->

            <?php

                include "assets/php/fichiers_php/carousel_mobile.php";

            ?>   

        </div>
    
    </nav>