<?php
    return [
        'aliases'    => [
            '@bower' => '@vendor/bower-asset',
            '@npm'   => '@vendor/npm-asset',
        ],
        'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
        'modules' => [
            'admin' => [
                'class' => 'mdm\admin\Module',
            ]
        ],
        'components' => [
            'cache' => [
                'class' => 'yii\caching\FileCache',
            ],
            'authManager' => [
                'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\DbManager' OR 'yii\rbac\PhpManager'
            ],
            'db'    => require(__DIR__ . '/db' . (YII_ENV == 'dev' ? '.dev' : '') . '.php'),
        ],
    ];
