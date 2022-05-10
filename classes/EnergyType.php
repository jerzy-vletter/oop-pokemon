<?php 

class EnergyType{
    
    /**
     * paramiters
     *
     * @param [string] $energyType
     * @param [string] $weakness
     * @param [string] $resistance
     */
    private $energyType;
    private $weakness;
    private $resistance;

   /**
    * asings
    *
    * @param [string] $energyType
    * @param [string] $weakness
    * @param [string] $resistance
    */
    public  function __construct($energyType, $weakness, $resistance)
    {
        $this->energyType = $energyType;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }
    /**
     * toString function
     *
     * @return string
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