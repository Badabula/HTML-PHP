<?php 
$hostnom = 'host=localhost';
$usernom = 'root';
$password = '';
$bdd = 'biblio';

try {
    $monPdo = new pdo("mysql:$hostnom;$bdd;charset=utf8", $usernom, $password);
    $monPdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e -> getMessage();
    $monPdo = null;
}
?>