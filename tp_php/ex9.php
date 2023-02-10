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
    $identite=[
        "personne 1"=> ["nom" => "dutronc", "prenom"=>"michel", "age"=>"30"], "personne
        2"=> ["nom" => "duroc", "prenom"=>"émilie", "age"=>"23"],
        "personne 3"=> ["nom" => "dupersil", "prenom"=>"évelyne", "age"=>"36"],
        "personne 4"=> ["nom" => "Duvilage", "prenom"=>"Etienne", "age"=>"48"]
        ]; 

        echo $identite["personne 1"]["nom"];
        echo $identite["personne 2"]["nom"];
        echo $identite["personne 3"]["nom"];
        echo $identite["personne 4"]["nom"];
        

        
       
    ?>

</body>
</html>