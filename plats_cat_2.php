<?php

    include "assets/php/header.php";

?>

    <!-- MAIN -->
    <main class="container-fluid pb-5">

        <!-- intitulé main -->
        <div class="row">

            <!-- <div id="libelle_categorie"></div> -->

            <?php

                include "assets/php/carousel_mobile.php";

            ?>
          
        </div>

        <!-- div remplissage plats par catégorie -->
        <div class="row d-flex justify-content-around">

            <!-- <div id="plats_par_categorie" class="d-flex flex-wrap justify-content-around"></div> -->

            <?php
            
                include('assets/php/libelle_categories.php');
            
            ?>

            <?php
            
                require_once 'assets\php\dao.php';

                $plats_categorie = get_plats_categorie();

                foreach ($plats_categorie as $plat_cat) {
                    echo '<div class="col-lg-3 mb-5 mb-lg-5 mt-3 mt-lg-5">';
                        echo '<div class="card w-auto border-4 bordures rounded-5">';
                            echo '<img src="assets/img/plats/' . $plat_cat['image'] . '" class="card-img-top p-3 rounded-5" alt="">';
                            echo '<h5 class="card-text fs-3 fw-medium ms-3">' . $plat_cat['libelle'] . '</h5>';
                            echo '<p class="fw-medium mb-2 ms-3 me-3">' ."Prix: ". $plat_cat['prix'] ." €". '</p>';
                            echo '<p class="fw-medium mb-2 ms-3 me-3" style="cursor: pointer;" onclick="toggleDescription(this)">Voir la description du plat ▼</p>';
                            echo '<div class="fw-medium fst-italic mb-3 ms-3 me-3" id="description-' . $plat_cat['id'] . '" style="display: none;">' . $plat_cat['description'] . '</div>';
                            echo '<a href="commande.php?id=' . $plat_cat['id'] . '" class="card-text fs-5 fw-medium text-center shadow-lg p-2 m-3 mt-0 rounded-4 text-decoration-none fond_logo lettres_blanches">' . "Commander" . '</a>';
                        echo '</div>';
                    echo '</div>';
                }

                $boutons = get_boutons();
            ?>

        </div>

        <!-- boutons précédent retour suivant -->
        <div class="row mt-lg-5 mb-lg-5">

            <div class="col-4 col-lg-4 d-flex">

                <a class="d-flex justify-content-center align-items-center fw-medium mx-auto shadow-lg fs-5 bouton_precedent" 
                    id="precedent" style="width: 10rem; height: 3rem;"  href="plats_par_categorie.php?id=<?php echo $categorie_id - 1; ?>" role="button">Précédent</a>

            </div>

            <div class="col-4 col-lg-4 d-flex">

                <a class="d-flex justify-content-center align-items-center fw-medium mx-auto shadow-lg fs-5 rounded-4 bouton_categories" 
                    style="width: 10rem; height: 3rem;" href="categories.php" role="button">Retour</a>
                        
            </div>

            <div class="col-4 col-lg-4 d-flex">

                <a class="d-flex justify-content-center align-items-center fw-medium mx-auto shadow-lg fs-5 bouton_suivant" 
                    id="suivant" style="width: 10rem; height: 3rem;"  href="plats_par_categorie.php?id=<?php echo $categorie_id + 1; ?>" role="button">Suivant</a>
    
            </div>

        </div>

    </main>

<?php

    include "assets/php/footer.php";

?>

  