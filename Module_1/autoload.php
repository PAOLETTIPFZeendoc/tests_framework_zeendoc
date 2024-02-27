<?php

function Framework($classe)
{
    $classe = str_replace('\\', DIRECTORY_SEPARATOR, $classe);
    $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . $classe . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}
function Module($classe)
{
    $classe = str_replace('\\', DIRECTORY_SEPARATOR, $classe);
    $file = __DIR__ . DIRECTORY_SEPARATOR . $classe . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register("Framework");
spl_autoload_register("Module");
