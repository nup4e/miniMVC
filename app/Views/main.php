<?php if(!defined('SYSPATH')) die('Access denied');?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Test MVC</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        
        #header{
            width: 100%;
            height: 50px;
            font-size: 24px;
            text-align: center;
            background-color: silver;
        }
    </style>
</head>
<body>
    <div id="header">Header</div>
    <?php 
        $this->out($tpl, true);
    ?>
</body>
</html>