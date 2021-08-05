<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/dmd-exhibitions/capstone-project-exhibition/blog.md',
    'modified' => 1628122490,
    'data' => [
        'header' => [
            'title' => 'CAPSTONE PROJECT EXHIBITION FALL 2020',
            'content' => [
                'items' => [
                    0 => [
                        '@taxonomy' => [
                            'tag' => [
                                0 => 'fall2020',
                                1 => 'dmd400',
                                2 => 'capstone'
                            ]
                        ]
                    ]
                ],
                'limit' => 5000,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'media_order' => 'dmd400-fa20-exhibition.jpg'
        ],
        'frontmatter' => 'title: \'CAPSTONE PROJECT EXHIBITION FALL 2020\'
content:
    items:
        -
            \'@taxonomy\':
                tag:
                    - fall2020
                    - dmd400
                    - capstone
    limit: 5000
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
media_order: dmd400-fa20-exhibition.jpg',
        'markdown' => '![dmd400-fa20-exhibition](../../exhibitionimages/dmd400-fa20-exhibition.jpg?cropResize=300,300 "dmd400-fa20-exhibition")

===

###DMD400 : Fall2020
'
    ]
];
