<?php
/**
 * 最新版本的接口（H5/PC端使用）
 */

namespace app\controllers;

use Yii;
use yii\rest\Controller;
use yii\web\HeaderCollection;

class LatestController extends Controller
{
    /**
     * 前端接口应与最新变动的apiVx保持一致
     *
     * @return array
     */
    public function actions()
    {
        return [
            'user' => 'app\controllers\actions\V1\UserAction',
            'test' => 'app\controllers\actions\V2\TestAction',
        ];
    }

}