<?php 
require 'attacks.php';


class pokemon extends attack{
    // Properties.
    public $name;
    public $energyType;
    public $maxHp;
    public $currentHp;
    public $attack;
    public $weakness;
    public $resistance;

    public function __construct($name, $energyType, $maxHp, $currentHp, $attack, $weakness, $resistance){
        $this->name=$name;
        $this->energyType=$energyType;
        $this->maxHp=$maxHp;
        $this->currentHp=$currentHp;
        $this->attack=$attack;
        $this->weakness=$weakness;
        $this->resistance=$resistance;

        $this->increasePopulation($population);
    }
    
    public function __toString(){
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
    
        echo ''.$this->name.' attacks '. $target->name.' with '.$this->attack[0]->attackName.' dealing '.$move.' dmg'.'<br>'.'<br>';
        echo $effectiveness.'<br>';
        echo ''.$target->name.' takes '.$move.' dmg'.'<br>';
        $target->currentHp = $target->currentHp - $move;
    }

    public function increasePopulation($population){
            $population = $population + 1;
            return $population;
    }


}

?>