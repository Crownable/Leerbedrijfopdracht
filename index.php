<html>

<head>
<?php

function codeform() {
echo '<form>
 Voeg hier je code in.<input type="text" name="inlogcode"> 
 <input type="Submit" value="Verzenden">
 </form>';
}

?>


</head>

<body>
<?php
$code = "testcode123";


if (!isset($_POST['code'])) 
{
codeform();
exit;

}

?>


</body>

</html>