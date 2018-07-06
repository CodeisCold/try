<?php

function view($path, $params) {
    extract($params);
    require ROOT_DIR . 'views/' . $path;
}

function logf($text) {
    global $logf;
    fwrite($logf,  date('Y-m-d H:i:s') . ': ' . var_export($text, true) . "\n");
}