<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $prixTableTTC = 400;
    $prixArmoireTTC = 800;
    $prixArmoireHT = (100 * $prixArmoireTTC) / (100 + 20);
    $prixTableHT = (100 * $prixTableTTC) / (100 + 20);
    $prixArmoireHT = (round($prixArmoireHT,2));
    $prixTableHT = (round($prixTableHT,2));
    echo 'le prix HT de la table est' . " " . $prixTableHT."<br>".
    'le prix HT de l \'armoir est' . " " . $prixArmoireHT. "<br>";
    if ( $prixTableHT < $prixArmoireHT ) {
        echo 'le prix de l\'armoir est superieur';
    }
    else {
        echo 'le de prix de la table est superieure';
    }
    ?>
</body>
</html>