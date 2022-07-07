<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <?php require 'partials/header.php'  ?>

    <h1>LOGIN</h1>
    <span>or <a href="signup.php">Registrate</a></span>

    <form action="login.php" method="post">
        <input type="text" name="correo" placeholder="Ingresa tu correo">
        <input type="password" name="contraseña" placeholder="Ingresa tu contraseña">
        <input type="submit" value="INGRESAR">
    </form>
</body>
</html>