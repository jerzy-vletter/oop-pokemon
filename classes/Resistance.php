<?php 

/**
 * This is the Resistance class,
 * 
 * Here is where the background constructor is for the Resistance property of all the pokemon,
 * so instead of needing to define all this data every time you create a pokemon you use the contructor to make it easy.
 */
class Resistance{
    //parameters
    private $energyType;
    private $waarde;

    /**
     * this constructor breaks up the given data from the pokemon that calls for one of these values so it can be used
     *
     * asigns the broken up data to a variable so it can be used in the battle functonality
     * 
     * @param string $energyType the energyType that the specific pokemon is resistance against
     * @param int $waarde the value that is used for the dmg calculation when the attacked pokemon is weak to the move
     */
    public function __construct($energyType, $waarde)
    {
        $this->energyType = $energyType;
        $this->waarde = $waarde;
    }

    /**
     * toString function that turns all data provided above into a string so that they can be used in echo's without to change the dataType when echoing.
     *
     * @return string returns a string when called for so that the requested data can be used where needed.
     */
    public function __toString()
    {
        return json_encode($this);
    }
    
    // getters
    public function getProperty($name){
        return $this->$name;
    }
    // error catcher for the getters
    public function __get($name){
        return 'property $name is not defined';
    }
}
?>