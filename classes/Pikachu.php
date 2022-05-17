<?php 

/**
 * this is the Pikachu class,
 * 
 * Here all the base data that is the same across all Pikachu is specified.
 * 
 * Reminder,  changing something in here effects all the pokemon created using this class.
 */
class Pikachu extends Pokemon{

    /**
     * he constructor for the pikachu class.
     * 
     * here all the data that is unique to the pikachu class.
     *
     * @param string $name The name of the pokemon,
     *                     it is not given here because all the pikachu 
     *                     may have different names while having the same background data.
     * 
     * @return void.
     */
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