<?php

Include_once __DIR__ . '/Director.php';
Include_once __DIR__ . '/Actor.php';



// classe
class Movies
 {
    // variabili d'istanza
    public $title;
    public $director;
    public $duration;
    public $line;
    public $cast = [];
    public $earning;
    
    // costruttore
    public function __construct($title, Director $director, $duration, $line, array $cast = [], $earning = null) {
        $this ->title = $title;
        $this ->director = $director;
        $this ->duration = $duration;
        $this ->line = $line;
        $this ->cast = $cast;
        $this ->earning = $earning;
    }

    public function printALine() 
    {
        echo $this->line;
    }

    public function getCast() {
        $names = '';
        
        foreach ($this ->cast as $actor) {
            $names .= $actor -> getFullName() . ', ';
        }

        return $names . substr($names, 0, -2);
    }

}



