<?php
function generApprenant()
{
    $students = [
        [
            'firstName' => "diop",
            'lastName' => "Doe",
            'email' => "jdoe@ex.com",
            'telephone' => "7718888888",
            'genre' => "F"
        ],
        [
            'firstName' => "diop",
            'lastName' => "Doe",
            'email' => "jdoe@ex.com",
            'telephone' => "7718888888",
            'genre' => "M"
        ],
        [
            'firstName' => "diop",
            'lastName' => "Doe",
            'email' => "jdoe@ex.com",
            'telephone' => "7718888888",
            'genre' => "F"
        ],
        [
            'firstName' => "diop",
            'lastName' => "Doe",
            'email' => "jdoe@ex.com",
            'telephone' => "7718888888",
            'genre' => "M"
        ]
    ];
    return $students;
}

function generEtudiant()
{
    $etudiants = [
        [
            'matricule' => "12345",
            'nom' => "John",
            'prenom' => "Doe",
            'telephone' => "123456789",
            'referenciel' => "dev/web",
            'heure_arrivee' => "8:00:00",
            'status' => "Présent"
        ],
        [
            'matricule' => "12345",
            'nom' => "John",
            'prenom' => "Doe",
            'telephone' => "123456789",
            'referenciel' => "dev/web",
            'heure_arrivee' => "8:00:00",
            'status' => "Absent"
        ],
        [
            'matricule' => "12345",
            'nom' => "John",
            'prenom' => "Doe",
            'telephone' => "123456789",
            'referenciel' => "dev/web",
            'heure_arrivee' => "8:00:00",
            'status' => "Présent"
        ],
        [
            'matricule' => "12345",
            'nom' => "John",
            'prenom' => "Doe",
            'telephone' => "123456789",
            'referenciel' => "dev/web",
            'heure_arrivee' => "8:00:00",
            'status' => "Absent"
        ]
    ];
    return $etudiants;
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

//     ];
//     return $promo;
// }

function filtrePresence(){
    $Allstudents=generEtudiant();
    // Récupérer le statut du formulaire
    if(isset($_POST['status'])) {
        $status = $_POST['status'];
        // Filtrer les étudiants en fonction du statut
        $filteredStudents = array_filter($Allstudents, function($student) use ($status) {
            return $student['status'] === $status;
        });
        // Afficher les étudiants filtrés
        foreach ($filteredStudents as $value) {
            return $value;
        }
    }
}


@$pages = $_GET["pag"];
$students = generEtudiant();
$nepg = 5;
@$debut  = ceil(count($students) / $nepg);


?>


