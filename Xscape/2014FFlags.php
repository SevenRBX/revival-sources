<?php
header("Content-Type: application/json");

$fflag = [
        "FFlagPhysics60HZ" => "True",
    ];

$data = json_encode($fflag, JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
exit($data);
?>