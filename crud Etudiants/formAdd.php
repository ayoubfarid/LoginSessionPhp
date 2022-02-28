

<?php


$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=testphp", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$cne=$_POST["cne"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];

$req=  "INSERT INTO etudiant (Cne, Nom, Prenom) VALUES (?,?,?)";
$stmt= $conn->prepare($req);
$stmt->execute([$cne, $nom, $prenom]);

header('Location: formetudiant.php');



?>