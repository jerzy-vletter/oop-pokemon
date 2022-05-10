<?php 

class Resistance{

    /**
     * paramiters
     *
     * @param [string] $energyType
     * @param [int] $waarde
     */
    private $energyType;
    private $waarde;

    /**
     * asign
     *
     * @param [string] $energyType
     * @param [int] $waarde
     */
    public function __construct($energyType, $waarde)
    {
        $this->energyType = $energyType;
        $this->waarde = $waarde;
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