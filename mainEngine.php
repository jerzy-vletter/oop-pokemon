<?php



function attack($moveCounter){
    
    
    if ($moveCounter == 1){
        echo "move 1";
        $moveCounter++;
        
        
    }
    elseif ($moveCounter == 2){
        echo "move 2";
        $moveCounter++;
       
    }
    else{
        echo "we have a problem";
    }
};

?>