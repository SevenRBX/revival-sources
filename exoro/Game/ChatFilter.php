<?php
$badwords = [
  "NIGGER",
  "fuckface",
  "i have your ip",
  "dumbfuck",
  "cybersex",
  "fetish",
  "nigger"
];

$chatfilter = array(
    "data" => [
      "white" => "",
      "black" => $badwords,
    ]
);
 
echo json_encode($chatfilter);
?>