<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola: </title>
    <link href="public/css/style_forms.css" rel="stylesheet">
</head>
<body>
    <div class="main-container">
        <div class="form-container">
            <h1>Registrarse</h1>
            <form action="?url=editAction" method="post">
                <div class="name-container">
                    <label for="nom">Nombre</label>
                    <input id="nom" name="nom" type="text" value="<?=$_SESSION['person']['nom']?>" required />
                </div>
                <div class="cognom-container">
                    <label for="cognom">Apellido/s</label>
                    <input id="cognom" name="cognom" type="text" value="<?=$_SESSION['person']['cognoms']?>" required />
                </div>
                <div class="email-container">
                    <label for="email">Correo electrónico</label>
                    <input id="email" name="email" type="email" value="<?=$_SESSION['user']['email']?>" required />
                </div>
                <div class="passwd-container">
                    <label for="passwd">Contraseña</label>
                    <input id="passwd" name="passwd" type="password" value="<?=$_SESSION['user']['contrasenya']?>" required />
                </div>
                <?php 
                    if (isset($_SESSION['user']) && $_SESSION['user']["tipus_usuari"] === 'alumne') {
                        echo '<div class="telefon-container">
                        <label for="telefon">Teléfono</label>
                        <input id="telefon" name="telefon" type="tel" value="'.$_SESSION['person']['telefon'].'" required />
                    </div>
                    <div class="data_nac-container">
                        <label for="data_nac">Fecha de nacimiento</label>
                        <input id="data_nac" name="data_nac" type="date" value="'.$_SESSION['person']['data_nac'].'" required />
                    </div>
                    <div class="direccio-container">
                        <label for="direccio">Dirección</label>
                        <input id="direccio" name="direccio" type="text" value="'.$_SESSION['person']['direccio'].'" required />
                    </div>';
                    }
                    else if (isset($_SESSION['user']) && $_SESSION['user']["tipus_usuari"] === 'professor') {
                        echo '<div class="especialitat-container">
                        <label for="especialitat">Especialidad</label>
                        <input id="especialitat" name="especialitat" type="text" value="'.$_SESSION['person']['especialitat'].'" required />
                    </div>';
                    }
                ?>
                <div class="submit-container">
                    <button class="submit-button" type="submit">ENTRAR</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>