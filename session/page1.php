<?php

session_start();
    if(!isset($_SESSION['auth']))
        header('location:form.php');

?>
<html>
<body>
    <h2>
        Vous etez dans la page 1
    </h2>

<a href="logout.php">
    Deconnecter
</a>
</body>
</html>
