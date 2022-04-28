<?php 


class EnergyType extends Pokemon{

    public  function __construct($name, $energyType, $maxHp, $currentHp, $attacks, $weakness, $resistance)
    {
        
        $resistance = $resistance;

        parent::__construct($name, $energyType, $maxHp, $currentHp, $attacks, $weakness, $resistance);
    }
}



?>