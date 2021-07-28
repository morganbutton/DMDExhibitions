<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/1.dmd-exhibitions/blog.md',
    'modified' => 1627066083,
    'data' => [
        'header' => [
            'title' => 'DMD Exhibitions',
            'content' => [
                'items' => [
                    0 => [
                        '@taxonomy' => [
                            'type' => [
                                0 => 'exhibition'
                            ]
                        ]
                    ]
                ],
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true,
                'limit' => 5000
            ]
        ],
        'frontmatter' => 'title: "DMD Exhibitions"
content:
  items:
    - "@taxonomy":
        type:
          - exhibition

  order:
    by: date
    dir: desc
  pagination: true
  url_taxonomy_filters: true
  limit: 5000',
        'markdown' => '#DMD Exhibitions
'
    ]
];
