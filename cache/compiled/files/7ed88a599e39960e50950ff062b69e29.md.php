<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/08.capstone/01.dmd300/blog.md',
    'modified' => 1627066083,
    'data' => [
        'header' => [
            'title' => 'DMD300',
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
        'frontmatter' => 'title: DMD300
content:
  items:
    - "@self.children"
  limit: 5000
  order:
    by: date
    dir: desc
  pagination: true
  url_taxonomy_filters: true',
        'markdown' => '![DMD300](../../imagefolder/dmd300.jpg?lightbox&resize=400)

===
###DMD 300 Project Exhibitions
'
    ]
];
