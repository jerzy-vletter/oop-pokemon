<?php 


class Pikachu extends Pokemon{

    public  function __construct($name)
    {
        $energyType = [new EnergyType('lightning', 'fire', 'fighting')];
        $weakness = [new Weakness('fire', 1.5)];
        $resistance = [new Resistance('fighting', 20)];
        $attacks = [new Attack('Electric Ring', 50 ) , new Attack('Pika Punch', 20)];
        $maxHp = '60';
    
        parent::__construct($name, $energyType, $maxHp, $attacks, $weakness, $resistance);
    }
}



?>