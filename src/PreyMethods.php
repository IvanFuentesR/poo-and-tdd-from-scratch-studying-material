<?php 

abstract class PreyMethods {
    public function chaseBy(Predator $predator) {
        echo 'Please help I am being chased by ' . get_class($predator) . PHP_EOL;
    }
    
    public function killBy(Predator $predator) {
        echo 'Please help I am being killed by ' . get_class($predator) . PHP_EOL;
    }
}

?>