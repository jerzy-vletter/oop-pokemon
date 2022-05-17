<?php 

require_once 'loader.php';

// just a simple clock to show when you started the battle
ini_set('date.timezone','Europe/Amsterdam'); 
echo 'started this battle on: '.date("l jS \of F Y").' at '.date("H:i:s A").' LT';

// declaring empty variables
$dmg = 0; 

// the creation of new pokemon happens here.
$pikachu = new Pikachu('pikachu');
$charmelion = new Charmelion('charmelion');
// end of pokemon creation box

// division line (pre battle)
echo '<br>'.'_____________________________________________________'.'<br>'.'<br>';
echo "WELKOM TO THE POKEMON BATTLE"."<br><br>";
echo 'current population = '.$pikachu->getPopulation().'<br>';
echo '_____________________________________________________'.'<br>'.'<br>';
echo 'hp of all pokemon before the battle'.'<br><br>';
$hpText = $pikachu->checkHp($pikachu, $charmelion, $dmg); 
echo $hpText;
echo '_____________________________________________________'.'<br>'.'<br>';
# start battle.

// to select what move is used you give the array position of the move as the modifier
$moveSelect = 0;
$battleText = $pikachu->DoAttack($moveSelect, $charmelion);

// getting the variables for the battle text out of the returned array.
list($attackerName, $targetName, $moveName, $dmg, $effectiveness) = $battleText;

echo ''.$attackerName.' attacks '. $targetName.' with '.$moveName.' dealing '.$dmg.' dmg'.'<br>'.'<br>';
echo $effectiveness.'<br>';
echo ''.$targetName.' takes '.$dmg.' dmg'.'<br>';

echo '<br>';
$hpText = $pikachu->checkHp($pikachu, $charmelion, $dmg); 
echo $hpText;

echo '_____________________________________________________'.'<br>'.'<br>';

$moveSelect = 1;
//$battleText = $charmelion->doAttack($moveSelect, $pikachu);

// getting the variables for the battle text out of the returned array.
list($attackerName, $targetName, $moveName, $dmg, $effectiveness) = $battleText;

echo ''.$attackerName.' attacks '. $targetName.' with '.$moveName.' dealing '.$dmg.' dmg'.'<br>'.'<br>';
echo $effectiveness.'<br>';
echo ''.$targetName.' takes '.$dmg.' dmg'.'<br>';

echo '<br>';
$hpText = $charmelion->checkHp($charmelion, $pikachu, $dmg); 
echo $hpText;

echo '_____________________________________________________'.'<br>'.'<br>';

$moveSelect = 1;
//$battleText = $pikachu->doAttack($moveSelect, $charmelion);

// getting the variables for the battle text out of the returned array.
list($attackerName, $targetName, $moveName, $dmg, $effectiveness) = $battleText;

echo ''.$attackerName.' attacks '. $targetName.' with '.$moveName.' dealing '.$dmg.' dmg'.'<br>'.'<br>';
echo $effectiveness.'<br>';
echo ''.$targetName.' takes '.$dmg.' dmg'.'<br>';

echo '<br>';
$hpText = $pikachu->checkHp($pikachu, $charmelion, $dmg); 
echo $hpText;

echo '_____________________________________________________'.'<br>'.'<br>';

$moveSelect = 0;
//$battleText = $charmelion->doAttack($moveSelect, $pikachu);

// getting the variables for the battle text out of the returned array.
list($attackerName, $targetName, $moveName, $dmg, $effectiveness) = $battleText;

echo ''.$attackerName.' attacks '. $targetName.' with '.$moveName.' dealing '.$dmg.' dmg'.'<br>'.'<br>';
echo $effectiveness.'<br>';
echo ''.$targetName.' takes '.$dmg.' dmg'.'<br>';

echo '<br>';
$hpText = $charmelion->checkHp($charmelion, $pikachu, $dmg); 
echo $hpText;

?>
