<?php

function getValue($array, $key, $default = null) {
    return isset($array[$key]) ? $array[$key] : $default;
}

function validateRequired($value) {
    return !empty($value);
}
