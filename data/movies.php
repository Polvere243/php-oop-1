<?php

require __DIR__ . '/../models/Movie.php'; 

$batman_line = 'Dimmi: tu sanguini? Gronderai!';

$batman_line_j = 'Non m\'importa quanti demoni in quanti inferni. Non ha mai combattuto con noi. Non con noi uniti.';

$batman_v_superman = new Movies ('Batman v Superman, dawn of justice', '181 min', $batman_line, '874362803');

$justice_league = new Movies ('Zack Snyder \'s Justice League', '242 min', $batman_line_j);

$movies = [$batman_v_superman, $justice_league];