<html>

<head>
<<<<<<< HEAD
<<<<<<< HEAD
<link Href='style.css' type='text/css' rel='stylesheet' >
=======
>>>>>>> 2927655f8ea2e7658b53bcd80fc455c4fe25ad39
=======
>>>>>>> 2927655f8ea2e7658b53bcd80fc455c4fe25ad39
<?php

function codeform() {
echo '<form>
<<<<<<< HEAD
<<<<<<< HEAD
 Voeg hier je code in.<input type="text" name="inlogcode"> 
 <input type="Submit" value="Verzenden">
 </form>'
=======
 Voeg hier je code in:<input type="text" name="inlogcode"> 
 <input type="Submit" value="Verzenden">
 </form>';
>>>>>>> 2927655f8ea2e7658b53bcd80fc455c4fe25ad39
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
<<<<<<< HEAD
=======
>>>>>>> 2927655f8ea2e7658b53bcd80fc455c4fe25ad39


if (!isset($_POST['code'])) 
{
codeform();
exit;

}

<<<<<<< HEAD

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

=======
?>

>>>>>>> 2927655f8ea2e7658b53bcd80fc455c4fe25ad39

</body>

</html>