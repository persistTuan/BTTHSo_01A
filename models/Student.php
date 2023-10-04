<?php

class Studen{
    private $name;
    private $msv;
    private $email;
    private $nameSchool = 'tlu';


    public function __construct($name, $msv, $email){
        $this->name = $name;
        $this->msv = $msv;
        $this->email = $email;
    }
}

?>