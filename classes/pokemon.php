<?php 

class pokemon extends attack{
    // Properties.
    private $name;
    private $energyType;
    private $maxHp;
    public $currentHp;
    public $attack;
    public $attackDmg;
    private $weakness;
    private $resistance;

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