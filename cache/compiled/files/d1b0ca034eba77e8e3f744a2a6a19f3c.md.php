<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/dmdExhibitions/user/pages/10.forms/embedme/testForm.md',
    'modified' => 1626734496,
    'data' => [
        'header' => [
            'title' => 'embedME',
            'taxonomy' => [
                'category' => 'blog',
                'tag' => [
                    0 => 'dmd300',
                    1 => 'fall2019'
                ],
                'theme' => [
                    0 => 'futures'
                ],
                'type' => [
                    0 => 'exhibition',
                    1 => 'theme'
                ]
            ],
            'username' => '',
            'images' => [
                'comingsoon.jpg' => [
                    'name' => 'comingsoon.jpg',
                    'type' => 'image/jpeg',
                    'size' => 27927,
                    'path' => 'user/pages/10.forms/embedme/comingsoon.jpg'
                ],
                'starsprout.png' => [
                    'name' => 'starsprout.png',
                    'type' => 'image/png',
                    'size' => 8747,
                    'path' => 'user/pages/10.forms/embedme/starsprout.png'
                ]
            ],
            'author' => 'morgan',
            'audio' => [
                
            ]
        ],
        'frontmatter' => 'title: embedME
taxonomy:
    category: blog
    tag:
        - dmd300
        - fall2019
    theme:
        - futures
    type:
        - exhibition
        - theme
username: \'\'
images:
    comingsoon.jpg:
        name: comingsoon.jpg
        type: image/jpeg
        size: 27927
        path: user/pages/10.forms/embedme/comingsoon.jpg
    starsprout.png:
        name: starsprout.png
        type: image/png
        size: 8747
        path: user/pages/10.forms/embedme/starsprout.png
author: morgan
audio: {  }',
        'markdown' => '![starsprout](starsprout.png \'logo\')
![comingsoon](comingsoon.jpg \'coming soon\')
'
    ]
];
