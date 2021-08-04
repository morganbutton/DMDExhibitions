<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/08.capstone/02.dmd400/dmd400-fall2020/blog.md',
    'modified' => 1626145043,
    'data' => [
        'header' => [
            'title' => 'DMD400:Fall2020',
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
                    1 => 'fall2020'
                ],
                'type' => [
                    0 => 'exhibition',
                    1 => 'capstone'
                ]
            ]
        ],
        'frontmatter' => 'title: "DMD400:Fall2020"
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
    - fall2020
  type:
    - exhibition
    - capstone',
        'markdown' => '![DMD400:FALL2020](../../../imagefolder/capstoneFall2020.jpg?lightbox&resize=400)

===

###DMD400 : Fall2020
'
    ]
];
