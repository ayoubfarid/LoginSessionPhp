
<?php
require_once('connexion.php');
if (isset($_GET["cne"]))
{
    $cne=$_GET["cne"];
    $req=  "SELECT * FROM  etudiant  WHERE Cne =$cne";
    $smt=$conn->query($req);// query for select and exec for update ,insert and delete
    $rows =$smt->fetch(PDO::FETCH_ASSOC);//fetch all for array of set record and fetch for one record
    $etud=$rows;
    print_r($etud);
}

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

<form action="modifieretudiant.php" method="post">
    <h2>Modifier letudiant </h2>
    <label for="nom"> Nom </label>
    <input class="inputspec" value=<?php echo $etud["Nom"]?> type="text" name="nom" id="nom" required>
    <br>
    <input type="text" name="cne" value=<?php echo $_GET["cne"]?> hidden>
    <label for="prenom">Prenom</label>
    <input class="inputspec" type="text" value=<?php echo $etud["Prenom"]?> name="prenom" id="prenom" required>
    <br>
    <br>
    <input type="submit" value="Envoyer">
</form>



</body>
</html>
<?php



if (isset($_POST["prenom"]) && isset($_POST["cne"])&& isset($_POST["nom"]))
{
     $cne=$_POST["cne"];
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $req=  "UPDATE etudiant SET Nom = '$nom', Prenom = '$prenom' WHERE Cne ='$cne'";
    $conn->exec($req);
    header('Location: formetudiant.php');
}





?>
