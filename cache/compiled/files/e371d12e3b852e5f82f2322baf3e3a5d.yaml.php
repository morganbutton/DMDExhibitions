<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/accounts/ajbeyer.yaml',
    'modified' => 1626891854,
    'data' => [
        'username' => 'ajBeyer',
        'state' => 'enabled',
        'email' => 'aj.beyer@gmail.com',
        'fullname' => 'AJ',
        'title' => 'guest',
        'language' => 'en',
        'content_editor' => 'default',
        'twofa_enabled' => false,
        'twofa_secret' => 'RCS6Z4DY5U76YPRDJLBT332VVYMQOLIZ',
        'avatar' => [
            
        ],
        'hashed_password' => '$2y$10$nrp1LbsZ4fjeP0NGJ.IJyethoRunRqc6ws.xi3ABOmZ6261vgJLnG',
        'access' => [
            'site' => [
                'login' => true
            ],
            'admin' => [
                'login' => true,
                'super' => true,
                'cache' => true,
                'configuration' => true,
                'pages' => true,
                'maintenance' => true,
                'statistics' => true,
                'plugins' => true,
                'themes' => true,
                'tools' => true,
                'users' => true,
                'flex-objects' => true
            ]
        ]
    ]
];
