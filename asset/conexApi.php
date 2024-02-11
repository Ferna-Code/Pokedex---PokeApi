<?php

$url = "https://pokeapi.co/api/v2/pokemon?limit=151&offset=0";
$json = file_get_contents($url);
$datos = json_decode($json, true);