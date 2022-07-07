<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>REGISTRATE</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php require 'partials/header.php'  ?>

    <h1>Registrate</h1>
    <span>or <a href="login.php">Ingresa</a></span>
    <form action="signup.php" method="post">
        <input type="text" name="correo" placeholder="Ingresa tu correo">
        <input type="password" name="contraseña" placeholder="Ingresa tu contraseña">
        <input type="password" name="confirm_contraseña" placeholder="Confirmar tu contraseña">
        <input type="submit" value="INGRESAR">
    </form>
</body>
</html>