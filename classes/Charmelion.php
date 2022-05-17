<?php 

/**
 * this is the charmelion class,
 * 
 * Here all the base data that is the same across all Charmelions is specified.
 * 
 * Reminder,  changing something in here effects all the pokemon created using this class.
 */
class Charmelion extends Pokemon{
    
    /**
     * the constructor for the pikachu class.
     * 
     * here all the data that is unique to the pikachu class.
     *
     * @param string $name The name of the pokemon,
     *                     it is not given here because all the pikachu 
     *                     may have different names while having the same background data.
     * 
     * @return void.
     */
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