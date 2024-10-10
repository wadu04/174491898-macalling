<?php
$a = 0;
$b = 1;
$count = 1;

echo "$a $b ";
while ($count <= 8){
    $next = $a + $b;
    echo "$next ";
    $a = $b;
    $b = $next;
    $count++;
}
?>