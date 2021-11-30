<?php

$group = [34 => 'me', 35 => 'my', 37 => 'mo', 38 => 'mi']; 



array_walk($group, "limon", 'is a key of');

function limon($v, $k, $p){
    echo "$k $p $v <br>";
}
?>
