<?php
/**
 * Created by IntelliJ IDEA.
 * User: 70906
 * Date: 2018/5/25
 * Time: 8:38
 */
require 'config.php';
require 'common_functions.php';
logf($_SERVER);
logf([
    'get' => $_GET,
    'post' => $_POST,
    'files' => $_FILES
]);
$a = 'its a variable';

view('login.php', ['get' => $a]);