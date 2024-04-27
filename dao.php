<?php

// Fichier PDO.php
require('assets/php/PDO.php');


// Fonction Affichage Catégories
function get_categories() {
    global $pdo; // Utilisez la connexion PDO définie précédemment

    try {
        $query = "SELECT * FROM categorie";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        // Gérer l'erreur (par exemple, journaliser ou afficher un message d'erreur)
        echo "Erreur : " . $e->getMessage();
        return [];
    }
}


// Fonction Affichage Plats
function get_plats() {
    global $pdo; // Utilisez la connexion PDO définie précédemment

    try {
        $query = "SELECT * FROM plat";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        // Gérer l'erreur (par exemple, journaliser ou afficher un message d'erreur)
        echo "Erreur : " . $e->getMessage();
        return [];
    }
}


// Fonction Affichage Plats par catégories
function get_plats_categorie() {
    // Récupérer l'ID de la catégorie depuis l'URL
    if (isset($_GET['id'])) {
        $categorie_id = $_GET['id'];

        // Vérifier que l'ID de la catégorie est dans la plage 1-8
        if ($categorie_id < 1) {
            $categorie_id = 1;
        } elseif ($categorie_id > 8) {
            $categorie_id = 8;
        }

        // Sélectionner les plats de la catégorie spécifiée
        try {
            $query = "SELECT * FROM plat WHERE id_categorie = :categorie_id";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':categorie_id', $categorie_id, PDO::PARAM_INT);
            $stmt->execute();
            $plats = $stmt->fetchAll(PDO::FETCH_ASSOC);

           
        } catch (PDOException $e) {
            // Gérer l'erreur
            echo "Erreur : " . $e->getMessage();
        }
    }
}


// Fonction Boutons
function get_boutons($pdo, $page) {
    $items_per_page = 10; // Nombre d'éléments par page

    // Calculer l'offset pour la requête SQL
    $offset = ($page - 1) * $items_per_page;

    // Sélectionner les catégories pour la page actuelle
    try {
        $query = "SELECT * FROM categorie LIMIT :offset, :items_per_page";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->bindParam(':items_per_page', $items_per_page, PDO::PARAM_INT);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Afficher les catégories ici...
        foreach ($categories as $categorie) {
            echo '<div class="categorie">' . $categorie['nom'] . '</div>';
        }
    } catch (PDOException $e) {
        // Gérer l'erreur
        echo "Erreur : " . $e->getMessage();
    }

    // Lorsque l'utilisateur clique sur le bouton "Précédent"
    if (isset($_GET['precedent'])) {
        $categorie_id -= 1; // Décrémenter l'ID de la catégorie
    }

    // Lorsque l'utilisateur clique sur le bouton "Suivant"
    if (isset($_GET['suivant'])) {
        $categorie_id += 1; // Incrémenter l'ID de la catégorie
    }

    // Sélectionner les plats de la catégorie spécifiée
    try {
        $query = "SELECT * FROM plat WHERE id_categorie = :categorie_id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':categorie_id', $categorie_id, PDO::PARAM_INT);
        $stmt->execute();
        $plats = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Afficher les plats (comme vous l'avez déjà fait)
        // ...
    } catch (PDOException $e) {
        // Gérer l'erreur
        echo "Erreur : " . $e->getMessage();
    }
}


// Fonction Affichage Commande
function get_commande() {


}


// Fonction Affichage Index
function get_index() {


}


?>


