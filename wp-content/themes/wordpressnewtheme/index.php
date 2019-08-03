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


//function greetings($name, $color) {
//    echo "<p>Hi, my name is $name and my favorite color is <font size='4' color='$color'>$color</font></p>";
//}
//
//greetings("Silvia","darkred");
//
//greetings("David","purple");

$names = array('Brad', 'Jennifer', 'Patrick', 'David', 'Kevin');

//$count = 1;
//while($count <= 100) {
//    echo "<li>$count</li>";
//    $count = $count +1;
//}
//$count = 0;
//while($count < $names.length) {
//    echo "<li>Hi, my name is $names[$count];</li>";
//        $count++;
//}

foreach ($names as $index)
{
    echo "$index <br>";
}
?>

<!--
<p>Hi, my name is <?php #echo $names[0]; ?> </p>
<p>Hi, my name is <?php #echo $names[1]; ?> </p>
<p>Hi, my name is <?php #echo $names[2]; ?> </p>
<p>Hi, my name is <?php #echo $names[3]; ?> </p>
-->




