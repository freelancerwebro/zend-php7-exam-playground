<?php

function my_autoloader($class) {
 
    include_once 'classes/' .ucfirst(strtolower($class)) . '.php';
}
 
spl_autoload_register('my_autoloader');
