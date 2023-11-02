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
            <form action="?url=registerActProfessor" method="post">
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
                <div class="especialitat-container">
                    <label for="especialitat">Especialitat</label>
                    <input id="especialitat" name="especialitat" type="text" required />
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