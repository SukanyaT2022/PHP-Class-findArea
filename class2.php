<!-- 
$rec represent objects of that class -->
<!-- this page we use pattern to crate object -->
<!--what ever we want to show on the page we use this page-->
<!--$_POST or $_GET use to connect html page -->
<?php
$length $_POST["lengthforPHP"]

// inside["lengthforPHP"] come from html page

include "class.php";
$rec = new rectangle();//we create object of rectangle
$rec->setLength(10);

$rec->setwidth(20);

echo "The area of rectangle is ".$rec->findArea();  // . is +
?>