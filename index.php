<?php 

require 'pc.php';
require 'mainEngine.php';


$pikachu = new pokemon('pikachu', 'lightning', '60', '60', (['Electric ring','Pika punch']), (['60', '20']), 'fire', 'fighting');
$charmelion = new pokemon('charmelion', 'fire', '60', '60', (['Heat butt','Flare']),(['10','30']), 'water', 'lightning');


    function checkHp($pikachu, $charmelion){
        echo ''.$pikachu->name.' hp is at '.$pikachu->currentHp.''; 
        echo '<br>';
        echo ''.$charmelion->name.' hp is at '.$charmelion->currentHp.''; 
        echo '<br>'; echo '<br>';
    }
    
    checkHp($pikachu, $charmelion);
    #devision line (wil go later but works for now)
    echo '_____________________________________________________';
    echo '<br>'; echo '<br>';
    
    checkHp($pikachu, $charmelion);
    
    echo ''.$pikachu->name.' attacks '.$charmelion->name.' with '.$pikachu->attack[0].' dealing '.$pikachu->attackDmg[0].' dmg';
    echo '<br>';

    $moveUsed = $pikachu->energyType;
    $moveDmg = $pikachu->attackDmg[0];
    $battleDmg = damageCharmelion($charmelion, $moveUsed, $moveDmg);    
    $charmelion->currentHp = $charmelion->currentHp - $battleDmg;
    
    echo ''.$charmelion->name.' takes '.$battleDmg.' dmg';

    echo '<br>'; echo '<br>';
    echo '_____________________________________________________';
    echo '<br>'; echo '<br>';

    checkHp($pikachu, $charmelion);

    echo ''.$charmelion->name.' attacks '.$pikachu->name.' with '.$charmelion->attack[1].' dealing '.$charmelion->attackDmg[1].' dmg';
    echo '<br>';
    $moveUsed = $charmelion->energyType;
    $moveDmg = $charmelion->attackDmg[1];
    $battleDmg = damagePikachu($pikachu, $moveUsed, $moveDmg);
    $pikachu->currentHp = $pikachu->currentHp - $battleDmg;

    echo ''.$pikachu->name.' takes '.$battleDmg.' dmg';

    echo '<br>'; echo '<br>';
    echo '_____________________________________________________';
    echo '<br>'; echo '<br>';

    checkHp($pikachu, $charmelion);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon battle</title>
</head>
<body>
    <form method="post">
        <input type="submit" name="nextMove" class="button" href="index.php" value="next move"/>
        <input type="submit" name="restart" class="button" href="index.php" value="restart"/>
    </form>
</body>
</html>