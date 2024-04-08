<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page12</title>
    <link rel="stylesheet" href="./css/page12.css">

</head>

<body>
    <!---------Milieu--------------->

    <div class="promotions">
        <h2>Promotions</h2>
        <span>Promos * Liste</span>
    </div>

    <div class="containe">

        <div class="section1">
            <div class="stat">
                <div>Liste Des Promotions<span style="color: #08cac1;font-weight: bold;">(1)</span></div>
            </div>
            <div class="search">
                <form class="form" method="post">
                    <input type="text" name="search" class="search" style="color: gray;background-color: #f1f7f5" placeholder="Rechercher ici...">
                    <button type="submit"><i style="color: #008F89;position: relative;" class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <a href="?page=1">
                <div class="fresh"><i class="fa-solid fa-plus"></i>&ensp;Nouvelle</div>
            </a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Libellé</th>
                        <th>Date Début</th>
                        <th>Date Fin</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        // Vérifier si une recherche a été soumise
                        if (isset($_POST['search'])) {
                            $search = $_POST['search'];
                            // Filtrer les promotions basées sur la recherche
                            $filteredPromotions = array_filter($Allpromotions, function($promotion) use ($search) {
                                return strpos($promotion['libelle'], $search) !== false;
                            });
                            
                            // Afficher les promotions filtrées
                            foreach ($filteredPromotions as $value) :
                            
                    ?>
                    <tr class="section3">
                        <td class="mat" style="color: #008F89; font-weight:200;"><i class="fa-solid fa-gears"></i>&ensp;<?= $value['libelle'] ?></td>
                        <td class="nom" style="font-weight: 200;"><?= $value['dateDebut'] ?></td>
                        <td class="prenom" style="font-weight: 200;"><?= $value['dateFin'] ?></td>
                        <!-- <td class="action"><i class="fa-solid fa-plus"></td> -->
                    </tr>
                    <?php 
                            endforeach;
                        } else {
                            // Afficher toutes les promotions si aucune recherche n'est effectuée
                            foreach ($Allpromotions as $value) :
                    ?>
                    <tr class="section3">
                        <td class="mat" style="color: #008F89; font-weight:200;"><i class="fa-solid fa-gears"></i>&ensp;<?= $value['libelle'] ?></td>
                        <td class="nom" style="font-weight: 200;"><?= $value['dateDebut'] ?></td>
                        <td class="prenom" style="font-weight: 200;"><?= $value['dateFin'] ?></td>
                        <td class="action"><i class="fa-solid fa-plus"></td>
                    </tr>
                    <?php 
                            endforeach;
                        }
                    ?>
                </tbody>
            </table>
            

        </div>
    </div>
</body>

</html>
