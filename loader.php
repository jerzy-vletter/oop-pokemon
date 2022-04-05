<?php
// a autoloader that uses the class name to load the file.
spl_autoload_register(function($class){
    require_once 'Classes/{$Classes}.php';
})


// IMPORTANT: this does mean that if the class name and the file name don't match, this will fail.
?>