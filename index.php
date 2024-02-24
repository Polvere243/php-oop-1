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

$batman_v_superman = new Movies ('Batman v Superman, dawn of justice', '181 min', '874362803', 'Dimmi: tu sanguini? Gronderai!');

$justice_league = new Movies ('Zack Snyder \' Justice League', '242 min', 'Non m\'importa quanti demoni in quanti inferni. Non ha mai combattuto con noi. Non con noi uniti');

var_dump($batman_v_superman, $justice_league);