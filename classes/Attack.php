<?php 

/**
 * This is the Attack class,
 * 
 * Here is where the background constructor is for the attacks property of all the pokemon,
 * so instead of needing to define all this data every time you create a pokemon you use the contructor to make it easy.
 */
class Attack{
    //parameters
    private $attackName;
    private $attackDmg;

    /**
     * this constructor breaks up the given data from the pokemon that calls for one of these values so it can be used
     * 
     * asigns the broken up data to a variable so it can be used in both the attack functionality 
     * and as part of the battleText.
     * 
     * @param string $attackName the name of the attack given in the class where the specific pokemon is created [example: pokemon.php]
     * @param int $attackDmg the dmg of the attack given in the class where the specific pokemon is created [example: pikachu.php]
     */
    public function __construct($attackName, $attackDmg)
    {
        $this->attackName = $attackName;
        $this->attackDmg = $attackDmg;
    }

    /**
     * toString function that turns all data provided above into a string so that they can be used in echo's without having to change the dataType.
     *
     * @return string returns all data that was broken up here in the string dataType so it can be used in multible different ways
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