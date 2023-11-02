<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Escola: <?= $title; ?></title>
    <link rel="stylesheet" href="public/css/home_desktop.css">
</head>
<body>
    <div class="container">
        <h1>¡Bienvenido/a!</h1>
        <p>Esta es una página de inicio de ejemplo.</p>
        <p>Para comenzar, puedes iniciar sesión si ya tienes una cuenta o registrarte si eres nuevo aquí.</p>
        <nav>
            <ul>
                <li><a href="?url=login">Log in</a></li>
                <li><a href="?url=register">Sign up</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>