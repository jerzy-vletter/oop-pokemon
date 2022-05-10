<?php 

class Charmelion extends Pokemon{
    
    public function __construct($name)
    {
        $energyType = [new EnergyType('fire', 'water', 'lightning')];
        $weakness = [new Weakness('water', 2)];
        $resistance = [new Resistance('lightning', 10)];
        $attacks = [new attack('Heat butt', 10 ) , new attack('flare', 30 )];
        $maxHp = '60';

        parent::__construct($name, $energyType, $maxHp, $attacks, $weakness, $resistance);
    }
}


?>