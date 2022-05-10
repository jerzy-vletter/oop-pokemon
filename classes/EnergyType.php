<?php 

class EnergyType{
    
    /**
     * creating the parameters with there encapsulation setting
     *
     * @param string $energyType declared as private for safety and when needed getters are used
     * @param string $weakness declared as private for safety and when needed getters are used
     * @param string $resistance declared as private for safety and when needed getters are used
     */
    private $energyType;
    private $weakness;
    private $resistance;

   /**
    * this constructor breaks up the given data from the pokemon that calls for one of these values so it can be used
    * 
    *
    * asigns the broken data to a variable so it can be used in attack functionality 
    *
    * @param [string] $energyType the energyType of the pokemon that calls for this function
    * @param [string] $weakness the weakness of the pokemon that calls for this function
    * @param [string] $resistance the resistance of the pokemon that calls for this function
    */
    public  function __construct($energyType, $weakness, $resistance)
    {
        $this->energyType = $energyType;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }
    /**
     * toString function that turns all data provided above into a string so that they can be used in echo's without to change the dataType when echoing.
     * 
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