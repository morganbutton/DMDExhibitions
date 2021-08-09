<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/dmd-exhibitions/blog.md',
    'modified' => 1628121990,
    'data' => [
        'header' => [
            'title' => 'DMD Exhibitions',
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 5000,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ]
        ],
        'frontmatter' => 'title: "DMD Exhibitions"
content:
  items:
    - "@self.children"
  limit: 5000
  order:
    by: date
    dir: desc
  pagination: true
  url_taxonomy_filters: true',
        'markdown' => '#DMD Exhibitions
'
    ]
];
