<?php

namespace CodingLiki\AnnotatedPhpMvc\Application;

use CodingLiki\AnntatedPhpMvc\Controllers\Controller;

class Application
{
    public $registeredControllers = [];

    /**
     * @var Application
     */
    public static $singleton = null;

    public static function getApplication()
    {
        if(self::$singleton === null){
            self::$singleton = new self();
        }

        return self::$singleton;
    }


    public function registerController(string $controllerClass)
    {  
        $controllerInstance = new $controllerClass();
        $this->registeredControllers[$controllerClass] = $controllerInstance;
    }

    public function registerControllers(array $controllerClasses)
    {
        foreach($controllerClasses as $controllerClass){
            $this->registerController($controllerClass);
        }
    }

}
