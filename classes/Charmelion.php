<?php 

class Charmelion extends Pokemon{

    public function __construct($name)
    {
        $attacks = [new attack('Heat butt', 10 ) , new attack('flare', 30 )];
        $energyType = 'fire';
        $maxHp = '60';
        $weakness = 'water';
        $resistance = 'lightning';
        $currentHp = $maxHp;

        parent::__construct($name, $energyType, $maxHp, $currentHp, $attacks, $weakness, $resistance);
    }
}


?>