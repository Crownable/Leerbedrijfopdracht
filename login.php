<?php
session_start();
echo '<html>';
$loguit= '<form action="loguit.php">
<input type="submit" value="logout" />
</form>';

if (isset($_SESSION['loggedon']))
{
echo $loguit;
exit;

}
?>



<body>
	<form method="POST" name="login" action="logincheck.php">

		Username:<input type="text" name="myusername"><br>
		Password: <input type="password" name="mypassword"><br>
		<br>
		<input type="submit" value="Login" >

	</form>
</body>
 </html>