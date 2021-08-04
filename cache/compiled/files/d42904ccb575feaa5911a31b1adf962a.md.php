<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/08.capstone/01.dmd300/dmd300-spring2020/blog.md',
    'modified' => 1628008676,
    'data' => [
        'header' => [
            'title' => 'DMD300:Spring2020',
            'content' => [
                'items' => [
                    0 => [
                        '@taxonomy' => [
                            'tag' => [
                                0 => 'student',
                                1 => 'dmd',
                                2 => 'capstone'
                            ]
                        ]
                    ]
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
                    0 => 'dmd300',
                    1 => 'spring2020'
                ],
                'type' => [
                    0 => 'exhibition',
                    1 => 'capstone'
                ]
            ]
        ],
        'frontmatter' => 'title: "DMD300:Spring2020"
content:
  items:
    - "@taxonomy":
        tag:
          - student
          - dmd
          - capstone
  limit: 5000
  order:
    by: date
    dir: desc
  pagination: true
  url_taxonomy_filters: true
taxonomy:
  tag:
    - dmd300
    - spring2020
  type:
    - exhibition
    - capstone',
        'markdown' => '![DMD300:Spring2020](../../../imagefolder/capstoneSpring2020.png?lightbox&resize=400)

===

###DMD400 : Fall2019
'
    ]
];
