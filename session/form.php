<?php
session_start();
?>

<html>
<body>
<form action="auth.php" method="post">
<?php
if (isset($_SESSION['error']))
    echo"<h2>" .$_SESSION['error']."</h2>";
?>
    <br>

<label for="login"> Login </label>
    <input type="text" name="login" id="login" /><br>
<label for="password"> Password </label>
<input type="password" name="pass" id="pass" /><br>
    <br>

    <input type="submit" value="Submit" />
</form>


</body>
</html>
