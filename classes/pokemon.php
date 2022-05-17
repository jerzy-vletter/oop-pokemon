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
    
    // the brains behind the battle functionality, where all data is gathered, used and returnd in a array
    public function DoAttack($attacker, $moveSelect, $target){

        // declaring a empty variable for the return later
        $battelText = array();
        
        // getting all the data via getters
        $energyTypeData = $attacker->getProperty('energyType');
        $weaknessData = $target->getProperty('weakness');
        $resistanceData = $target->getProperty('resistance');
        $attackData = $attacker->getProperty('attacks');
        
        // turning the gathered data into usable variables
        if($moveSelect == 0){
            $attackName = $attackData[0]->getProperty('attackName');
            $dmg = $attackData[0]->getProperty('attackDmg');
        }
        elseif($moveSelect == 1){
            $attackName = $attackData[1]->getProperty('attackName');
            $dmg = $attackData[1]->getProperty('attackDmg');
        }
        else{
            echo "selected a invalid move";
        }

        $energyType = $energyTypeData[0]->getProperty('energyType');
        $weaknessType = $weaknessData[0]->getProperty('energyType');
        $weaknessValue = $weaknessData[0]->getProperty('multiplier');
        $resistanceType = $resistanceData[0]->getProperty('energyType');
        $resistanceValue = $resistanceData[0]->getProperty('waarde');

        // checks if the move if effective against the target or not.
        if ($energyType == $weaknessType){
            $dmg = $dmg * $weaknessValue;
            $effectiveness = 'the move is super effective <br>';
        }
        else if ($energyType == $resistanceType){
            $dmg = $dmg - $resistanceValue;
            $effectiveness = "the move wasn't very effective <br>";
        }
        else{
            $effectiveness = "something is wrong".'<br>';

        }
        
        // passing all the data that is needed for the battletext into a variable array so it can be returned.
        array_push($battelText, $this->name);
        array_push($battelText, $target->name);
        array_push($battelText, $attackName);
        array_push($battelText, $dmg);
        array_push($battelText, $effectiveness);

        return $battelText;
    }

    // a function that checks if a pokemon has died or not, and returns the correct string to echo
    public function checkHp($attacker, $target, $dmg){  
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