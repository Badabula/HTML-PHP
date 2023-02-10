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
$nombre = 15;
$somme = 0;

echo 'le nombre saisi est ' . $nombre . "<br>";
while ($nombre > 0) {
    $somme += $nombre;
    $nombre --;
}
echo 'la somme des entiers de 1 a ' . '15' . ' est de ' . $somme . "<br>"; 

echo ' avec la boucle for:'."<br>";
$nombre = 15;
$somme = 0;

echo 'le nombre saisi est ' . $nombre . "<br>";

for ($i = 0; $i < 15; $i ++ ) {
    $somme += $nombre;
    $nombre --;
}

echo 'la somme des entiers de 1 a ' . '15' . ' est de ' . $somme . "<br>";
?>
</body>
</html>