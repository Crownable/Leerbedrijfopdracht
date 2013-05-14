<?php
session_start();
include 'mysql.php';
echo '<!DOCTYPE HTML>';
echo '<html>';
echo '<head><link href="style.css" type="text/css" rel="stylesheet" /></head>';
echo '<body>';
echo '<center><img src="logo.png" alt="Deltion Logo"></center>';
echo '<div id="content">';

echo '<a href="index.php"> Terug </a>';

if (!isset($_SESSION['loggedon']))
{
exit;
}


if (!isset($_GET['vraag']))
{
exit;
} else
{
$id = mysql_real_escape_string($_GET['vraag']);
}

echo '<br/> Vraag en antwoorden: <br/>';

$query = mysql_query("SELECT * FROM vragen WHERE id = '$id'");
$row = mysql_fetch_array($query);
echo '<form action="update.php" method="POST">';
echo 'Vraag:  <input type="text" name="vraag" value="'.$row['vragen'].'">';
echo '<br/>';
echo '&nbsp; &nbsp; &nbsp; Antwoord A: ' . '<input type="text" name="antwoordA" value="'.$row['antwoord1'].'">';
echo '<br/>';
echo '&nbsp; &nbsp; &nbsp; Antwoord B: ' . '<input type="text" name="antwoordB" value="'.$row['antwoord2'].'">';
echo '<br/>';
echo '&nbsp; &nbsp; &nbsp; Antwoord C: ' . '<input type="text" name="antwoordC" value="'.$row['antwoord3'].'">';
echo '<br/>';
echo '&nbsp; &nbsp; &nbsp; Goed antwoord: ' . '<input type="text" name="gantwoord" value="'.$row['goedantwoord'].'">';
echo '<br/>';
echo '<input type="submit" name="submit" value="Submit"/>';
echo '<input type="hidden" name="id" id="id" value="'.$id.'" />';
echo '</form>';


echo '</div>';
echo '</body> </html>';
?>