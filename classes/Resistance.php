<?php 

class Resistance{
    public $energyType;
    public $waarde;

    public function __construct($energyType, $waarde)
    {
        $this->energyType = $energyType;
        $this->waarde = $waarde;
    }

    public function __toString()
    {
        return json_encode($this);
    }
    
}
?>