<?php

require_once __DIR__ . '/Director.php';
require_once __DIR__ . '/Actor.php';

// classe
class Movies
 {
    // variabili d'istanza
    public $title;
    public $director;
    public $cast;
    public $duration;
    public $earning;
    public $line;
    
    // costruttore
    public function __construct($title, Director $director, Actor $actors, $duration, $line, $earning = null) {
        $this ->title = $title;
        $this ->director = $director;
        $this ->actors = $actors;
        $this ->duration = $duration;
        $this ->line = $line;
        $this ->earning = $earning;
    }

    public function printALine() 
    {
        echo $this->line;
    }
}

$cast = [$cavill, $affleck, $gadot, $momoa, $miller, $fisher];

