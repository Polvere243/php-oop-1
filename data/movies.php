<?php

include_once __DIR__ . '/../models/Movie.php'; 
include_once __DIR__ . '/directors.php'; 
include_once __DIR__ . '/actors.php'; 

$actors = [$cavill, $affleck, $gadot, $momoa, $miller, $fisher];

$batman_line = 'Dimmi: tu sanguini? Gronderai!';

$batman_line_j = 'Non m\'importa quanti demoni in quanti inferni. Non ha mai combattuto con noi. Non con noi uniti.';

$batman_v_superman = new Movies ('Batman v Superman, dawn of justice', $snyder, '181 min', $batman_line, $actors, '874362803');

$justice_league = new Movies ('Zack Snyder \'s Justice League', $snyder,'242 min', $batman_line_j, $actors);

$movies = [$batman_v_superman, $justice_league];