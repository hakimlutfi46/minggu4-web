<?php include("basicClass.php"); ?>

<?php
$stefan = new Person();
$nick = new Person();

$stefan->setName("Stefan Mackbook");
$nick->setName("Nick Wadles");

echo "Stefan's full name is " . $stefan->getName();
echo "<br>";
echo "Nick's full name is " . $nick->getName();
