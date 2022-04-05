<?php 

require_once 'loader.php';
// just a little clock (is not needed for the project but i was bored)
ini_set('date.timezone','Europe/Amsterdam'); 
echo 'started this battle on: '.date("l jS \of F Y").' at '.date("H:i:s A");

// the creation of new pokemon happens here.
$pikachu = new Pikachu('pikachu');
$charmelion = new Charmelion('charmelion');

// end of pokemon creation box
// division line number 0 (pre battle)
echo '<br>'.'_____________________________________________________'.'<br>'.'<br>';

echo "WELKOM TO THE POKEMON BATTLE"."<br>"."<br>";

echo 'current population = '.$pikachu->getPopulation($currentPopulation).'<br>';

// division line number 1
echo '_____________________________________________________'.'<br>'.'<br>';

// when called echos a static piece of text with some changing properties.
function checkHp($pikachu, $charmelion){    
    echo ''.$pikachu->getProperty('name').' hp is at '.$pikachu->getProperty('currentHp').''; 
    echo '<br>';
    echo ''.$charmelion->getProperty('name').' hp is at '.$charmelion->getProperty('currentHp').''; 
    echo '<br>';
}

echo 'hp of all pokemon before the battle'.'<br>';
checkHp($pikachu, $charmelion); 

// division line number 2
echo '_____________________________________________________'.'<br>'.'<br>';


$move = $pikachu->attacks[0];
$pikachu->battle($move, $charmelion);

echo '<br>';

checkHp($pikachu, $charmelion);

// division line number 3
echo '_____________________________________________________'.'<br>'.'<br>';

$move = $charmelion->attacks[1];
$charmelion->battle($move, $pikachu);

echo '<br>';

checkHp($pikachu, $charmelion);

// division line number 4
echo '_____________________________________________________'.'<br>'.'<br>';


?>
