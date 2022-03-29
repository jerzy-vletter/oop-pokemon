<?php 

require_once './classes/Pokemon.php';
require_once './classes/Attack.php';
require_once './classes/Pikachu.php';
require_once './classes/Charmelion.php';

$basePopulation = 0;

// the creation of new pokemon happens here.
$pikachu = new Pikachu('pikachu');

$pikachu->getPopulation($currentPopulation);

$charmelion = new Charmelion('charmelion');
echo '_____________________________________________________'.'<br>'.'<br>';
// end of pokemon creation box

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
