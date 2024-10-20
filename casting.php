<!DOCTYPE html>
<html>
<body>

<pre>
<?php
$a = 12;       // Integer
$b = 9.21;    // Float
$c = "5 kilograms"; // String
$d = "kilometers 75"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
?> 
</pre>

<p>Note that when casting a Boolean into string it gets the value "1", and when casting NULL into string it is converted into an empty string "".</p>

</body>
</html>