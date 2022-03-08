<?php

function damageCharmelion($charmelion, $moveUsed ,$moveDmg){
    #checks the resist that charmelion has.
    if($moveUsed == $charmelion->resistance){
       $dmgTBD = $moveDmg / 2;
    }
    else if($moveUsed == $charmelion->weakness){
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
    if($moveUsed == $pikachu->resistance){
        $dmgTBD = $moveDmg / 2;
     }
     else if($moveUsed == $pikachu->weakness){
         $dmgTBD = $moveDmg * 2;
     }
     else{
         echo 'invalid selection';
     }

     $battleDmg = $dmgTBD;
     return $battleDmg;     
}

?>