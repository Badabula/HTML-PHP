<html>
<body>

<?php

$correct_password = "BtsSio";

if (empty($_POST["name"]) || empty($_POST["password"]) || empty($_POST["gender"])) {
  echo "Error: nom, mot de passe et sexe doivent etre remplis.";
} else {
  if ($_POST["password"] == $correct_password) {
    echo "bonjour " . ($_POST["gender"] == "male" ? "monsieur " : "madamme ") . " " . $_POST["name"] . ". le mot de passe est correct.";
  } else {
    echo "bonjour " . ($_POST["gender"] == "male" ? "monsieur " : "madame ") . " " . $_POST["name"] . ". le mot de passe est incorrect.";
  }
}

?>

<br>
<input type="button" value="Return" onclick="self.history.back()">

</body>
</html>


