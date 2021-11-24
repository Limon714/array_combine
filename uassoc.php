<?php
 function compare($a, $b){

    if($a === $b){
        return 0;
    }
    return ($a > $b) ? 1 : -1;

 }
$a1 = array(" a " => "red", " t " => "blue", " c " => "white",);
$a2 = array(" a " => "red", " b " => "blue", " e " => "lime",);

 $new = array_intersect_uassoc($a1, $a2, 'compare');

 echo "<pre>";
 print_r($new);
 echo "</pre>";
