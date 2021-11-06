<?php

function check_int ($num, $min = NULL, $max = NULL) {
    return !is_numeric($num) || (strpos($num,'.')) || (isset($min) && ($num < $min)) || (isset($max) && ($num > $max));
}