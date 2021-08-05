<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/dmd-exhibitions/cyborgs-project-exhibition/blog.md',
    'modified' => 1628123780,
    'data' => [
        'header' => [
            'title' => 'CYBORGS PROJECT EXHIBITION Fall 2020',
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
            ]
        ],
        'frontmatter' => 'title: \'CYBORGS PROJECT EXHIBITION Fall 2020\'
content:
    items:
        - \'@self.children\'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true',
        'markdown' => '![dmd300-fa20-exhibition](../../exhibitionimages/cyborgs.jpg?cropResize=300,300 "dmd300-fa20-exhibition")

===

###Cyborgs : Fall2020'
    ]
];
