<?php

require_once __DIR__ . '/Director.php';
require_once __DIR__ . '/Actor.php';

// classe
class Movies
 {
    // variabili d'istanza
    public $title;
    public $director;
    public $cast = [];
    public $duration;
    public $earning;
    public $line;
    
    // costruttore
    public function __construct($title, Director $director, Actor $cast, $duration, $line, $earning = null) {
        $this ->title = $title;
        $this ->director = $director;
        $this ->cast = array($cast);
        $this ->duration = $duration;
        $this ->line = $line;
        $this ->earning = $earning;
    }

    public function printALine() 
    {
        echo $this->line;
    }
}

