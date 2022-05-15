<!-- 1 ids true 0 is false -->
<!-- = is for assigning -->
<!-- == is comparison operator -->
<!-- != not equal -->
<!-- <= >=  -->
<?php

// $result = 1 < 3;
// echo $result == true; // 1

$first_name = 'Akshay';  // php style guide lines
$second_name = 'Singh';

echo 'The name is ' . $first_name . ' ' . $second_name;

// comparision ope4rator && || !(not)

if ($first_name == 'Akshay' && $second_name == 'Singh') {
    echo  '<br/>The condition is true';
} else if ($first_name == 'dsfuhd' && $second_name == 'dgsdg') {
    echo 'second statement is true';
} else {
    echo '<br/>The condition is not true';
}