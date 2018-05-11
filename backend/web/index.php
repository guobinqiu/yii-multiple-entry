<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/../../common/config/namespaces.php';

$config = require __DIR__ . '/../config/main.php';

(new yii\web\Application($config))->run();
