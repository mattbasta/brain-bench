<?php

require_once __DIR__ . '/../vendor/box/brainy/src/Brainy/Smarty.class.php';

function render($templatePath)
{
    $smarty = new Smarty();
    $smarty->setCompileDir(__DIR__ . '/../compiled/');
    $smarty->setTemplateDir($templatePath);
    $smarty->compile_id = 'brainy2';
    return $smarty->fetch('main.tpl');
}
