<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola: <?= $title; ?></title>
    <link rel="stylesheet" <?php if ($_COOKIE['tema'] == 'oscuro') {
                                    echo 'href="public/css/home_desktop_dark.css"';
                                    }else{echo "href='public/css/home_desktop.css'";}?>>
</head>
<body>
    <header>
        <h3>BENVINGUT/DA <?= strtoupper($_SESSION["person"]["nom"])?> </h3>
        <h3>TIPUS:  <?= strtoupper($_SESSION["user"]["tipus_usuari"])?> </h3>
        <nav>
            <ul>
                <li><a href="?url=edit">Editar perfil</a></li>
                <li><a href="?url=config" <?php if (isset($_COOKIE['resultCookie']) && $_COOKIE['resultCookie'] === 'false') {
                                    echo 'style="display:none"';
                                    }
                                    else if (isset($_COOKIE['resultCookie']) && $_COOKIE['resultCookie'] === '') {
                                        echo 'style="display:none"';
                                    }
                                    else if(!isset($_COOKIE['resultCookie'])){
                                        echo 'style="display:none"';
                                    }
                                ?>
                >Configuració</a></li>
                <li><a href="?url=logoutAction">Log out</a></li>
            </ul>
        </nav>
    </header> 
<div id="cookie-banner" 
    <?php 
        if (isset($_COOKIE['resultCookie']) && $_COOKIE['resultCookie'] === 'true' && $_COOKIE['resultCookie'] === 'false') {
            echo 'style="display:none"';
        }
        else{
            echo 'style="display:block"';
        }
    ?>
>
  <p>Aquesta pàgina utilitza cookies, estàs d'acord?</p><br>
  <button id="accept-cookie">Acceptar</button>
  <button id="reject-cookie">Denegar</button>
</div>
    <script>
        window.onload = function () {
            const accepted = document.cookie.includes("resultCookie=true");
            const denied = document.cookie.includes("resultCookie=false");
            var cookiesBanner = document.getElementById('cookie-banner');
            cookiesBanner.style.display = 'block';
            if (accepted) {
            cookiesBanner.style.display = "none";
            } else if(denied){
            cookiesBanner.style.display = "none";
            }
        };

        var aceptarCookieButton = document.getElementById('accept-cookie');
        aceptarCookieButton.addEventListener('click', function () { 
            var cookiesBanner = document.getElementById('cookie-banner');
            cookiesBanner.style.display = 'none';
            document.cookie = "resultCookie=true; expires=Sun, 20 Jan 2030 00:00:00 UTC; path=/";
            location.reload();
        });

        var denegarCookieButton = document.getElementById('reject-cookie');
        denegarCookieButton.addEventListener('click', function () {
            var cookiesBanner = document.getElementById('cookie-banner');
            cookiesBanner.style.display = 'none';
            document.cookie = "resultCookie=false; expires=Sun, 20 Jan 2030 00:00:00 UTC; path=/";
            location.reload();
        });
    </script>
</body>
</html>