<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/1 001
 * Time: 18:32
 */

namespace app\controllers\v1;

use yii\base\Action;

class UserAction extends Action
{
    public function run()
    {
        echo $this->getUniqueId();
    }

    private function apiV1()
    {

    }

    private function api()
    {

    }

}