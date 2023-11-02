<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola: <?= $title; ?></title>
    <link href="public/css/login_register.css" rel="stylesheet">
</head>
<body>
    <div class="main-container">
        <div class="form-container">
            <h1>Registrarse</h1>
            <form action="?url=registerActAlumne" method="post">
                <div class="name-container">
                    <label for="nom">Nombre</label>
                    <input id="nom" name="nom" type="text" required />
                </div>
                <div class="cognom-container">
                    <label for="cognom">Apellido/s</label>
                    <input id="cognom" name="cognom" type="text" required />
                </div>
                <div class="email-container">
                    <label for="email">Correo electrónico</label>
                    <input id="email" name="email" type="email" required />
                </div>
                <div class="passwd-container">
                    <label for="passwd">Contraseña</label>
                    <input id="passwd" name="passwd" type="password" required />
                </div>
                <div class="telefon-container">
                    <label for="telefon">Teléfono</label>
                    <input id="telefon" name="telefon" type="tel" required />
                </div>
                <div class="data_nac-container">
                    <label for="data_nac">Fecha de nacimiento</label>
                    <input id="data_nac" name="data_nac" type="date" required />
                </div>
                <div class="direccio-container">
                    <label for="direccio">Dirección</label>
                    <input id="direccio" name="direccio" type="text" required />
                </div>
                <br><br>
                <div class="submit-container">
                    <button class="submit-button" type="submit">REGISTRO</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>