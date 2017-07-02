<?php
/**
 * api v2
 */

namespace app\controllers;

use Yii;
use yii\rest\Controller;
use yii\web\HeaderCollection;

class ApiV2Controller extends Controller
{

    public function actions()
    {
        return [
            //V2的user接口没有变动，依旧沿用V1中的UserAction
            'user' => 'app\controllers\actions\user\V1\UserAction',
            //V2中的test接口发生变动，则映射到V2目录下
            'test' => 'app\controllers\actions\common\V2\TestAction',
        ];
    }

    public function actionV2()
    {
        echo 'i am v2 ';
    }
}