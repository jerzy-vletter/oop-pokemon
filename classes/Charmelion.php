<?php 

class Charmelion extends pokemon{

    public function __construct()
    {
        $this->attacks = [new attack('Heat butt', 10 ) , new attack('flare', 30 )];
        $this->energyType = 'fire';
        $this->maxHp = '60';
        $this->currentHp = '60';
        $this->weakness = 'water';
        $this->resistance = 'lightning';
    }
}


?>