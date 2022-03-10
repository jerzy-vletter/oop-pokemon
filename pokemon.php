<?php 

class pokemon {
    // Properties.
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

    // getters
    public function getProperty($name){
        return $this->$name;
    }

    public function __get($name){
        return 'property $name is not defined';
    }

    // setters

    public function setProperty($name, $value){
        $this->name = $value;
    }

    public function __set($name, $value){
        echo '<br>can not set property $name because it is not defined<br>';
    }
}



?>