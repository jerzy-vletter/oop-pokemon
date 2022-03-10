<?php

function damageCharmelion($charmelion, $moveUsed ,$moveDmg){
    #checks the resist that charmelion has.
    if($moveUsed == $charmelion->getProperty('resistance')){
       $dmgTBD = $moveDmg - 10;
    }
    else if($moveUsed == $charmelion->getProperty('weakness')){
        $dmgTBD = $moveDmg * 2;
    }
    else{
        echo 'invalid selection';
    }

    $battleDmg = $charmelion->currentHp-$dmgTBD;
    return $battleDmg;
};

function damagePikachu($pikachu, $moveUsed, $moveDmg){
    #checks the resist that pikachu has.
    if($moveUsed == $pikachu->getProperty('resistance')){
        $dmgTBD = $moveDmg - 20;
     }
     else if($moveUsed == $pikachu->getProperty('weakness')){
         $dmgTBD = $moveDmg * 1.5;
     }
     else{
         echo 'invalid selection';
     }

     $battleDmg = $dmgTBD;
     return $battleDmg;     
}

?>