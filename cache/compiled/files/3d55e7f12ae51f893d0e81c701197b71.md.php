<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/testpdf/blog.md',
    'modified' => 1628127454,
    'data' => [
        'header' => [
            'title' => 'mo',
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
            'media_order' => 'MorganButtonResume.pdf'
        ],
        'frontmatter' => 'title: mo
content:
    items:
        - \'@self.children\'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
media_order: MorganButtonResume.pdf',
        'markdown' => '[MorganButtonResume.pdf](MorganButtonResume.pdf)'
    ]
];
