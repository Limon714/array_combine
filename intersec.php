<?php

$a1 = array(" a " => "red", " b " => "blue", " c " => "white",);
$a2 = array(" a " => "red", " d " => "green", " e " => "lime",);

     $new = array_intersect($a1, $a2);
 echo "<pre>";
 print_r($new);
 echo "</pre>";
?>
