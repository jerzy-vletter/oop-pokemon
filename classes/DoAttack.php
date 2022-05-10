<?php 

class DoAttack{
    // the brains behind the battle functionality, where all data is gathered, used and returnd in a array
    public function doAttack($attacker, $moveSelect, $target){

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
}

?>