<?php
require_once('connexion.php');
$cne=$_GET["cne"];
echo $cne;
$req=  "DELETE FROM etudiant WHERE Cne='$cne'";
$conn->exec($req);

header('Location: formetudiant.php');
?>