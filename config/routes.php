<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/15
 * Time: 9:14
 */
return [
    'class' => 'yii\web\UrlManager',
    'enablePrettyUrl' => true,
    'enableStrictParsing' => true,
    'showScriptName' => false,
//    'suffix' => '.html',
    'rules' => [
//        [
//            'class' => 'yii\rest\UrlRule',
//            'controller' => ['v1/xc-user'],
//            'tokens'=>[
//                '{id}'=>'<id:\w+>'//使id支持字符串
//            ]
//        ],
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => ['product'],
            'tokens'=>[
                '{id}'=>'<id:\d+>'//使id支持字符串
            ]
        ],
        '<controller:(get|user)>/<page:\d+>' => '<controller>/index',
        '<controller:(get|users)>/<page:\d+>' => 'user/index',
        '<controller:(get|user)>/<action:(edit)>/<id:\d+>' => '<controller>/edit',
        '<controller:(get|user)>/<action:(info)>/<id:\d+>' => '<controller>/info',
        '<controller:(get|res)>/<id:\d+>' => '<controller>/abc',
        'v2/<controller:(get|res)>/<id:\d+>' => 'v2/<controller>/abc',
        'v2/<controller:(get|res)>/<id:\d+>' => 'v2/<controller>/abc',
//        '<controller:(get|user)>/<page:\d+>/<action:(users)>' => '<controller>/index',
//        '<controller:(post|comment)>/<id:\d+>/<action:(create|update|delete)>' =>'<controller>/<action>',
//        '<controller:(post|comment)>/<id:\d+>' => '<controller>/read',
//        '<controller:(post|comment)>s' => '<controller>/list',
        '<modules>/<controller>/<action>' => '<modules>/<controller>/<action>',
        '<controller>/<action>' => '<controller>/<action>',
        '/'=>'site/index',
    ]
];
