<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/page1.css">   
    <title>Accueil</title>
</head>
<body>
        <!---------Milieu--------------->
    <div class="promotions">
        <h2>promotions</h2>
        <span>Promos * Création</span>
    </div>

    <div class="containe">
        <div class="section1">
            <span class="un">1</span> <b class="promo">Promotion</b> <br>
            <div class="et1">*</div>
            <label for="label">Libelle</label>
            <input type="text" name="label" id="label" placeholder="entrer le libelle">

            <div class="debutFin">

                <div class="dateDebut">
                    <div class="et2">*</div>
                    <label for="debut">Date Debut</label> <br>
                    <input type="date" name="debut" id="debut">
                </div>

                <div class="dateFin">
                    <div class="et3">*</div>
                    <label for="debut">Date Fin</label> <br>
                    <input type="date" name="debut" id="debut">
                </div>
            </div>
        </div>


        <div class="bottom">
        <a href="?page=4"><button style="background-color: #3F52B6;">Ajouter Référentiels(s)</button></a>
            <button style="background-color: #008F89;">Créer promotion</button>
        </div>

        <span class="twon">2</span> <b class="ref">Référentiels</b>

    </div>
    <div class="footer">
        <p>© Sonatel Academy.</p>
        <p><i class="fa-solid fa-gear"></i></p>
    </div>
</body>
</html>