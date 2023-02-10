<form action="exe2-2.php" method="post">
  <label for="vendeurs">Selectionée un vendeur:</label><br>
  <select name="vendeurs" id="vendeurs">
    <option value='' selected >Sélectionner le fournisseur</option>
     <?php
     $vendeurs = array('Dupont', 'Moreau', 'Martin', 'Durand');
    foreach ($vendeurs as $vendeur) {
      echo "<option value='$vendeur'>$vendeur</option>";
    }

    ?>
  </select><br>

  <label for="produits">Selectionée un produit:</label><br>
  <select name="produits" id="produits">
  <option value='' selected >Sélectionner le produit</option>
    <?php
    include 'produits.php';
    foreach ($tabProd as $prod) {
      echo "<option value='$prod'>$prod</option>";
    }

    ?>
  </select><br>

  <label for="quantite">quantité a commander:</label><br>
  <input type="text" name="quantite" id="quantite"><br>

  <button type="submit" name="confirmer" value="confirmer">confirmer</button>
  <button type="reset" name="reset" value="reset">Reset</button>
</form>
