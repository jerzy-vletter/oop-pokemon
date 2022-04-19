<?php 

require_once 'loader.php';
// just a simple clock to show when you started the battle
ini_set('date.timezone','Europe/Amsterdam'); 
echo 'started this battle on: '.date("l jS \of F Y").' at '.date("H:i:s A").' LT';

// the creation of new pokemon happens here.
$pikachu = new Pikachu('pikachu');
$charmelion = new Charmelion('charmelion');

// end of pokemon creation box

// division line number 0 (pre battle)
echo '<br>'.'_____________________________________________________'.'<br>'.'<br>';

echo "WELKOM TO THE POKEMON BATTLE"."<br><br>";

echo 'current population = '.$pikachu->getPopulation($currentPopulation).'<br>';

// division line number 1
echo '_____________________________________________________'.'<br>'.'<br>';


echo 'hp of all pokemon before the battle'.'<br><br>';
$pikachu->checkHp($pikachu, $charmelion); 

# start battle.

$move = $pikachu->attacks[0];
$pikachu->battle($move, $charmelion);

$move = $charmelion->attacks[1];
$charmelion->battle($move, $pikachu);

$move = $pikachu->attacks[1];
$pikachu->battle($move, $charmelion);

$move = $charmelion->attacks[0];
$charmelion->battle($move, $pikachu);

?>
