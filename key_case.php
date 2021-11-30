<?php

$group = ['red' => '34', 'green' => '35', 'blue' => '37', 'orange' => '38'];


$new = array_change_key_case($group,CASE_UPPER);

echo "<pre>";
print_r($new);
echo "</pre>";

?>
