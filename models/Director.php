<?php

class Director 
{
    public $first_name;
    public $last_name;
    public $age;
    public $country;

    public function __construct ($first_name, $last_name) 
    {
        $this ->first_Name = $first_name;
        $this ->last_name = $last_name;
    }

    
    
}

$director = new Director('Zack', 'Snyder');


