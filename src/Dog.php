<?php 

class Dog extends PreyMethods implements Predator, Prey {
    public function chase(Prey $prey) {
        $prey->chaseBy($this);
    }
    
    public function kill(Prey $prey) {
        $prey->killBy($this);
    }

}

$rabbit = new Rabbit;

$dog = new Dog;
$dog->chase($rabbit);
$dog->kill($rabbit);

?>