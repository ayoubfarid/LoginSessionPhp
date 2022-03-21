<?php
session_start();
require_once 'connexion.php';

$l = $_POST['login'];
$p = $_POST['pass'];


if (!empty($l) && !empty($p))
{
    $req=  "SELECT * FROM  user  WHERE username ='$l' and password='$p'";
    $smt=$conn->query($req);// query for select and exec for update ,insert and delete
    $rows =$smt->fetch(PDO::FETCH_ASSOC);//fetch all for array of set record and fetch for one record
    $etud=$rows;
    if (!empty($etud))
    print_r($etud);

    $_SESSION['auth']=$l;
    unset($_SESSION['error']);
    header('location:page1.php');
    if (!isset($_SESSION['page']))
        header('location:page1.php');
    else
        header('location:'.$_SESSION['page']);

}else
{
    $_SESSION['error']=" Login or password incorrect";
    header('location:form.php');
}

?>











