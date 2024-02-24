<?php
// dichiaro la classe
class Director 
{
    // variabili d'istanza
    public $first_name;
    public $last_name;
    public $age;
    public $country;
    // costruttore
    public function __construct ($first_name, $last_name) 
    {
        $this ->first_name = $first_name;
        $this ->last_name = $last_name;
    }

    public function getFullName ($first_name, $last_name) 
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    
}




