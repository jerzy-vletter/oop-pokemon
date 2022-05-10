<?php 

class Weakness{

    /**
     * creating the parameters with there encapsulation setting
     *
     * @param string $energyType declared as private for safety and when needed getters are used
     * @param int $multiplier declared as private for safety and when needed getters are used
     */
    private $energyType;
    private $multiplier;

    /**
     * this constructor breaks up the given data from the pokemon that calls for one of these values so it can be used
     *
     * asigns the broken up data to a variable so it can be used in the battle functionality 
     * 
     * @param string $energyType the energyType that the specified pokemon is weak to
     * @param int $multiplier a muliplier for dmg if the target pokemon is weak to the attack pokemons's move
     */
    public function __construct($energyType, $multiplier)
    {
        $this->energyType = $energyType;
        $this->multiplier = $multiplier;
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