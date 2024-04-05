<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <?php
        include("../template/partial/menu.html.php");
        // include("../models/liste.model.php");
        if($_GET['page']==1){
            include("../template/page1.html.php");
        }
        else if($_GET['page']==12){
            include("../template/page12.html.php");
        }
        else if($_GET['page']==4){
            include("../template/page4.html.php");
        }
        else if($_GET['page']==2){
            include("../template/page2.html.php");
        }
        else if($_GET['page']==7){
            include("../template/page7.html.php");
        }
        else if($_GET['page']==9){
            include("../template/page9.html.php");
        }
        // else if($_GET['page']==14){
            
        // }
        // else{
        //     include("../template/error.html.php");
        // }
    ?>
</body>
</html>