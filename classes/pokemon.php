<?php


require 'Attack.php';

class Pokemon{

    public static $currentPopulation=0;

    // Properties.
    private $name;
    private $energyType;
    private $maxHp;
    private $currentHp;
    public $attacks; //
    public $weakness; // these three have to be public so the battle function can use them for it's calculations
    public $resistance; //

    protected function __construct($name, $energyType, $maxHp, $currentHp, $attacks, $weakness, $resistance){
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

    // error catcher for the getters
    public function __get($name){
        return 'property $name is not defined';
    }

    // setters
    public function setProperty($name, $value){
        $this->name = $value;
    }
    
    // error catcher for the setters
    public function __set($name, $value){
        echo '<br>can not set property $name because it is not defined<br>';
    }

    // a battle function where all atributes are gathered by given the target
    public function callBattleMethod($move, $target){
        // gets to call the battle method in from a child class.

        if (function_exists('battle')) {
            echo "battle functions are available.<br />\n";
        } else {
            return;
        }

    }
    public function battle($move, $target){

        // division line
        echo '_____________________________________________________'.'<br>'.'<br>';

        $dmg = $move->attackDmg;

        // checks if the move if effective against the target or not.
        if ($this->energyType == $target->weakness){
            $dmg = $dmg * 1.5;
            $effectiveness = 'the move is super effective <br>';
        }
        else if ($this->energyType == $target->resistance){
            $dmg = $dmg / 2;
            $effectiveness = "the move wasn't very effective <br>";
        }
        else{
            echo "something is wrong".'<br>';
        }
    
        echo ''.$this->name.' attacks '. $target->name.' with '.$move->attackName.' dealing '.$dmg.' dmg'.'<br>'.'<br>';
        echo $effectiveness.'<br>';
        echo ''.$target->name.' takes '.$dmg.' dmg'.'<br>';
        $target->currentHp = $target->currentHp - $dmg;

        echo '<br>';

        $this->checkHp($this, $target);
    }

    // when called echos a static piece of text with some changing properties.
    function checkHp($attacker, $target){  
        $currentPopulation = pokemon::$currentPopulation;
        $currentPopulation = $currentPopulation - 1;
        
        if ($attacker->getProperty('currentHp') <= 0){
            echo "".$attacker->getProperty('name')."'s hp was reduced to 0, current population has reduced to: ".$currentPopulation;
        }
        elseif ($target->getProperty('currentHp') <= 0) {
            echo "".$target->getProperty('name')."'s hp was reduced to 0, current population has reduced to: ".$currentPopulation;
        }
        else{
            echo $attacker->getProperty('name').' hp is at '.$attacker->getProperty('currentHp').'<br>'; 
            echo ''.$target->getProperty('name').' hp is at '.$target->getProperty('currentHp').'<br>'; 
        }
}
    
    public function getPopulation(){
        return pokemon::$currentPopulation;
    }


}

?>