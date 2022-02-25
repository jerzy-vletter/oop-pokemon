<?php 

class pokemon {
    public $name;
    public $energyType;
    public $maxHp;
    public $currentHp;
    public $attack;
    public $attackDmg;
    public $weakness;
    public $resistance;

    public function __construct($name, $energyType, $maxHp, $currentHp, $attack, $attackDmg, $weakness, $resistance)
    {
        $this->name=$name;
        $this->energyType=$energyType;
        $this->maxHp=$maxHp;
        $this->currentHp=$currentHp;
        $this->attack=$attack;
        $this->attackDmg=$attackDmg;
        $this->weakness=$weakness;
        $this->resistance=$resistance;
    }
    
    public function __toString() {
        return json_encode($this);
    }

    

}

?>