<?php
session_start();
include 'mysql.php';
if (!isset($_SESSION['loggedon']))
{
exit;
}
?>


<html>

<head>
<link href='style.css' type='text/css' rel='stylesheet' />

</head>



<body>
<center><img src="logo.png" alt="Deltion Logo"></center>
<div id="container" >


<div id="header">

</div>

<div id="content">
<?php
if (isset($_POST['vraag']))
{
$vraag=$_POST['vraag'];
$aw1=$_POST['antwoordA'];
$aw2=$_POST['antwoordB'];
$aw3=$_POST['antwoordC'];
$ga=$_POST['gantwoord'];
mysql_query("INSERT INTO `vragen`
(vragen,antwoord1,antwoord2,antwoord3,goedantwoord)
VALUES
('$vraag','$aw1','$aw2','$aw3','$ga')");
header("location: index.php");

}



echo '<form action="#" method="POST">';
echo 'Vraag:  <input type="text" name="vraag" value="">';
echo '<br/>';
echo '&nbsp; &nbsp; &nbsp; Antwoord A: ' . '<input type="text" name="antwoordA" value="">';
echo '<br/>';
echo '&nbsp; &nbsp; &nbsp; Antwoord B: ' . '<input type="text" name="antwoordB" value="">';
echo '<br/>';
echo '&nbsp; &nbsp; &nbsp; Antwoord C: ' . '<input type="text" name="antwoordC" value="">';
echo '<br/>';
echo '&nbsp; &nbsp; &nbsp; Goed antwoord: ' . '<input type="text" name="gantwoord" value="">';
echo '<br/>';
echo '<input type="submit" name="submit" value="Submit"/>';
echo '</form>';




?>
</div>



</div>
</body>



</html>