<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>
    <?php

    include("../models/liste.model.php");
    include("../models/promotion.model.php");
    include("../models/referentiels.model.php");

    $Allapprenants = generApprenant();
    $Allstudents = generEtudiant();
    $Allpromotions = promotion();
    $Allreferentiels = getReferentielsData();

    include("../template/partial/menu.html.php");
    // Liste des pages autorisées
    $pagesAutorisees = [1, 2, 4, 7, 9, 12];

    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        // Vérifier si la page est autorisée
        if (in_array($page, $pagesAutorisees)) {
            // Inclure la page si elle est autorisée
            include("../template/page{$page}.html.php");
        } else {
            // Rediriger ou afficher un message d'erreur si la page n'est pas autorisée
            echo "Accès non autorisé à cette page";
        }
    } else {
        // Gérer le cas où 'page' n'est pas défini dans l'URL
        echo "Aucune page spécifiée";
    }   
    
    ?>
</body>

</html>