<?php



/**
 * The main Pokemon class, here the creation of the pokemon is facilitated trough the use of contructors.
 * 
 */
class Pokemon{

    // declaring variables that are changed later on in the code 1 or more times
    public static $currentPopulation = 0;
    public static $moveSelect = 0;

    // Properties.
    private $name;
    private $energyType;
    private $maxHp;
    private $currentHp;
    private $attacks; 
    private $weakness;
    private $resistance; 

    public function __construct($name, $energyType, $maxHp, $attacks, $weakness, $resistance){
        $this->name=$name;
        $this->energyType=$energyType;
        $this->maxHp=$maxHp;
        $this->currentHp=$maxHp;
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

    // a function that checks if a pokemon has died or not, and returns the correct string to echo
    function checkHp($attacker, $target, $dmg){  
        // declaring a empty variable for later
        $hpText = '';

        $target->currentHp = $target->currentHp-$dmg;

        $currentPopulation = pokemon::$currentPopulation;
        $currentPopulation = $currentPopulation - 1;
        
        if ($attacker->currentHp <= 0){
            $hpText = "".$attacker->getProperty('name')."'s hp was reduced to 0, current population has reduced to: ".$currentPopulation;
        }
        elseif ($target->getProperty('currentHp') <= 0) {
            $hpText = "".$target->getProperty('name')."'s hp was reduced to 0, current population has reduced to: ".$currentPopulation;
        }
        else{
            $hpText = $attacker->getProperty('name').' hp is at '.$attacker->getProperty('currentHp').'<br>'.''.$target->getProperty('name').' hp is at '.$target->getProperty('currentHp').'<br>'; 
        }

        return $hpText;
}
    

    public function getPopulation(){
        return pokemon::$currentPopulation;
    }


}

?>