<?php
// classe
class Movies {
    // variabili d'istanza
    public $title;
    public $plot;
    public $duration;
    public $earning;
    
    // costruttore
    public function __construct($title, $plot, $duration, $earning) {
        $this ->title = $title;
        $this ->plot = $plot;
        $this ->duration = $duration;
        $this ->earning = $earning;
    }
}