<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/accounts/msc227.yaml',
    'modified' => 1625096998,
    'data' => [
        'state' => 'enabled',
        'email' => 'msc227@psu.edu',
        'fullname' => 'Michael Collins',
        'title' => 'admin',
        'language' => 'en',
        'content_editor' => 'default',
        'twofa_enabled' => false,
        'twofa_secret' => 'IMUS5WKXNXSSHDKD62GGYUF3QUEUV5W4',
        'avatar' => [
            
        ],
        'hashed_password' => '$2y$10$hJBUJeJRifHarKDrS42aAOTkMeZFhVLcBNoZ0UXpeXweyv8/WDrzu',
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
