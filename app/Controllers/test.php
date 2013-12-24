<?php if(!defined('SYSPATH')) die('Access denied');

class Test extends Main
{
    public function action_index()
    {
        $this->out('test.php');
    }
}