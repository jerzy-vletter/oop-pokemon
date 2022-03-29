<?php 

class Pikachu extends Pokemon{

    public function __construct()
    {
        $this->attacks = [new Attack('Electric Ring', 60 ) , new Attack('Pika Punch', 20)];
        $this->energyType = 'lightning';
        $this->maxHp = '60';
        $this->currentHp = '60';
        $this->weakness = 'fire';
        $this->resistance = 'fighting';
    }
}



?>