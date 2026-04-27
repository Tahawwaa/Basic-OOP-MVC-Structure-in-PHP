<?php
// class
class Person{
    // properties
    public $name;
    public $family;
    const AGE = 17;
    //method
    public function showinfo(){
        echo $this->name." ".$this->family." ".Person::AGE ;
    }

}
// object
$myperson = new Person();
$myperson -> name = 'ali';
$myperson -> family = 'akbari';
$myperson -> showinfo();
?>