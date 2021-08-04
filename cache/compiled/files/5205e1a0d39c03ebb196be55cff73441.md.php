<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/10.projects/test/testForm.md',
    'modified' => 1628008677,
    'data' => [
        'header' => [
            'title' => 'test',
            'taxonomy' => [
                'category' => 'blog',
                'tag' => [
                    0 => 'philly'
                ]
            ],
            'username' => '',
            'images' => [
                'comingsoon.jpg' => [
                    'name' => 'comingsoon.jpg',
                    'type' => 'image/jpeg',
                    'size' => 27927,
                    'path' => 'user/pages/10.projects/test/comingsoon.jpg'
                ]
            ],
            'author' => 'mo',
            'video embed' => '[plugin:youtube](https://www.youtube.com/watch?v=BK8guP9ov2U)',
            'audio embed' => NULL,
            'audio' => [
                
            ]
        ],
        'frontmatter' => 'title: test
taxonomy:
    category: blog
    tag:
        - philly
username: \'\'
images:
    comingsoon.jpg:
        name: comingsoon.jpg
        type: image/jpeg
        size: 27927
        path: user/pages/10.projects/test/comingsoon.jpg
author: mo
\'video embed\': \'[plugin:youtube](https://www.youtube.com/watch?v=BK8guP9ov2U)\'
\'audio embed\': null
audio: {  }',
        'markdown' => '![imagename](comingsoon.jpg \'short description\')'
    ]
];
