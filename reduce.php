<?php

function square ($n, $g){
    return $n. " " .$g;
}
// $group = [34, 35, 37, 38]; 
$group2 = ["you", "are", "good", "boy"]; 

 $new = array_reduce( $group2,'square', 'Ismail');

echo "<pre>";
print_r($new);
echo "</pre>";

?>
