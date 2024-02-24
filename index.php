<?php

require __DIR__ . '/data/movies.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Daniele Ercoli">
    <meta name="description" content="esercizio">
    <meta name="keyword" content="php, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>FILM</h1>
    <?php foreach ($movies as $movie) : ?> 
        <h2>Titolo: <?=$movie ->title?></h2>
        <h4>Durata: <?=$movie ->duration?></h4>
        <h4>Incasso: <?=$movie ->earning?></h4>
        <p><strong>Battuta Epica: </strong><?=$movie ->line?></p>
    <?php endforeach ?>
</body>
</html>


