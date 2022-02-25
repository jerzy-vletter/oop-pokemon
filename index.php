<?php 

require 'pc.php';

$pikachu = new pokemon('pikachu', 'lightning', '60', '60', (['Electric ring','Pika punch']), (['60', '20']), 'fire', 'fighting');
$charmelion = new pokemon('charmelion', 'fire', '60', '60', (['Heat butt','Flare']),(['10','30']), 'water', 'lightning');

print_r($pikachu); 
echo '<br>';
print_r($charmelion);
echo '<br>'; echo '<br>';
 
echo ''.$pikachu->name.' attacks '.$charmelion->name.' with '.$pikachu->attack[0].' dealing '.$pikachu->attackDmg[0].' dmg';

?>