<?php

function clean_text($string)
{
    if (empty($string)) {
        $string = trim($string);
        $string = stripslashes($string);
        $string = htmlspecialchars($string);
        return $string;
    } else {
        return $string;
    }
}
