<?php 
require 'Attack.php';


class Pokemon{
    // Properties.
    public $name;
    public $energyType;
    public $maxHp;
    public $currentHp;
    public $attacks;
    public $weakness;
    public $resistance;

    public function __construct($name, $energyType, $maxHp, $currentHp, $attacks, $weakness, $resistance){
        $this->name=$name;
        $this->energyType=$energyType;
        $this->maxHp=$maxHp;
        $this->currentHp=$currentHp;
        $this->attacks=$attacks;
        $this->weakness=$weakness;
        $this->resistance=$resistance;
        
        $this->increasePopulation();
    }
    
    public function __toString(){
        return json_encode($this);
    }

    // getters
    public function getProperty($name){
        return $this->$name;
    }

    // error catcher
    public function __get($name){
        return 'property $name is not defined';
    }

    // setters
    public function setProperty($name, $value){
        $this->name = $value;
    }
    
    // error catcher
    public function __set($name, $value){
        echo '<br>can not set property $name because it is not defined<br>';
    }

    public function battle($move, $target){
        $move = $move->attackDmg;

        // checks if the move if effective against the target or not.
        if ($this->energyType == $target->weakness){
            $move = $move * 1.5;
            $effectiveness = 'the move is super effective <br>';
        }
        else if ($this->energyType == $target->resistance){
            $move = $move / 2;
            $effectiveness = "the move wasn't very effective <br>";
        }
        else{
            echo "something is wrong".'<br>';
        }
    
        echo ''.$this->name.' attacks '. $target->name.' with '.$this->attacks[0]->attackName.' dealing '.$move.' dmg'.'<br>'.'<br>';
        echo $effectiveness.'<br>';
        echo ''.$target->name.' takes '.$move.' dmg'.'<br>';
        $target->currentHp = $target->currentHp - $move;
    }
    // very work in progress
    public function increasePopulation(){
        
        echo " increasePopulation triggers with a population of ".'<br>';
    }
    // very work in progress
    public function getPopulation($currentPopulation){
        echo "getPopulation triggers with a current population of ".'<br>';
        echo $currentPopulation."<br>";
    }


}

?>