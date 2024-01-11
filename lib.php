<?php

function dd(...$args)
{
    echo "<pre>";
    var_dump(...$args);
    echo "</pre>";
    die();
}

function require_page($path)
{
    require_once $path;
    exit(0);
}

function _404()
{
    http_response_code(404);
    echo "<h1>404 Page Not Found</h1>";
    exit(0);
}
