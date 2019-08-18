<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=scratch',
    'username' => 'root',
//    'password' => file_get_contents(__DIR__.'/.localdbpassword'),
    'password' => '',
    'charset' => 'utf8',
//  'tablePrefix' => 'web2b_',

    'enableSchemaCache' => false,
    'schemaCacheDuration' => 3600,
    'schemaCache' => 'cache',
];
