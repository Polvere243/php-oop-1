<?php
// classe
class Movies {
    // variabili d'istanza
    public $title;
    public $plot;
    public $duration;
    public $earning;
    public $line;
    
    // costruttore
    public function __construct($title, $plot, $duration, $earning, $line) {
        $this ->title = $title;
        $this ->plot = $plot;
        $this ->duration = $duration;
        $this ->earning = $earning;
        $this ->line = $line;
    }

    public function printALine() {
        echo $this->line;
    }
}