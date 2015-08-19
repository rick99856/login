<?php
function sum() {
    $acc = 0;
    foreach (func_get_args() as $n) {
        // $acc += $n;
        print_r($n);
    }
    return $acc;
}

echo sum(1, 2, 3, 4,5,6,7,8,9,"asd");
?>