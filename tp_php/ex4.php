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
    $nombres = [10, 10, 10, 10];
    print_r($nombres)."<br>";
    $somme = $nombres[0]+$nombres[1]+$nombres[2]+$nombres[3];
    echo 'la somme des nombres est'." ". $somme;
    ?>
</body>
</html>