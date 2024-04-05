<!DOCTYPE html>
<html>

<head>
    <title>menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style-menu.css">    
</head>

<body>
    <input type="checkbox" id="checkbox">
    <header class="header">
        <h2 class="u-name">
            <label for="checkbox">
                <i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
            </label>
        </h2>
        <div class="left">
            <span class="icon"></i></span>
            <input type="text" class="earch" style="color: gray;background-color: #f1f7f5" placeholder="Rechercher par marticule"><i class="fa-solid fa-magnifying-glass"></i>

        </div>

        <div class="right">
            <input type="date" class="date">
            <span class="cercle"></span>
            <select name="admin" id="admin">
                <option value="admin">Admin Admin</option>
            </select>
            <span class="super_admin">SUPER_ADMIN</span>

        </div>
    </header>

    <div class="body">
        <nav class="side-bar">
            <div class="user-p">
                <img src="/projet_CSS/image/logo.png">
                <h4>menu</h4>
            </div>
            <ul>
                <li>
                    <a href="?page=1">
                        <i class="fa-solid fa-bars-staggered" aria-hidden="true"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="?page=12">
                        <i class="fa-regular fa-calendar-days"></i>
                        <span>Promos</span>
                    </a>
                </li>
                <li>
                    <a href="?page=2">
                        <i class="fa-regular fa-calendar-days"></i>
                        <span>Référentiels</span>
                    </a>
                </li>
                <li>
                    <a href="?page=7">
                        <i class="fa-regular fa-circle-user"></i>
                        <span>Apprenants</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-regular fa-circle-user"></i>
                        <span>Visiteurs</span>
                    </a>
                </li>
                <li>
                    <a href="?page=9">
                        <i class="fa-regular fa-circle-user"></i>
                        <span>Présence</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-regular fa-calendar-days"></i>
                        <span>Evénements</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!---------Milieu--------------->

    <!-- <div class="containe">

    </div> -->


    <!-- <div class="footer">
        <p>© Sonatel Academy.</p>
        <p><i class="fa-solid fa-gear"></i></p>
    </div> -->

</body>

</html>