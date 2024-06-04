<?php

namespace Cat;

class Being
{

    protected $name;
    protected $heatlh;
    protected $mana = 60;
    protected $inventory;


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

    protected function perish()
    {
        var_dump($this->name . ' died ');
        
    }
}
