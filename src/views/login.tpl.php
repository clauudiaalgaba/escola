<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola: <?= $title; ?></title>
    <link rel="stylesheet" href="public/css/login_register.css">
</head>
<body>
    <header>
        <h1><?= $title; ?></h1>
    </header>
    <div class="main-container">
        <div class="form-container">
            <h1>Iniciar sesión</h1>
            <form action="?url=loginAction" method="post">
                <div class="email-container">
                    <label for="email">Correo electrónico</label>
                    <input id="email" name="email" type="email" required />
                </div>
                <div class="password-container">
                    <label for="password">Contraseña</label>
                    <input id="password" name="password" type="password" required />
                </div>
                <div class="submit-container">
                    <button class="submit-button" type="submit">ENTRAR</button>
                </div>
            </form>
        </div>
        <br><br>
        <div class="register-container">
            <a href="?url=register">¿No tienes cuenta? ¡Registrate!</a>
        </div>
    </div>
</body>
</html>