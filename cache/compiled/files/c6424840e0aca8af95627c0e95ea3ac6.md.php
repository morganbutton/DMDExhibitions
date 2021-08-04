<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/08.capstone/blog.md',
    'modified' => 1624426782,
    'data' => [
        'header' => [
            'title' => 'Capstone',
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
        'frontmatter' => 'title: Capstone
content:
  items:
    - "@self.children"
  limit: 5000
  order:
    by: date
    dir: desc
  pagination: true
  url_taxonomy_filters: true',
        'markdown' => '![CAPSTONE PROJECT EXHIBITIONS](../../imagefolder/capstoneFall2020.jpg?lightbox&resize=400)

===

###CAPSTONE PROJECT EXHIBITIONS
'
    ]
];
