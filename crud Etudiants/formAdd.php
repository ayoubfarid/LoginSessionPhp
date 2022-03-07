

<?php

require_once('connexion.php');
$cne=$_POST["cne"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];

$req=  "INSERT INTO etudiant (Cne, Nom, Prenom) VALUES (?,?,?)";
$stmt= $conn->prepare($req);
$stmt->execute([$cne, $nom, $prenom]);

header('Location: formetudiant.php');



?>