<?php

spl_autoload_register(function ($class) {
    $classPath = realpath(__DIR__ . "/" . $class . ".php");

    if (!file_exists($classPath)) {
        throw new Exception("File Not exist");
    }

    require_once $classPath;
});
