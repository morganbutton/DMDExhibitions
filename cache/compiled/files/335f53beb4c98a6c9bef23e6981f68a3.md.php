<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/08.capstone/02.dmd400/dmd400-fall2019/blog.md',
    'modified' => 1627066083,
    'data' => [
        'header' => [
            'title' => 'DMD400:Fall2019',
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
            ],
            'taxonomy' => [
                'tag' => [
                    0 => 'dmd400',
                    1 => 'fall2019'
                ],
                'type' => [
                    0 => 'exhibition',
                    1 => 'capstone'
                ]
            ]
        ],
        'frontmatter' => 'title: "DMD400:Fall2019"
content:
  items:
    - "@self.children"
  limit: 5000
  order:
    by: date
    dir: desc
  pagination: true
  url_taxonomy_filters: true
taxonomy:
  tag:
    - dmd400
    - fall2019
  type:
    - exhibition
    - capstone',
        'markdown' => '![DMD400:Fall2019](../../../imagefolder/capstoneFall2019.png?lightbox&resize=400)

===

###DMD400 : Fall2019
'
    ]
];
