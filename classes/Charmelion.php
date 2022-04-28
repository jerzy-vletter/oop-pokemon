<?php 

class Charmelion extends Pokemon{

    public function __construct($name, $energyType, $weakness, $resistance)
    {
        $attacks = [new attack('Heat butt', 10 ) , new attack('flare', 30 )];
        $maxHp = '60';
        $currentHp = $maxHp;

        parent::__construct($name, $energyType, $maxHp, $currentHp, $attacks, $weakness, $resistance);
    }
}


?>