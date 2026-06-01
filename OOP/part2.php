<?php
class Time {
    private $hour;
    private $min;
    private $sec;

    function __construct($hour = 0,$min = 0,$sec = 0)
    {
       $this->hour = $hour;
       $this->min = $min;
       $this->sec = $sec;
    }

    public function getTime(){
     
        return $this->hour . " : " . $this->min . " : " . $this->sec;

    }
}










?>