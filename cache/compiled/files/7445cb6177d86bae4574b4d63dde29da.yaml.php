<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/dmdExhibitions/user/config/plugins/form.yaml',
    'modified' => 1626146928,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'inline_css' => true,
        'refresh_prevention' => false,
        'client_side_validation' => true,
        'inline_errors' => false,
        'files' => [
            'multiple' => true,
            'limit' => 10,
            'destination' => 'self@',
            'avoid_overwriting' => false,
            'random_name' => false,
            'filesize' => '512MB',
            'accept' => [
                0 => 'image/*',
                1 => 'video/*'
            ]
        ],
        'recaptcha' => [
            'version' => '2-checkbox',
            'theme' => 'light',
            'site_key' => NULL,
            'secret_key' => NULL
        ]
    ]
];
