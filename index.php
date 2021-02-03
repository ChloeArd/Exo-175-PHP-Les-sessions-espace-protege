<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sessions espace protégé</title>
</head>
<body>

<form method="post" action="protect.php">
    <div>
        <label for="password">Entrez le bon mot de passe : </label>
        <input type="password" name="password" id="password" required>
    </div>
    <input type="submit" value="Envoyer">
</form>

</body>
</html>

<?php
    if (isset($_GET["e"])){
        echo "Ce n'est pas le bon, mot de passe !";
    }
