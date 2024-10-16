<?php
// Spustíme relaci (pokud potřebuješ pracovat s uživatelskými relacemi)
session_start(); 
?>
<!DOCTYPE html>
<html lang="cs"> <!-- Změněno na "cs" pro češtinu -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../icons/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Domovská stránka</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <header>
        <div class="container">
            <label class="nazev">Deník Hokeje</label>
            <!-----NAVBAR----->
            <ul>
                <li><a href="#">Domov</a></li>
                <li><a href="#">Hokej</a></li>
                <li><a href="#">Jiné</a></li>
                <li><a href="#">O projektu</a></li>
                <li><a href="#footer">Kontakt</a></li>
            </ul>
            <div class="login">
                <li><a class="login_btn" href="#">Login</a></li>
            </div>
        </div>        
    </header>
    
    <main>
        <!--POZADÍ 1-->
        <div class="pozadi_1"></div>

        <!--O NÁS-->
        <div class="onas">
            <!-- <div class="aktuality">
                <img src="../icons/aktuality.png" alt="">
                <h3>Aktuality</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi doloribus ipsum nesciunt architecto similique autem, necessitatibus eaque optio velit sapiente molestiae laudantium consectetur, harum explicabo vitae quas maxime magni temporibus.</p>
            </div>
            <div class="spekulace">
                <img src="../icons/Spekulace.png" alt="">
                <h3>Spekulace</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi doloribus ipsum nesciunt architecto similique autem, necessitatibus eaque optio velit sapiente molestiae laudantium consectetur, harum explicabo vitae quas maxime magni temporibus.</p>
            </div>
            <div class="trejdy">
                <img src="../icons/trade.png" alt="">
                <h3>Trejdy</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi doloribus ipsum nesciunt architecto similique autem, necessitatibus eaque optio velit sapiente molestiae laudantium consectetur, harum explicabo vitae quas maxime magni temporibus.</p>
            </div> -->
        </div>

        <!--POZADÍ 2-->
        <div class="pozadi_2"></div>
    </main>

    <footer id="footer">
        <!--JAZYKY-->
        <div class="jazyky">
            <div class="site_obrazky"></div>
        </div>
        
        <!--LOGO-->
        <div class="logo">
            <a href=""><img src="../obrazky/logo.ico" alt=""></a>
        </div>

        <!--SÍTĚ-->
        <div class="site">
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-tiktok"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
            <a href=""><i class="fab fa-discord"></i></a>
        </div>
    </footer>
</body>
</html>
