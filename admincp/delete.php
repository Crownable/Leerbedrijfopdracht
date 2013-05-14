<?php
session_start();
include 'mysql.php';

if (!isset($_SESSION['loggedon']))
{
exit;
}

if (!isset($_GET['vraag'])) {
echo 'Nope';
exit;
}


$id=mysql_real_escape_string($_GET['vraag']);



mysql_query("DELETE FROM `vragen`
WHERE `id`='$id' ; ");
echo '<script> window.alert("Vraag is succesvol verwijderd."); </script>';
echo '<script> window.location = "index.php" </script>';


?>