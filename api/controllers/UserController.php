<?php

namespace api\controllers;

use common\models\User;
use Yii;
use yii\filters\ContentNegotiator;
use yii\filters\RateLimiter;
use yii\filters\VerbFilter;
use yii\rest\Controller;
use yii\web\Response;

class UserController extends Controller
{
    public function behaviors()
    {
        return [
            'contentNegotiator' => [
                'class' => ContentNegotiator::className(),
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
//                    'application/xml' => Response::FORMAT_XML,
                ],
            ],
            'verbFilter' => [
                'class' => VerbFilter::className(),
                'actions' => $this->verbs(),
            ],
//            'authenticator' => [
//                'class' => CompositeAuth::className(),
//            ],
//            'rateLimiter' => [
//                'class' => RateLimiter::className(),
//            ],
        ];
    }

    public function actionIndex()
    {
        $models = User::find()->all();
        return $models;
    }
}
