<?php 

require 'pc.php';

$currentMove = 0;

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
    
    if ($currentMove == 0)
    {
        echo ''.$pikachu->name.' attacks '.$charmelion->name.' with '.$pikachu->attack[0].' dealing '.$pikachu->attackDmg[0].' dmg';
        echo '<br>';
        echo ''.$pikachu->name.' deals '.$pikachu->attackDmg[0].' dmg to '.$charmelion->name; 
        
    }
    if ($currentMove == 1)
    {
        echo "it works";
    };

    function restart($pikachu, $charmelion, $currentMove){
        $pikachu->currentHP = $pikachu->maxHP;
        $charmelion->currentHp = $charmelion->maxHp;
        $currentMove = 1;
    };
    
    if ($_POST["nextMove"]) $currentMove++; 
    if ($_POST["restart"]) restart($pikachu, $charmelion, $currentMove);


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

