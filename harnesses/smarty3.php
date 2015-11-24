<?php

require_once __DIR__ . '/../vendor/smarty/smarty/libs/Smarty.class.php';

function render($templatePath)
{
    $smarty = new Smarty();
    $smarty->setCompileDir(__DIR__ . '/../compiled/');
    $smarty->setTemplateDir($templatePath);
    $smarty->compile_id = 'smarty3';
    return $smarty->fetch('main.tpl');
}
