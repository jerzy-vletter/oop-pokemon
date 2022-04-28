<?php
// a autoloader that uses the class name to load the file.
spl_autoload_register(function($Class_name){
    require_once 'Classes/'.($Class_name).'.php';

     // Check to see whether the include declared the class
     if (!class_exists($Class_name, false)) {
        throw new LogicException("Unable to load class: $class_name");
    }
});

 

// IMPORTANT: this does mean that if the class name and the file name don't match, this will fail.
?>