<?php
/**
 * 入口
 *
 *
 *
 * by 33hao 好商城V3  www.haoid.cn 开发
 */

//autoload
require __DIR__ . '/vendor/autoload.php';

//Dotenv & make getenv() available
$overwrite = true;
(new josegonzalez\Dotenv\Loader(__DIR__ . '/.env'))
              ->parse()
              ->putenv($overwrite); // Throws LogicException if ->parse() is not called first

$site_url = strtolower('http://'.$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/index.php')).'/shop/index.php');
//@header('Location: '.$site_url);
include('shop/index.php');

