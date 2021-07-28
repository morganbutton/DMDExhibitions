<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/10.projects/hipster/testForm.md',
    'modified' => 1627066083,
    'data' => [
        'header' => [
            'title' => 'hipster',
            'taxonomy' => [
                'category' => 'blog',
                'tag' => [
                    0 => 'dmd300'
                ]
            ],
            'username' => '',
            'images' => [
                'comingsoon.jpg' => [
                    'name' => 'comingsoon.jpg',
                    'type' => 'image/jpeg',
                    'size' => 27927,
                    'path' => 'user/pages/10.projects/hipster/comingsoon.jpg'
                ]
            ],
            'author' => 'morgan',
            'audio' => [
                
            ]
        ],
        'frontmatter' => 'title: hipster
taxonomy:
    category: blog
    tag:
        - dmd300
username: \'\'
images:
    comingsoon.jpg:
        name: comingsoon.jpg
        type: image/jpeg
        size: 27927
        path: user/pages/10.projects/hipster/comingsoon.jpg
author: morgan
audio: {  }',
        'markdown' => '[plugin:youtube](https://www.youtube.com/watch?v=BK8guP9ov2U)
![imagename](comingsoon.jpg \'short description\')'
    ]
];
