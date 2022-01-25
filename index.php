<?php

error_reporting(-1);
mb_internal_encoding('utf-8');

$text = 'Аргентина манит Негра';
$result = 'палиндром';

$text = mb_strtolower($text);
$len = mb_strlen($text);
$letters = [];

for($i = 0; $i < $len; $i++){
    $letter = mb_substr($text,$i,1);
    if($letter != ' ')$letters[] = $letter;
}

$emount = count($letters);

for($x = 0; $x < $emount/2; $x++){
    $y = $emount - $x -1;
    if($letters[$x] <> $letters[$y]){
        $result = 'не '.$result;
        break;
    }
}

echo "<h1>$result</h1>";