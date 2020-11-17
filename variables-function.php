<?php

function mathOperator($op, ...$args) {
    $ret = 0;
    switch ($op) {
        case '+':
            $ret = array_sum($args);
            break;
    }
    return $ret;
}

echo mathOperator('+', 2, 4);

?>
