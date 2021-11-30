<?php

$group = array( 

    array(
        'id' => 2201,
        'firstName' => 'Limon',
        'Lastname' => 'khalaque',
    ),
    array(
        'id' => 2203,
        'firstName' => 'React',
        'Lastname' => 'khalaque',
    ),
    array(
        'id' =>2302,
        'firstName' => 'Raj',
        'Lastname' => 'Ahmed',
    ),
    array(
        'id' => 2204,
        'firstName' => 'Raju',
        'Lastname' => 'khan',
    ),
);

$new = array_column($group, 'firstName');

echo "<pre>";
print_r($new);
echo "</pre>";

?>
