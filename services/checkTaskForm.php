<?php

http_response_code(400);
define("TITLE_MINSIZE", 10);
define("TITLE_MAXSIZE", 255);
define("DESCRIPTION_MINSIZE", 0);
define("DESCRIPTION_MAXSIZE", 255);

function isInRange($value, $min, $max)
{
    if ($value >= $min && $value <= $max)
    {
        return true;
    }
    return false;
}