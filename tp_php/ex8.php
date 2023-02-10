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
    $sommeage = 0;
    $ages = array("Jean"=>"20", "Jaques"=>"30", "Pierre"=>"25");
    print_r($ages)."<br>";

    foreach ($ages as $nom => $age) {
        $sommeage += $age;
    }
    
    $sommeage = $sommeage/3;
    $sommeage = round($sommeage);
    echo "l'age moyen est de : ". $sommeage;

    ?>

</body>
</html>