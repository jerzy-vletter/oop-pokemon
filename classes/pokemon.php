<?php 
require 'Attack.php';


class Pokemon{
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

        $this->increasePopulation($basePopulation, $currentPopulation);
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
    // very work in progress
    public function increasePopulation($basePopulation ,$currentPopulation){
        if ($basePopulation == 0 ){
            if (!isset($currentPopulation)) {
                $currentPopulation = 1;
            }
        }
        else{
            echo "else triggers"."<br>";
            $currentPopulation + 1;
        }
        echo " increasePopulation triggers with a population of ";
        echo $currentPopulation."<br>";
    }
    // very work in progress
    public function getPopulation($currentPopulation){
        echo "getPopulation triggers with a current population of ";
        echo $currentPopulation."<br>";
    }


}

?>