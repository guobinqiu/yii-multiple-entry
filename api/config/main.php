<?php

$params = require __DIR__ . '/params.php';

return yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../../common/config/main.php',
    [
        'basePath' => dirname(__DIR__),
        'id' => 'frontend',
        'controllerNamespace' => 'api\controllers',
        'components' => [
            'urlManager' => [
                'enablePrettyUrl' => true,
                'showScriptName' => false,
                'rules' => [
                    ['class' => 'yii\rest\UrlRule', 'controller' => 'user'],
                ],
            ],
        ]
    ]
);