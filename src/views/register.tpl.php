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
            <h1>Registrarse</h1>
            <form action="?url=registerAction" method="post">
                <div class="tipo-container">
                    <select name="tipo">
                        <option selected="true" disabled="disabled">Selecciona el tipo</option>
                        <option value="alumne">Alumno</option>
                        <option value="professor">Professor</option>
                    </select>
                </div>
                <br><br>
                <div class="submit-container">
                    <button class="submit-button" type="submit">SIGUIENTE</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>