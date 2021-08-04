<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/10.projects/fun/testForm.md',
    'modified' => 1628008676,
    'data' => [
        'header' => [
            'title' => 'fun',
            'taxonomy' => [
                'category' => 'blog',
                'tag' => [
                    0 => ''
                ]
            ],
            'username' => '',
            'images' => [
                'comingsoon.jpg' => [
                    'name' => 'comingsoon.jpg',
                    'type' => 'image/jpeg',
                    'size' => 27927,
                    'path' => 'user/pages/10.projects/fun/comingsoon.jpg'
                ]
            ],
            'author' => 'morgan',
            'audio' => [
                
            ]
        ],
        'frontmatter' => 'title: fun
taxonomy:
    category: blog
    tag:
        - \'\'
username: \'\'
images:
    comingsoon.jpg:
        name: comingsoon.jpg
        type: image/jpeg
        size: 27927
        path: user/pages/10.projects/fun/comingsoon.jpg
author: morgan
audio: {  }',
        'markdown' => '![imagename](comingsoon.jpg \'short description\')
[plugin:youtube](https://www.youtube.com/watch?v=BK8guP9ov2U)


What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'
    ]
];
