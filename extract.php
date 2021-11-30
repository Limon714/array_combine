<?php

 $a = "orange";
// $group = [34, 35, 37, 38]; 
$group2 = ['a' => "you", 'b' =>  "are", 'c' =>  "good", "boy"];
$group3 = ["img3.png", "Img4.png", "img1.png", "img2.png"];

extract($group2, EXTR_PREFIX_SAME, "text");
 
echo "value of $a <br>";
echo "value of $text_a <br>";
echo "value of $b <br>";
echo "value of $c <br>";

// echo "<pre>";
// print_r($group2);
// echo "</pre>";

?>
