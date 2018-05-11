<?php

$params = require __DIR__ . '/params.php';

return yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../../common/config/main.php',
    [
        'basePath' => dirname(__DIR__),
        'id' => 'backend',
        'controllerNamespace' => 'backend\controllers',
        'components' => [
            'urlManager' => [
                'enablePrettyUrl' => true,
                'showScriptName' => false,
            ],
        ]
    ]
);