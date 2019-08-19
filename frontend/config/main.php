<?php
    $params = array_merge(
        require __DIR__ . '/../../common/config/params.php',
        require __DIR__ . '/../../common/config/params-local.php',
        require __DIR__ . '/params.php',
        require __DIR__ . '/params-local.php'
    );
    
    return [
        'id'                  => 'app-frontend',
        'basePath'            => dirname(__DIR__),
        'bootstrap'           => ['log'],
        'controllerNamespace' => 'frontend\controllers',
        'modules'             => [],
        'components'          => [
            'request'      => [
                'baseUrl'   => '',
                'csrfParam' => '_csrf-frontend',
            ],
            'user'         => [
                // 'identityClass' => 'common\models\User',
//                'class'           => 'mdm\admin\models\User',
                'identityClass'   => 'mdm\admin\models\User',
                'loginUrl'        => ['admin/user/login'],
                'enableAutoLogin' => true,
                'identityCookie'  => ['name' => '_identity-frontend', 'httpOnly' => true],
            ],
            'session'      => [
                // this is the name of the session cookie used for login on the frontend
                'name' => 'advanced-frontend',
            ],
            'log'          => [
                'traceLevel' => YII_DEBUG ? 3 : 0,
                'targets'    => [
                    [
                        'class'  => 'yii\log\FileTarget',
                        'levels' => ['error', 'warning'],
                    ],
                ],
            ],
            'errorHandler' => [
                'errorAction' => 'site/error',
            ],
            'urlManager'   => [
                'enablePrettyUrl' => true,
                'showScriptName'  => false,
                'rules'           => include_once '_urlManager.php',
            ],
            'db'           => require(__DIR__ . '/../../common/config/db' . (YII_ENV == 'dev' ? '.dev' : '') . '.php'),
        ],
        'params'              => $params,
    ];
