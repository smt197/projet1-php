
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/page9.css">   
    <title>page9</title>
    <style>
        select {
            padding: 8px 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            font-size: 14px;
            cursor: pointer;
        }
        
        select:hover {
            border-color: #999;
        }
        
        select:focus {
            outline: none;
            border-color: #555;
        }
    </style>
</head>
<body>
    <!-- Milieu -->
    <div class="promotions">
        <h2>Présence</h2>
        <span>Présence * Liste</span>
    </div>
    <div class="containe">
        <form action="" method="post">
        <input type="hidden" name="page" value="filtre_presence">
        <table class="table">
            <thead>
                <tr>
                    <th>Statut</th>
                    <th>Référentiels</th>
                    <th>Date</th>
                    <th>Rafraîchir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <select name="status" id="status">
                            <option value="statut">Statut</option>
                            <option value="present">Présent</option>
                            <option value="absent">Absent</option>
                        </select>
                    </td>
                    <td>
                        <select name="referentiel" id="referentiel">
                            <option value="dev_data">Développement Data</option>
                            <option value="reseaux">Réseaux</option>
                        </select>
                    </td>
                    <td><input type="date" class="date"></td>
                    <td><button type="submit" name="submit">Rafraîchir</button></td>
                </tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Référentiel</th>
                    <th>Heure d'arrivée</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($Allstudents as $value) :?>
                <tr>
                    <td><?= $value['matricule'] ?></td>
                    <td><?= $value['nom'] ?></td>
                    <td><?= $value['prenom'] ?></td>
                    <td><?= $value['telephone'] ?></td>
                    <td><?= $value['referenciel'] ?></td>
                    <td><?= $value['heure_arrivee'] ?></td>
                    <td><?= $value['status'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </form>
        <!-- <div class="section4">
            <div class="item">
                <span style="color: gray;">Item par page:</span> 10 <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="num">
                <span>111-120 of 128</span>
            </div>
            <div class="fleche">
                <span>|</span>
                <span><i class="fa-solid fa-chevron-left"></i></span>
                <a href="page10.php"><span><i class="fa-solid fa-chevron-right"></i></span></a>
            </div>
        </div> -->
    </div> 
    <p><i class="fa-solid fa-gear"></i></p>
</body>
</html>
