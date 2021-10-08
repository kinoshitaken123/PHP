<?php
function greetings($firstName, $lastName, $day){
    return "Greetings: Hello " . $firstName . " " . $lastName . ", Have a great " . $day . "!";
}

echo greetings("Tom", "Sawyer", "Friday") . PHP_EOL;

echo (greetings("Tom, "Sawyer", "Friday") . "... Now good bye.") . PHP_EOL;