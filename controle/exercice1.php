<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Exercice 1</h1>
    <p>
        <?php
        $couleurs = array("bleu", "vert", "jaune", "orange");
        foreach ($couleurs as $couleur) {
            echo "• ".$couleur."<br>";
        } 
        ?>
    </p>

    <h1>Exercice 2</h1>
        <p>
            <?php
            $annee = array("janvier"=>"31","fevrier"=>"28","mars"=>"31","avril"=>"30","mai"=>"31","juin"=>"31");

                            
            $html_table = '<table border="1" cellspacing="0" cellpadding="2"><tr>';
            $nr_col = 2;
            
            $html_table .= "<tr>
            <th>jours</th>
            <th>mois</th>
          </tr>";
          
            $i = 0;       
            foreach($annee AS $mois=>$jours) {

            $html_table .='<tr>' .'<td>' .$mois. '</td>'. '<td>'. $jours. '</td>'.'</tr>';

            $i++;
            if ($i > 7) {
                break;
            }

            }

            echo $html_table;
            
            $j30 = 0;
            foreach($annee AS $mois=>$jours) {
                if ($jours == 30) {
                    $j30++;
                }
            }

            echo '<p> nombre de mois a 30 jours= '. $j30.'</p>';
                 
            ?>
        </p>
</body>
</html>