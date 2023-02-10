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
        $sommeeu = 0;
        $sommefr = 0;

       define("Tconversion","6.55957");
        $valeu = array();
        array_push($valeu, 12.5, 45.6, 25.8, 26.5, 35.4, 47.6);
        $valfr = array();
        
        foreach($valeu as $valeur)
        {
            array_push($valfr, $valeur/Tconversion);
            
        }
        
        foreach ($valeu as $valeur) {
            echo "montant euro = ". $valeur . "<br>";
            $sommeeu += $valeur;
        }

        echo "somme montant euro = ". $sommeeu . "<br>";
        
        foreach ($valfr as $valfra) {
            $valfra = round($valfra, 2);
            echo "montant francs = ". $valfra . "<br>";
            $sommefr += $valfra;
        }

        echo "somme montant francs = ". $sommefr . "<br>";
        
        

    ?>
</body>
</html>