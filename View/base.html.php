<?php

use repro\Controller\AbstractController;
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reproduction tiktok</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://kit.fontawesome.com/52cbc63ebe.js" crossorigin="anonymous"></script>

</head>
<body>

    <div id="container">
        <div id="header">
            <div id="logo">
                <img src="/assets/img/1280px-TikTok_Logo.svg.png" alt="logos" width="150px" height="35px">
            </div>
            <div id="search">
                <input type="search">
            </div>
            <div id="connected">
                connect
            </div>
        </div>

        <div id="home">
            <div id="containerNav">
                <nav>
                    <div>
                        <div id="pourToi">
                            <i class="fa-sharp fa-solid fa-house"></i>
                            <p>Pour Toi</p>
                        </div>
                        <div>Abonnement</div>
                        <div>LIVE</div>
                        <div>Connectez-vous</div>
                    </div>
                    <div>

                    </div>
                    <div>
                        <div>
                            Comptes suggérés
                        </div>
                    </div>
                    <div>
                        <div>
                            Découvrir
                        </div>
                    </div>
                </nav>
            </div>

            <div class="container">
                <?= $html ?>
            </div>
            <div>
                racourcis
            </div>
        </div>


    </div>


</body>
</html>
