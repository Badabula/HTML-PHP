<html>
<body>

<?php
  $vendeur = $_POST['vendeurs'];
  $produit = $_POST['produits'];
  $quantite = $_POST['quantite'];

  echo "vendeur: " . $vendeur . "<br>";
  echo "Produit: " . $produit . "<br>";
  echo "Quantite: " . $quantite . "<br>";
?>

<br>

<INPUT TYPE="button" VALUE="retour" onClick="history.go(-1);">

</body>
</html>
