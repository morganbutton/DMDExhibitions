<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/dmd-exhibitions/capstone-project-exhibition-spring-2020/blog.md',
    'modified' => 1628125040,
    'data' => [
        'header' => [
            'title' => 'CAPSTONE PROJECT EXHIBITION SPRING 2020',
            'content' => [
                'items' => [
                    0 => [
                        '@taxonomy' => [
                            'tag' => [
                                0 => 'spring2020',
                                1 => 'dmd400',
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
                    0 => 'dmd400',
                    1 => 'capstone'
                ]
            ]
        ],
        'frontmatter' => 'title: "CAPSTONE PROJECT EXHIBITION SPRING 2020"
content:
  items:
    - "@taxonomy":
        tag:
          - spring2020
          - dmd400
          - capstone
  limit: 5000
  order:
    by: date
    dir: desc
  pagination: true
  url_taxonomy_filters: true
taxonomy:
  tag:
    - dmd400
    - capstone',
        'markdown' => '![dmd400-sp20-exhibition](../../exhibitionimages/CAPSTONESPRING2020.png?cropResize=300,300 "dmd400-sp20-exhibition")

===

###Capstone : Spring2020
'
    ]
];
