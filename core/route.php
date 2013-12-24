<?php if(!defined('SYSPATH')) die('Access denied');

class Route
{
    //  Request uri
    private static $_uri = array();
    
    public static function run()
    {
        self::$_uri = explode('/', substr($_SERVER['REQUEST_URI'], 1));
        $controller = array_shift(self::$_uri);
        
        if(empty($controller) || !preg_match('#^[a-zA-Z0-9-_]*$#', $controller))
        {
            array_unshift(self::$_uri, $controller);
            $controller = 'main';
        }
        
        self::_runController($controller);
    }
    
    private static function _runController($controller)
    {
        if(file_exists(CONTR_PATH . $controller .'.php'))
        {
            require_once CONTR_PATH . $controller .'.php';
            
            $controller = ucfirst(strtolower($controller));
            $controller = new $controller();
        }
        else
        {            
            $controller = new Main();
        }
        
        $method = 'action_'. strtolower(array_shift(self::$_uri));
        
        if(method_exists($controller, $method))
        {
            if(empty(self::$_uri))
            {
                $controller->$method();
            }
            else
            {
                call_user_func_array(array($controller, $method), self::$_uri);
            }
        }
        else
        {
            $controller->action_index();
        }
    }
}