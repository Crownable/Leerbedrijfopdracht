<html>

<head>
<<<<<<< HEAD
<link Href='style.css' type='text/css' rel='stylesheet' >
=======
>>>>>>> 2927655f8ea2e7658b53bcd80fc455c4fe25ad39
<?php

function codeform() {
echo '<form>
<<<<<<< HEAD
 Voeg hier je code in.<input type="text" name="inlogcode"> 
 <input type="Submit" value="Verzenden">
 </form>'
=======
 Voeg hier je code in:<input type="text" name="inlogcode"> 
 <input type="Submit" value="Verzenden">
 </form>';
>>>>>>> 2927655f8ea2e7658b53bcd80fc455c4fe25ad39
}

?>


</head>

<body>
<?php
$code = "testcode123";
<<<<<<< HEAD


if (!isset($_POST['code'])) 
{
codeform();
exit;

}


	<form>
	Voeg hier je code in.<input type='text' name='inlogcode'> 
	<input type='Submit' value='Verzenden'>
	</form>
=======


if (!isset($_POST['code'])) 
{
codeform();
exit;

}

?>

>>>>>>> 2927655f8ea2e7658b53bcd80fc455c4fe25ad39

?>


</body>

</html>