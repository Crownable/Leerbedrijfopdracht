<?php
session_start();
$host="localhost";

$db_name="leerbedrijf";
$tbl_name="account"; 
$username="root";
$password=""; 
//loguit knop
$loguit= '<form action="loguit.php">
<input type="submit" value="logout" />
</form>';
//home knop
$return= '<form action="index.php">
<input type="submit" value="Home" />
</form>';


mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("DB connectie mislukt");

$myusername=$_POST['myusername']; 
$mypassword=md5($_POST['mypassword']); 

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$count =mysql_num_rows($result);
if($count==1){
$_SESSION['loggedon']="1";
$_SESSION['user']=$myusername;
$_SESSION['log']=true;
echo 'welkom '; 
echo $myusername;
echo $return;
echo $loguit;

}
else {
echo "verkeerde username / password <BR>";
echo "klik hier om het opnieuw te proberen"; 
echo $return;
}

?>
