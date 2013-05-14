<?php
session_start();
include 'mysql.php';
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
$loguit= '<form action="loguit.php">
<input type="submit" value="logout" />
</form>';

$login = '	<form method="POST" name="login" action="logincheck.php">

		Username:<input type="text" name="myusername"><br>
		Password: <input type="password" name="mypassword"><br>
		<br>
		<input type="submit" value="Login" >

	</form>';

if (isset($_SESSION['loggedon']))
{
$user = $_SESSION['user'];
echo $loguit;

echo 'Welkom '.$user.'!';

echo '<br/> Vragen: <br/>';

$query = mysql_query("SELECT * FROM vragen");
$row = mysql_fetch_array($query);
echo '<table border="1">
<tr>
<th>Vraag ID</th>
<th>Vraag</th>
<th>Delete</th>
<th>Wijzig</th>
</tr>';
echo '<tr> <td>'.$row['id'].'</td> <td> '.$row['vragen'].'</td> <td><a href="delete.php?vraag='.$row['id'].'" > Delete </a> </td> <td><a href="vragen.php?vraag='.$row['id'].'"> Wijzig </a> </td></tr>';

while ($row = mysql_fetch_assoc($query)) {

echo '<tr> <td>'.$row['id'].'</td> <td> '.$row['vragen'].'</td> <td><a href="delete.php?vraag='.$row['id'].'" > Delete </a> </td> <td><a href="vragen.php?vraag='.$row['id'].'"> Wijzig </a> </td></tr>';


}
echo '</table>';
echo '<a href="toevoegen.php"> Vraag toevoegen. </a>';

} else {

echo $login;

}

?>

</div>



</div>
</body>



</html>
