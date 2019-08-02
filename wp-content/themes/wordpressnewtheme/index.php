<?php

//echo 2 + 2;


//function myFirstFunction() {
//    echo "<p>Hello U There - This my first funtion </p>";
//}
//
//myFirstFunction();
//
//myFirstFunction();
//
//myFirstFunction();
//
//myFirstFunction();


function greetings($name, $color) {
    echo "<p>Hi, my name is $name and my favorite color is <font size='4' color='$color'>$color</font></p>";
}

greetings("Silvia","darkred");

greetings("David","purple");


?>


<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>