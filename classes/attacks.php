<?php 

class attack {
    //properties.
    public $attackName;
    public $attackDmg;

    

    // getters
    public function getProperty($name){
        return $this->$name;
    }

    public function __get($name){
        return 'property $name is not defined';
    }

    // setters
    public function setProperty($name, $value){
        $this->name = $value;
    }

    public function __set($name, $value){
        echo '<br>can not set property $name because it is not defined<br>';
    }
}

?>