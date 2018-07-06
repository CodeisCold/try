<?php
/**
 * Created by IntelliJ IDEA.
 * User: 70906
 * Date: 2018/5/25
 * Time: 8:38
 */
require '../config.php';
require '../common_functions.php';
$logf = fopen(ROOT_DIR . 'logf.log', 'a');
flock($logf, LOCK_EX);//只是测试用，并发上是有问题的
logf($_SERVER);
logf([
    'get' => $_GET,
    'post' => $_POST,
    'files' => $_FILES
]);
$a = 'its a variable';

try {
    $c = new PDO('mysql:host=172.17.0.3;port=3306', 'root', '123456');
    var_dump($c);die;
} catch (Exception $e) {
    logf($e->getMessage());
}
view('login.php', ['get' => $a]);