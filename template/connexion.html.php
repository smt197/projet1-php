<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Connexion</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
        *{
            font-family: 'Lato', sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            padding: 0;
            margin: 0;
        }
        
        .container{
            display: flex;
            gap: 5%;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: azure;
            box-sizing: border-box;
        }
        .logo{
            height: 100px;
            width: 260px;
            background-image: url("logo.png");
            background-size: cover;
            background-position: center;
        }
        .content{
            display: flex;
            flex-direction: column;
            gap: 4%;
            background-color: white;
            border-radius: 4px;
            height: 40%;
            width: 40%;
            padding: 1%;
            box-sizing: border-box;
        }
        .mess{
            background-color: rgb(240, 205, 205);
            border-radius: 5px;
            padding: 5%;
            color: rgb(165, 51, 51);
        }
        .text span{
            color: red;
        }
        .sous-text{
            position: relative;
            border-radius: 5px;
            border: 1px solid gray;
            padding: 4%;
            color: gainsboro;
        }
        .sous-text span{
            color: red;
        }
        .eyes{
            position: absolute;
            right: 5%;
            color: black;
            top: 30%;
        }
        .bas{
            position: absolute;
            top: 78%;
            height: 40%;
            width: 100%;
            padding: 1%;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            gap: 10%;
        }
        .chek{
            display: flex;
            height: 5%;
            width: 20%;
        }
        .case{
            position: relative;
            left: -5px;
            padding: 8px;
            border: 2px solid black;
        }
        .oublie{
            color: #1abc9c;
        }
        .login{
            display: flex;
            position: absolute;
            width: 40%;
            height: 5%;
            top: 84%;
            background-color: #1abc9c;
            border-radius: 5px;
            justify-content: center;
            align-items: center;
        }
        .login span{
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo"></div>
        <div class="content">
            <div class="mess">Email et Mot de Passe Requis</div>
            <div class="text">Email Address<span>*</span></div>
            <div class="sous-text">Enter email address<span>*</span></div>
            <div class="text">Password<span>*</span></div>
            <div class="sous-text">
                Enter your password
                <span>*</span>
                <div class="eyes"><i class="fa-solid fa-eye-slash"></i></div>
            </div>
        </div>
        <div class="bas">
            <div class="chek"><div class="case"></div>Remember me</div>
            <div class="oublie">Mot de passe Oublie?</div>
        </div>
        <div class="login"><a style="text-decoration: none;" href="/projet_CSS/page/page1.php"><span>Log in</span></a></div>
    </div>
</body>
</html>