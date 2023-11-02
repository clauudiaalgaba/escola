<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola: <?= $title; ?></title>
    <link rel="stylesheet" href="public/css/login_register.css">
</head>
<body>
    <div class="main-container">
        <div class="form-container">
            <h1>Configuración</h1>
            <form action="?url=configAction" method="post">
                <div class="tema-container">
                    <label for="tema">Tema:</label>
                    <select name="tema">
                        <option disabled="disabled" <?php if(!isset($_COOKIE['tema'])){echo 'selected="selected"';}?>>Selecciona el tema</option>
                        <option value="claro" <?php if($_COOKIE['tema'] == 'claro'){echo 'selected="selected"';}?>>Claro</option>
                        <option value="oscuro" <?php if($_COOKIE['tema'] == 'oscuro'){echo 'selected="selected"';}?>>Oscuro</option>
                    </select>
                </div>
                <br><br>
                <div class="idioma-container">
                    <label for="idioma">Idioma:</label>
                    <select name="idioma" value="<?php $_COOKIE['idioma']?>">
                        <option disabled="disabled" <?php if(!isset($_COOKIE['idioma'])){echo 'selected="selected"';}?>>Selecciona el idioma</option>
                        <option value="catalan" <?php if($_COOKIE['idioma'] == 'catalan'){echo 'selected="selected"';}?>>Catalán</option>
                        <option value="castellano" <?php if($_COOKIE['idioma'] == 'castellano'){echo 'selected="selected"';}?>>Castellano</option>
                    </select>
                </div>
                <br><br>
                <div class="submit-container">
                    <button class="submit-button" type="submit">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>