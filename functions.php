<?php
function myfunc (string $var = null) {
    while (true) {
        $response = readline($var . "o/n :");
        if ($response === "o") {
            return true;
        } elseif ($response === "n") {
            return false;
        }
    }
}
