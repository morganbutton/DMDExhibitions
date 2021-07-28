<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/09.themes/02.futures/blog.md',
    'modified' => 1627066083,
    'data' => [
        'header' => [
            'title' => 'Futures',
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 5,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'taxonomy' => [
                'type' => [
                    0 => 'theme'
                ]
            ]
        ],
        'frontmatter' => 'title: Futures
content:
    items:
        - \'@self.children\'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
taxonomy:
    type:
        - theme',
        'markdown' => '![FUTURES PROJECT EXHIBITIONS](../../imagefolder/futuresFall2019.png?lightbox&resize=400)

===

###FUTURES PROJECT EXHIBITIONS
'
    ]
];
