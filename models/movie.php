<?php
// classe
class Movies
 {
    // variabili d'istanza
    public $title;
    public $director;
    public $duration;
    public $earning;
    public $line;
    
    // costruttore
    public function __construct($title, Director $director, $duration, $line, $earning = null) {
        $this ->title = $title;
        $this ->director = $director;
        $this ->duration = $duration;
        $this ->line = $line;
        $this ->earning = $earning;
    }

    public function printALine() 
    {
        echo $this->line;
    }
}

$director = `$first_name $last_name`;