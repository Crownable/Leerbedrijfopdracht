<?php 
session_start();
session_destroy();
?>
<html>
<body>
u bent uitgelogd
<form action="login.php">
<input type="submit" value="login" />
</form>
</body>
</html>
<?php

$return= '<form action="index.php">
<input type="submit" value="Home" />
</form>';


echo $return;

?>