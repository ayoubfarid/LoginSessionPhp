<?php

unset($_SESSION['auth']);
session_destroy();
header('location:form.php');

?>