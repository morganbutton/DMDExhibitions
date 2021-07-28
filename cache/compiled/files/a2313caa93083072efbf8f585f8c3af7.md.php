<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/08.capstone/02.dmd400/blog.md',
    'modified' => 1627066083,
    'data' => [
        'header' => [
            'title' => 'DMD400',
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
        'frontmatter' => 'title: DMD400
content:
  items:
    - "@self.children"
  limit: 5000
  order:
    by: date
    dir: desc
  pagination: true
  url_taxonomy_filters: true',
        'markdown' => '![DMD400](../../imagefolder/dmd400.jpg?lightbox&resize=400)

===
###DMD 400 Project Exhibitions
'
    ]
];
