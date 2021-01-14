<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => env('DATABASE_DSN'),
            'username' => env('DATABASE_USERNAME'),
            'password' => env('DATABASE_PASSWORD'),
            'charset' => env('DATABASE_CHARSET', 'utf8mb4'),
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => env('MAIL_HOST'),
                'port' => env('MAIL_PORT'),
                'username' => env('MAIL_USERNAME'),
                'password' => env('MAIL_PASSWORD'),
                'encryption' => env('MAIL_ENCRYPTION'),
            ],
            'messageConfig' => [
                'charset' => 'UTF-8',
                'from' => [env('MAIL_SENDER_EMAIL') => env('MAIL_SENDER_NAME')],
            ],
        ],
    ],
];
