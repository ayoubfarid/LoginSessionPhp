<?php
session_start();
unset($_SESSION['auth']);
unset($_SESSION['page']);
session_destroy();
header('location:form.php');

?>