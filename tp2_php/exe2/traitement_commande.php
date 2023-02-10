<?php
if(isset($_POST['nom_client']) && isset($_POST['marque_voiture'])){
    if(empty($_POST['nom_client'])){
        echo "Veuillez entrer votre nom";
    }else if(empty($_POST['marque_voiture'])){
        echo "Veuillez entrer la marque de votre voiture";
    }else{
        $nom_client = $_POST['nom_client'];
        $marque_voiture = $_POST['marque_voiture'];
        $options = $_POST['options'];
        if(empty($options)){
            echo "la voiture de rêve du client ".$nom_client." est une ".$marque_voiture." sans option !";
        }else{
            echo "la voiture de rêve du client ".$nom_client." est une ".$marque_voiture." avec les options suivantes : <br>";
            echo "<ul>";
            foreach ($options as $option) {
                echo "<li>".$option."</li>";
            }
            echo "</ul>";
        }
    }
}
?>

<br>

<INPUT TYPE="button" VALUE="retour" onClick="history.go(-1);">