<?php

function getReferentielsData()
{
    $chemin = '/var/www/html/projet/donnee/referentiel.csv';
    $fichier = fopen($chemin, 'r');

    if ($fichier == NULL) {
        echo "Error";
    } else {

        while (($ligne = fgetcsv($fichier)) !== false) {
            @$ref[] = array(
                "name" => $ligne[0],
                "status" => $ligne[1],
                "idPromo" => $ligne[2],
                "idRef" => $ligne[3]
            );
        }
        fclose($fichier);
        return $ref;
    }
}

// function getReferentielsData() {
//     $referentiels = [
//         ["image" => "image", "name" => "Developpement Data", "status" => "Active"],
//         ["image" => "image","name" => "Developpement Web", "status" => "Active"],
//         ["image" => "image","name" => "Ref Dig", "status" => "Active"],
//         ["image" => "image","name" => "Developpement Web", "status" => "Active"],
//         ["image" => "image","name" => "Developpement Web", "status" => "Active"],
//         ["image" => "image","name" => "Developpement Web", "status" => "Active"],    ];

//     return $referentiels;
// }
