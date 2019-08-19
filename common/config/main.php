<?php
    return [
        'aliases'    => [
            '@bower' => '@vendor/bower-asset',
            '@npm'   => '@vendor/npm-asset',
        ],
        'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
        'modules' => [
            'user' => [
                'class' => 'dektrium\user\Module',
            ],
            'rbac' => 'dektrium\rbac\RbacWebModule',
        ],
        'components' => [
            'cache' => [
                'class' => 'yii\caching\FileCache',
            ],
            'db'    => require(__DIR__ . '/db' . (YII_ENV == 'dev' ? '.dev' : '') . '.php'),
        ],
    ];
