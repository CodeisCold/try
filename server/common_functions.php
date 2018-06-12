<?php

function view($path, $params) {
    extract($params);
    require ROOT_DIR . 'views/' . $path;
}

function logf($text) {
    file_put_contents(ROOT_DIR . 'logf.log',  date('Y-m-d H:i:s') . ': ' . var_export($text, true) . "\n", FILE_APPEND | LOCK_EX);
}