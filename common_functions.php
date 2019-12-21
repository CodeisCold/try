<?php

function view($path, $params) {
    extract($params);
    require ROOT_DIR . 'views/' . $path;
}

function logf($text) {
    $path = ROOT_DIR . 'logf.log';
    file_put_contents($path,  date('Y-m-d H:i:s') . ': ' . var_export($text, true) . "\n", FILE_APPEND);
}