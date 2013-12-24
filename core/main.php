<?php if(!defined('SYSPATH')) die('Access denied');

class Main
{
    /**
    * Default action
    * 
    */
    public function action_index()
    {
        $this->out('main.php');
    }
    
    
    /**
    * Include Views file
    * 
    * @param string View filename
    * @param bool Nested view
    */
    public function out($tpl, $nested = false)
    {
        if(!$nested)
        {
            require_once VIEWS_PATH .'main.php';
        }
        else
        {
            require_once VIEWS_PATH . $tpl;
        }
    }
}