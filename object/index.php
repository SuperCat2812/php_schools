<?php
// $her_name='Marceline';
// $her_health=50;
// $her_inventory=[
//     'gold'=>120,
//     'potion'=>3,
//     'axe'=>1,
// ];

// $enemies=[
//     [
//         $name='Ice King',
//     $health=90,
//     $inventory=[
//         'gold'=>900,
// 'crown'=>1,
// 'gunther'=>1,
//     ]
//     ],
//     [
//          $name='The Lich',
//     $health=9999,
//     $inventory=[
//         'gold'=>900,

//     ]],
//     ];

class Being
{
    // public $name;
    // public $heatlh;

    // private $name;
    // private $heatlh;

    protected $name;
    protected $heatlh;
protected $mana=60;
    protected $inventory;
 
    // public $mana=60;
    // public $inventory;
// public function getName(){
//     return $this->name;
// }

// public function getHeatlh(){
//     return $this->heatlh;
// }

// public function setName($name){
//     $this->name = $name;
// }

// public function setHeatlh($heatlh){
//     $this->heatlh = $heatlh;
// }

    public function __construct($name, $heatlh, array $inventory)
    {
        $this->name = $name;
        $this->heatlh = $heatlh;
        $this->inventory = $inventory;
    }

    public function takeDamage($dmg)
    {
        $this->heatlh = $this->heatlh - $dmg;

        //armor, spells, dice roll...
        var_dump(-1 * $dmg);

        if ($this->heatlh <= 0) {
            $this->perish();
        } else {

            var_dump($this->name . ' has ' . $this->heatlh . 'HP');
        }
    }

    // private function perish()
    // {
    //     var_dump($this->name . ' died ');
    // }
    protected function perish()
    {
        var_dump($this->name . ' died ');
    }
}

class Enemy extends Being
{
    public function takeDamage($dmg)
    {
        $this->heatlh = $this->heatlh - $dmg;

echo '*ouch*';
        if ($this->heatlh <= 0) {
            var_dump($this->name . 'dropped'. $this->inventory['gold'].'gold.');

            $this->perish();
        } else {

            var_dump($this->name . ' has ' . $this->heatlh . 'HP');
        }
    }

}

$hero = new Being('Marcwline', 50, ['gold' => 120, 'potion' => 3, 'axe' => 1,]);
//enemy attack me
// echo $hero->name.' (' . $hero->heatlh. 'HP)';
// echo $hero->getName().' (' . $hero->getHeatlh(). 'HP)';

$hero->takeDamage(40);
$hero->takeDamage(5);
$hero->takeDamage(2);


// $hero->heatlh=$hero->heatlh-60;
// if ($hero->heatlh<=0){
//     var_dump("you died,lol");
// }

// $hero->heatlh=$hero->heatlh-15;
// if ($hero->heatlh<=0){
//     var_dump("you died,lol");
// }
// var_dump($hero);
$enemies = [
    new Being('Ice King', 50, ['gold' => 900, 'crow' => 1, 'gunther' => 1]),
    new Being('The Lich', 9999, ['gold' => 999]),
];

// var_dump($enemies);
$enemies[0]->takeDamage(3);
