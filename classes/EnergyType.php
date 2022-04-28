<?php 

class EnergyType{

    public $energyType;
    public $weakness;
    public $resistance;

    public  function __construct($energyType, $weakness, $resistance)
    {
        $this->energyType = $energyType;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }

    public function __toString()
    {
        return json_encode($this);
    }
}



?>