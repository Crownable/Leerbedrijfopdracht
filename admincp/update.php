<?php
session_start();
include 'mysql.php';

if (!isset($_SESSION['loggedon']))
{
exit;
}

if (!isset($_POST['id'])) {
echo 'Nope';
exit;
}

$gantwoord=mysql_real_escape_string($_POST['gantwoord']);
$colomvragen='vragen'; 
$colomaw1='antwoord1';
$colomaw2='antwoord2';
$colomaw3='antwoord3';
$goedaw='goedantwoord';
$table='vragen';
$idvragen=mysql_real_escape_string($_POST['id']);
$vraag=mysql_real_escape_string($_POST['vraag']);

$awA=mysql_real_escape_string($_POST['antwoordA']);
$awB=mysql_real_escape_string($_POST['antwoordB']);
$awC=mysql_real_escape_string($_POST['antwoordC']);


mysql_query("UPDATE vragen SET vragen='$vraag' ,antwoord1='$awA' ,
antwoord2='$awB',antwoord3='$awC', goedantwoord='$gantwoord' WHERE id = '$idvragen' ");
echo '<script> window.alert("Antwoorden en vragen succesvol veranderd."); </script>';
echo '<script> window.location = "index.php" </script>';


?>