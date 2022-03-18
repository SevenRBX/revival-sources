<?php
function getRandomNumber() {
    do {
        $n = mt_rand(1,65535);
    } while(in_array($n, array(80, 443, 3306, 21, 14147)));

    echo $n;
}
echo getRandomNumber();