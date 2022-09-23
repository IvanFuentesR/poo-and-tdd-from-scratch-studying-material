<?php

class Lion implements Predator {
    public function chase(Prey $prey) {
        $prey->chaseBy($this);
    }
    
    public function kill(Prey $prey) {
        $prey->killBy($this);
    }
}

$rabbit = new Rabbit;

$lion = new Lion;
$lion->chase($rabbit);
$cat->kill($rabbit);

?>