<?php

require_once __DIR__ . '/../libs/brainy/src/Brainy/Brainy.php';


function render($templatePath)
{
    $smarty = new \Box\Brainy\Brainy();
    $smarty->setCompileDir(__DIR__ . '/../compiled/');
    $smarty->setTemplateDir($templatePath);
    $smarty->compile_id = 'brainy3';
    return $smarty->fetch('main.tpl');
}
