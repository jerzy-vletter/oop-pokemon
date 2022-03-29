<?php 

require_once './classes/pokemon.php';
require_once './classes/attacks.php';


// the creation of new pokemon happens here.
$pikachu = new pokemon('pikachu', 'lightning', '60', '60', [new attack('Electric Ring', 60 ) , new attack('Pika Punch', 20)], 'fire', 'fighting');

$population = 1;

$charmelion = new pokemon('charmelion', 'fire', '60', '60', [new attack('Heat butt', 10 ) , new attack('flare', 30 )], 'water', 'lightning');

$currentPopulation = $charmelion->increasePopulation($population);

// end of pokemon creation box

echo "WELKOM TO THE POKEMON BATTLE"."<br>"."<br>";

echo 'current population = '.$currentPopulation.'<br>';

// division line number 1
echo '_____________________________________________________'.'<br>'.'<br>';

// when called echos a static piece of text with some changing properties.
function checkHp($pikachu, $charmelion){
    echo 'hp of all pokemon before the battle'.'<br>';
    echo ''.$pikachu->getProperty('name').' hp is at '.$pikachu->getProperty('currentHp').''; 
    echo '<br>';
    echo ''.$charmelion->getProperty('name').' hp is at '.$charmelion->getProperty('currentHp').''; 
    echo '<br>';
}


checkHp($pikachu, $charmelion); 

// division line number 2
echo '_____________________________________________________'.'<br>'.'<br>';

$move = $pikachu->attack[0];
$pikachu->battle($move, $charmelion);

echo '<br>';

checkHp($pikachu, $charmelion);

// division line number 3
echo '_____________________________________________________'.'<br>'.'<br>';

$move = $charmelion->attack[1];
$charmelion->battle($move, $pikachu);

echo '<br>';

checkHp($pikachu, $charmelion);

// division line number 4
echo '_____________________________________________________'.'<br>'.'<br>';


?>
