<?php 

class Attack{

    /**
     * paramiters
     *
     * @param [string] $attackName
     * @param [int] $attackDmg
     */
    private $attackName;
    private $attackDmg;

    /**
     * asign
     *
     * @param [string] $attackName
     * @param [int] $attackDmg
     */
    public function __construct($attackName, $attackDmg)
    {
        $this->attackName = $attackName;
        $this->attackDmg = $attackDmg;
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