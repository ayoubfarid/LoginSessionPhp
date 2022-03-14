<?php
session_start();

$l = $_POST['login'];
$p = $_POST['pass'];
if ($l == "ilisi" && $p =="ilisi")
{
    $_SESSION['auth']=$l;
    unset($_SESSION['error']);
    header('location:page1.php');

}else
{
    $_SESSION['error']=" Login or password incorrect";
    header('location:form.php');
}

?>











