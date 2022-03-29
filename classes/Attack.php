<?php 

class Attack{
    public $attackName;
    public $attackDmg;

    public function __construct($attackName, $attackDmg)
    {
        $this->attackName = $attackName;
        $this->attackDmg = $attackDmg;
    }

    public function __toString()
    {
        return json_encode($this);
    }
        
}
//classes en file names always start with a A.
?>