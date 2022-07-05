<?php

$pattern='/hero"\ssrc="([^"]+)"\salt="([^"]+)"/';
$html = file_get_contents("heros.html");

if (preg_match_all($pattern, $html, $matches)) {
    $heros = [];
    for ($i=0; $i<count($matches[0]); $i++) {
    // foreach ($matches as $match) {
        // var_dump($matches[1][$i]);
        $filename = preg_replace('/^.*\/(\w+\.png)/', '$1', $matches[1][$i]);
        file_put_contents("heros/".$filename, file_get_contents($matches[1][$i]));
        $heros[] = [
            'name' => $matches[2][$i],
            'pic' => $filename,
        ];
        // var_dump($heros);
        // die;
    }
    file_put_contents('heros_copy.json', json_encode($heros));
}