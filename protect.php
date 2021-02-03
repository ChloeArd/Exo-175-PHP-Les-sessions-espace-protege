<?php

$password = $_POST["password"];

if ($password === "manger123"){
    echo "Bien joué, tu as mis le bon mot de passe ! <br> $password";
}
else{
    header("Location: index.php?e=ZXJyb3IKCg==");
}