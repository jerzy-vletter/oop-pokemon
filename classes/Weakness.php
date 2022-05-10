<?php 

class Weakness{

    /**
     * paramiters
     *
     * @param [string] $energyType
     * @param [int] $multiplier
     */
    private $energyType;
    private $multiplier;

    /**
     * asign
     *
     * @param [string] $energyType
     * @param [int] $multiplier
     */
    public function __construct($energyType, $multiplier)
    {
        $this->energyType = $energyType;
        $this->multiplier = $multiplier;
    }
    
    /**
     * toString
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