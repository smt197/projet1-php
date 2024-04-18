<?php

function promotion(){
    $chemin = '/var/www/html/projet/donnee/promo.csv';
    $fichier = fopen($chemin, 'r');

    if ($fichier == NULL) {
        echo "Error";
    }
    else {

        while (($ligne = fgetcsv($fichier)) !== false) {
            $promo[] = array (
                "libelle" => $ligne[0],
                "dateDebut" => $ligne[1],
                "dateFin" => $ligne[2],
                "action" =>  $ligne[3],
                "idPromo" => $ligne[4]
            );
          
        }
        fclose($fichier);

        return $promo;
    }

    
}
function checkPromotion()
{
    if (isset($_POST['promotion'])) {
        $checkedPromotions = $_POST['promotion'];
        // Si la promotion est cochée, la valeur du tableau sera "on"
        // Vous pouvez traiter ces valeurs ici selon vos besoins
        foreach ($checkedPromotions as $promotion) {
            if ($promotion === "active") {
                // Promotion cochée, faire quelque chose...
                echo "La promotion est cochée.<br>";
            } else {
                // Promotion non cochée, faire quelque chose...
                echo "La promotion n'est pas cochée.<br>";
            }
        }
    } else {
        // Aucune promotion cochée
        echo "Aucune promotion n'est cochée.<br>";
    }
}















    // function promotion()
    // {
    //     $promo = [
    //         [
    //             'libelle' => "promo1",
    //             'dateDebut' => "2022-01-01",
    //             'dateFin' => "2022-12-12",
    //             'action' => "Off",
    //         ],
    //         [
    //             'libelle' => "promo4",
    //             'dateDebut' => "2022-01-01",
    //             'dateFin' => "2022-12-12",
    //             'action' => "On",
    //         ],
    //         [
    //             'libelle' => "promo2",
    //             'dateDebut' => "2022-01-01",
    //             'dateFin' => "2022-12-12",
    //             'action' => "Off",
    //         ],
    //         [
    //             'libelle' => "promo3",
    //             'dateDebut' => "2022-01-01",
    //             'dateFin' => "2022-12-12",
    //             'action' => "On",
    //         ],
    //         [
    //             'libelle' => "promo5",
    //             'dateDebut' => "2022-01-01",
    //             'dateFin' => "2022-12-12",
    //             'action' => "On",
    //         ],
    
    //     ];
    //     return $promo;
    // }

?>