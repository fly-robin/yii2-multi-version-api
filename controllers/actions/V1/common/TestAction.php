<?php
namespace app\controllers\actions\V1\common;

use yii\base\Action;

class TestAction extends Action
{
    public function run()
    {
        echo 'i am api-v1';
    }


}