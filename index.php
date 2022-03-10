<?php 

require 'pokemon.php';
require 'mainEngine.php';


$pikachu = new pokemon('pikachu', 'lightning', '60', '60', (['Electric ring','Pika punch']), (['60', '20']), 'fire', 'fighting');
$charmelion = new pokemon('charmelion', 'fire', '60', '60', (['Heat butt','Flare']),(['10','30']), 'water', 'lightning');


    function checkHp($pikachu, $charmelion){
        echo ''.$pikachu->getProperty('name').' hp is at '.$pikachu->getProperty('currentHp').''; 
        echo '<br>';
        echo ''.$charmelion->getProperty('name').' hp is at '.$charmelion->getProperty('currentHp').''; 
        echo '<br>'; echo '<br>';
    }
    
    checkHp($pikachu, $charmelion);
    #devision line (wil go later but works for now)
    echo '_____________________________________________________';
    echo '<br>'; echo '<br>';
    
    $moveUsed = $pikachu->getProperty('energyType');
    $moveDmg = $pikachu->attackDmg[0];
    $battleDmg = damageCharmelion($charmelion, $moveUsed, $moveDmg);  
    
    echo ''.$pikachu->getProperty('name').' attacks '.$charmelion->getProperty('name').' with '.$pikachu->attack[0].' dealing '.$battleDmg.' dmg';
    echo '<br>';

    $charmelion->currentHp = $charmelion->getProperty('currentHp') - $battleDmg;
    
    echo ''.$charmelion->getProperty('name').' takes '.$battleDmg.' dmg';

    echo '<br>'; echo '<br>';

    checkHp($pikachu, $charmelion);

    echo '_____________________________________________________';
    echo '<br>'; echo '<br>';

    $moveUsed = $charmelion->getProperty('energyType');
    $moveDmg = $charmelion->attackDmg[1];
    $battleDmg = damagePikachu($pikachu, $moveUsed, $moveDmg);

    echo ''.$charmelion->getProperty('name').' attacks '.$pikachu->getProperty('name').' with '.$charmelion->attack[1].' dealing '.$battleDmg.' dmg';
    echo '<br>';
    
    $pikachu->currentHp = $pikachu->getProperty('currentHp') - $battleDmg;

    echo ''.$pikachu->getProperty('name').' takes '.$battleDmg.' dmg';

    echo '<br>'; echo '<br>';

    checkHp($pikachu, $charmelion);

    echo '_____________________________________________________';
    echo '<br>'; echo '<br>';
    


?>
