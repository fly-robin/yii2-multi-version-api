<?php
/**
 * api v1
 */

namespace app\controllers;

use yii\rest\Controller;

class ApiV1Controller extends Controller
{

    public function actions()
    {
        return [
            'test' => 'app\controllers\actions\common\V1\TestAction',
        ];
    }

}