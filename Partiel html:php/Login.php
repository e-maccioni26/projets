<?php 
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="login">
        <h1>Se connecter</h1>
        <form method="post">
            <input type="text" name="u" placeholder="Nom d'utilisateur" required="required" />
            <input type="password" name="p" placeholder="Mot de passe" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large">Connectez-vous</button>
        </form>
    </div>

</body>
</html>