<?php

use Pokemon as GlobalPokemon;

require 'Attack.php';

class Pokemon{

    public static $currentPopulation=0;

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
        
        // increases the population everytime a pokemon is created.
        pokemon::$currentPopulation++;
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

    // a battle function where all atributes are gathered by given the target
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

    // when called echos a static piece of text with some changing properties.
    function checkHp($pikachu, $charmelion){    
    echo ''.$pikachu->getProperty('name').' hp is at '.$pikachu->getProperty('currentHp').''; 
    echo '<br>';
    echo ''.$charmelion->getProperty('name').' hp is at '.$charmelion->getProperty('currentHp').''; 
    echo '<br>';
}
    
    public function getPopulation(){
        return pokemon::$currentPopulation;
    }


}

?>