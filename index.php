<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sessions espace protégé</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    if (isset($_GET["e"])) { ?>
        <div class="error">Ce n'est pas le bon, mot de passe !</div>
<?php
    }
    ?>
<div id="container">
    <form method="post" action="protect.php">
        <label for="password">Entrez le bon mot de passe : </label>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="Envoyer">
    </form>
</div>


</body>
</html>


