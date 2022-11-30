<?php

function controllersAutoload($className)
{
    require "controllers/'{$className}'.php";
}

spl_autoload_register('controllersAutoload');