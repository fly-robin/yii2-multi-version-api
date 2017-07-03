<?php


namespace app\controllers;


use yii\base\Controller;

class Apic1Controller extends Controller
{

    public function actions()
    {
        return $this->getCurrentVersionApiActions();
    }

    /**
     * 获取匹配当前客户端版本的接口actions映射
     */
    private function getCurrentVersionApiActions()
    {
        //此处默认实际开发中只有客户端大版本更新时，才增加接口版本
        $api_version = (int) \Yii::$app->getRequest()->headers->get('api-version');
        $actions = $this->getActionsByApiVersion($api_version);

        return $actions;
    }

    /**
     * 获取当前
     *
     * @param $api_version
     * @return array|null
     */
    private function getActionsByApiVersion($api_version)
    {
        //各版本actions映射配置见 config/api_actions.php
        $actions_config = \Yii::$app->params['api_actions'];
        //只允许请求经系统配置过的api版本，系统只指定的才允许解析
        if (empty($actions_config[$api_version])) {
            return null;
        }
        $actions = [];
        foreach ((array) $actions_config as $k => $item) {
            //仅将小于当前请求版本的actions配置与当前版本的配置进行合并，新版本的配置将覆盖老版本的配置，以实现接口actions映射配置的增量更新
            if ($k > $api_version) {
                break;
            }
            $actions = array_merge($actions, $item);
        }

        return $actions;
    }

}