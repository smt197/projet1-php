<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/page2.css">   
    <title>page2</title>
</head>
<body>
    <!-- Milieu -->
    <div class="promotions">
        <h2>Referentiels</h2>
        <span>Referentiels * <span style="font-weight: bold;">Liste</span></span>
    </div>
    
    <div class="containe">
        <?php
        // Inclure le fichier modèle des référentiels
        // include("referentiels.model.php");

        // Appeler la fonction pour obtenir les données des référentiels
        // $Allreferentiels = getReferentielsData();

        foreach ($Allreferentiels as $key => $referentiel) {
            $class = "div" . ($key + 1); // Classe CSS pour div
            echo "<div class='$class'>";
            echo "<span>...</span>";
            echo "<div class='img'></div>";
            echo "<div class='text1'>" . $referentiel['name'] . "</div>";
            echo "<div class='text2'><span style='color: #008F89;'>" . $referentiel['status'] . "</span></div>";
            echo "</div>";
        }
        ?>
        <p><i class="fa-solid fa-gear"></i></p>
    </div>
</body>
</html>
