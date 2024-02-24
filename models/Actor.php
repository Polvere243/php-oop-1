<?php
// dichiaro la classe
class Actor
{
    // variabili d'istanza
    public $first_name;
    public $last_name;
    public $role;
    // costruttore
    public function __construct($first_name, $last_name)
    {
        $this ->first_name = $first_name;
        $this ->last_name = $last_name; 
    }

}