<?php

return [
    'mailer' => [
        'class' => 'yii\swiftmailer\Mailer',
        'messageConfig' => [
            'from' => [
                'xxxx@qq.com' => '用户名',
            ]
        ],
        'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.qq.com',
            'username' => 'xxxx@qq.com',
            'password' => 'yourpasswd',
            'port' => '587',
            'encryption' => 'tls',
        ],
    ]
];
