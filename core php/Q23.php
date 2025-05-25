<!-- Write a script to perform various string operations like concatenation, substringextraction, and string length determination. -->

<?php 

// string concatenation
$f_name = "sanket";
$l_name = "devganiya";
$full_name = $f_name . " " . $l_name;
echo $full_name; 

// substringextraction
$full_name = "sanket devganiya";
$f_name = substr($full_name, 0, 6);
echo $f_name; 

// string length determination
$full_name = "sanket devganiya";
$len = strlen($full_name);
echo $len; 

?>
