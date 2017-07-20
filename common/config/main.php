<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn'   =>  'mysql:host=127.0.0.1;dbname=testshop',
            'username' => 'root',
            'password' => '',
            'charset'  => 'utf8',
            'tablePrefix' => 'yii_',
        ],
    ],
];
