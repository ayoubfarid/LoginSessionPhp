
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
$req="SELECT * FROM Etudiant";
$smt=$conn->query($req);
$rows =$smt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        form{
            width: fit-content;
            height: fit-content;
            margin: auto;
            padding: 20px 20px;
            border: 1px black solid;
        }

        label{
            text-align: left;
            margin-top: 20px;

        }
        .inputspec{
            display: block;
            margin-top: 10px;
        }
        input{
            margin-top:10px ;
        }
    </style>

</head>
<body>
    
    <form action="crud Etudiants/formAdd.php" method="post">
        <h2>Formulaire ajouter etudiant</h2>
        <label for="nom"> Nom </label>
        <input class="inputspec" type="text" name="nom" id="nom">
        <br>
        <label for="prenom">Prenom</label>
        <input class="inputspec" type="text" name="prenom" id="prenom">
        <br>
        <label for="Cne">Cne</label><br>
        <input type="text" name="cne" id="cne" value="">
        <br>
      <br>
        <input type="submit" value="Envoyer">
    </form>


    <h1 style="text-align: center">
        Liste des etudiant
    </h1>
    <table style="border: 1px solid black;margin-top: 40px;width: 500px;margin: auto;text-align: center">
        <thead>
        <tr><th>Cne</th><th>Nom</th><th>Prenom</th><th>Suppression</th><th>Modifier</th></tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $etud) : ?>
        <tr><td> <?=  $etud["Cne"] ?></td>
            <td><?=  $etud["Nom"] ?></td>
            <td><?=  $etud["Prenom"] ?></td>
            <td> <a href="supprimeretudiant.php?cne=<?php echo $etud["Cne"] ;?>"> Supprimer</a> </td>
            <td> <a href="modifieretudiant.php?cne=<?php echo $etud["Cne"] ;?>"> Modifier</a> </td>

        </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>