<?php
// classe
class Movies
 {
    // variabili d'istanza
    public $title;
    public $duration;
    public $earning;
    public $line;
    
    // costruttore
    public function __construct($title, $duration, $line, $earning = null) {
        $this ->title = $title;
        $this ->duration = $duration;
        $this ->line = $line;
        $this ->earning = $earning;
    }

    public function printALine() 
    {
        echo $this->line;
    }
}