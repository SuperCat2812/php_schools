<?php

namespace Cat;

class Enemy extends Being
{
    public function takeDamage($dmg)
    {
        $this->heatlh = $this->heatlh - $dmg;

        echo '*ouch*';
        if ($this->heatlh <= 0) {

            var_dump($this->name . 'dropped' . $this->inventory['gold'] . 'gold.');

            $this->perish();

        } else {

            var_dump($this->name . ' has ' . $this->heatlh . 'HP');
            
        }
    }
}
