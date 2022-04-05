<?php 


class Pikachu extends Pokemon{

    public function __construct($name)
    {
        
        $attacks = [new Attack('Electric Ring', 60 ) , new Attack('Pika Punch', 20)];
        $energyType = 'lightning';
        $maxHp = '60';
        $weakness = 'fire';
        $resistance = 'fighting';
        $currentHp = $maxHp;
    
        parent::__construct($name, $energyType, $maxHp, $currentHp, $attacks, $weakness, $resistance);
    }
}



?>