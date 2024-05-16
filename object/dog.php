<?php
class Wolf
{
    // public $name='Badass';
    // public $weight=5;

    public $name;
    public $weight;

    // public function __consturuct(){
    //     echo 'i did made a dog';
    // }

    public function __construct($name, $weight)
    {
        // var_dump($name);
        // var_dump($weight);
        $this->name = $name;
        $this->weight = $weight;
    }
    public function bark()
    {
        // echo "woof woof";
        echo $this->name . "says woof woof";
        echo "<br>";
    }
}

// class Dog{
//     public $name='Badass';
//     public $weight=5;

//     public function bark(){
//         echo "woof woof";
//     }
// }

// $dunco= new Dog();

// var_dump( $dunco->name);

// $dunco->bark();

// $courage= new Dog();
// var_dump( $courage->name);
// 2 hour

class Dog extends Wolf
{
    // // public $name='Badass';
    // // public $weight=5;

    // public $name;
    // public $weight;

    // // public function __consturuct(){
    // //     echo 'i did made a dog';
    // // }

    // public function __construct($name, $weight)
    // {
    //     // var_dump($name);
    //     // var_dump($weight);
    //     $this->name = $name;
    //     $this->weight = $weight;
    // }
    public function bark()
    {
        // echo "woof woof";
        echo $this->name . "says woof woof";
        echo "<br>";
    }
}

$dunco = new Dog("Dunco", 5);

var_dump($dunco->name);

$dunco->bark();

$courage = new Dog("Courage", 12);
var_dump($courage->name);

$courage->bark();

class Coyote extends Wolf
{
    // public $name='Badass';
    // public $weight=5;

    // public $name;
    // public $weight;

    // // public function __consturuct(){
    // //     echo 'i did made a dog';
    // // }

    // public function __construct($name, $weight)
    // {
    //     // var_dump($name);
    //     // var_dump($weight);
    //     $this->name = $name;
    //     $this->weight = $weight;
    // }
    public function bark()
    {
        // echo "woof woof";
        echo $this->name . "woof, wooof";
        echo "<br>";
    }

    public function kill()
    {
        var_dump($this->name."just fuckin killed you dead.");
    }
}

$dunco = new Coyote("Fkin Monster", 20);
var_dump($danger->name);
$danger->bark();

?>