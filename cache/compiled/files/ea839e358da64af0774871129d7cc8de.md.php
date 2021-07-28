<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/09.themes/blog.md',
    'modified' => 1627066083,
    'data' => [
        'header' => [
            'title' => 'Themes',
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
        'frontmatter' => 'title: Themes
content:
  items:
    - "@self.children"
  limit: 5000
  order:
    by: date
    dir: desc
  pagination: true
  url_taxonomy_filters: true',
        'markdown' => '![THEME PROJECT EXHIBITIONS](../../imagefolder/cyborgs.jpg?lightbox&resize=400)

===
###THEME PROJECT EXHIBITIONS
'
    ]
];
