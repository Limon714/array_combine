<?php

function square ($n, $g){
    return "$n is for $g";
}
$group = [34, 35, 37, 38]; 
$group2 = ["you", "are", "good", "boy"]; 

 $new = array_map('square', $group, $group2);

echo "<pre>";
print_r($new);
echo "</pre>";

?>
