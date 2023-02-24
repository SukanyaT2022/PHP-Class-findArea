<!-- 
$rec represent objects of that class -->
<!-- this page we use pattern to crate object -->
<!--what ever we want to show on the page we use this page-->
<!--$_POST or $_GET use to connect html page -->

<!--this page act like middle man connect bet class.php and index.html -->

<?php

include "class.php";
$length = $_POST["lengthforPHP"];// this class[]inside hole name or id in html page
$width = $_POST["widthforPHP"];
// inside["lengthforPHP"] come from html page


$rec = new rectangle();//we create object of rectangle
$rec->setLength($length);

$rec->setwidth($width);


echo "The area of rectangle is ".$rec->findArea();  // . is +
?>