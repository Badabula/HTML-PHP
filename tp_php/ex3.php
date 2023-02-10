<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcul sur les variables</h1>
    <?php
    $TVA = 0.2;
    $prixHT = 100;
    $nombre = 10;
    echo "la quantité achetée est 10"."<br>".
     'le prix HT est'." ". $prixHT . "<br>".
     'le prix TTC est' . " ". ((($prixHT * $TVA)+$prixHT) * $nombre)."<br>".
     'la variable $tva est'. " " . gettype($TVA)."<br>".
     'la variable $prixHT est'. " " . gettype($prixHT)."<br>".
     'la variable $nombre est'. " " . gettype($nombre)."<br>";
    ?>
</body>
</html>