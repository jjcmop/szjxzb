<?php


// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/vendor/yiisoft/yii2/Yii.php';
require(__DIR__ . '/helpers/functions.php');
$config = require __DIR__ . '/config/web.php';
$config['defaultRoute'] = 'api/Scan_pay/index';
$config['components']['urlManager'] = [
//    'enablePrettyUrl' => true,
    "routeParam"=>"a",
//    "suffix"=>".html"
];
(new yii\web\Application($config))->run();
?>