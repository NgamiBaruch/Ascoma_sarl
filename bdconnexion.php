<?php


$host = "localhost";
$dbname = "ascoma2";
$root = "root";
$password = "";
try {
    $con = new PDO("mysql:host=$host;dbname=$dbname", $root, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  /*  echo "bonne connexion";*/
} catch (PDOException $PDOException) {
    echo "mauvaise connexion " . $PDOException->getMessage();
}
