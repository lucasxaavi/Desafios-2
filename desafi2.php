<?php
$a = 1;
while ($a <= 9) {
    for ($i=0; $i <= 10; $i++) { 
        echo "$a * $i = ".$a * $i;
        echo "<br>";           
    }
    echo "<br>";
    $a++;
}
?>