options
<form action="traitement_commande.php" method="post">
    <label for="nom_client">Nom du client :</label>
    <input type="text" id="nom_client" name="nom_client" placeholder="Entrez votre nom">
    <br>
    <label for="marque_voiture">Marque de la voiture :</label>
    <input type="text" id="marque_voiture" name="marque_voiture" placeholder="Entrez la marque de votre voiture">
    <br>
    <label for="climatisation">Climatisation :</label>
    <input type="checkbox" id="climatisation" name="options[]" value="climatisation">
    <br>
    <label for="methane">Injection au méthane :</label>
    <input type="checkbox" id="methane" name="options[]" value="injection au méthane">
    <br>
    <label for="ventilation_rotules">Ventilation des rotules :</label>
    <input type="checkbox" id="ventilation_rotules" name="options[]" value="ventilation des rotules">
    <br>
    <label for="alarme">Alarme :</label>
    <input type="checkbox" id="alarme" name="options[]" value="alarme">
    <br>
    <input type="submit" value="Envoyer">
</form>
