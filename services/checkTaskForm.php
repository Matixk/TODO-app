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

if(isset($_POST["title"]))
{
    if (isInRange(strLen($_POST["title"]), TITLE_MINSIZE, TITLE_MAXSIZE))
    {
        if (isset($_POST["description"]) &&
            !isInRange(strLen($_POST["description"]), DESCRIPTION_MINSIZE, DESCRIPTION_MAXSIZE))
        {
            die("Description length must be in range " . DESCRIPTION_MINSIZE . "-" . DESCRIPTION_MAXSIZE);
        }

        http_response_code(200);
        echo "OK";
    } else {
        die("Title length must be in range " . TITLE_MINSIZE . "-" . TITLE_MAXSIZE);
    }
}
else
{
    die("You need to send title value via post!");
}
