<?php 

class Animal {
    public $weight;

    public function eat() {
        var_dump('All animals can eat');
    }

    public function reproduce() {
        var_dump('All animals can reproduce');
    }
}

class Mammal extends Animal {
    public $heartRate;

    public function breathe() {
        var_dump('I can breathe because I am a Mammal');
    }
}

class Dog extends Mammal {
    public $color;

    public function bark() {
        var_dump('I can bark because I am a ' . get_class());
    }

    public function breathe() {
        var_dump('I can breathe very fast');
    }

    public function chase() {
        var_dump('I am chasing a Rabbit');
    }
}


header('Content-Type: text/plain', true);

$brown = new Dog;
$brown->weight = '7.3';
$brown->color = 'Brown';
$brown->heartRate = 'okay';

echo "Weight" . $brown->weight . PHP_EOL . "Color" . $brown->color . PHP_EOL . "Heart Rate" . $brown->heartRate . PHP_EOL;
echo $brown->bark();
echo $brown->chase();
echo $brown->eat();
echo $brown->reproduce();
echo $brown->breathe();

?>