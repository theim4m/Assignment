<?php

// Write a PHP function to check if a string contains only letters and whitespace.

function check_string($string) {
    return ctype_alpha(str_replace(' ', '', $string));
}

echo check_string('abc def') ? 'true' : 'false';

// Output:
// true