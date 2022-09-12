<?php
function Pali($String)
{
    if ($String == strrev($String)) {
        echo $String . " Is Palindrome<br>";
    } else {
        echo $String . " Is Not Palindrome<br>";
    }
}
Pali("malayalam");
Pali("Akhil");
?>
