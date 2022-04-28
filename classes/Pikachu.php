<?php 


class Pikachu extends Pokemon{

    public  function __construct($name, $energyType, $weakness, $resistance)
    {
        
        $attacks = [new Attack('Electric Ring', 50 ) , new Attack('Pika Punch', 20)];
        $maxHp = '60';
        $currentHp = $maxHp;
    
        parent::__construct($name, $energyType, $maxHp, $currentHp, $attacks, $weakness, $resistance);
    }
}



?>