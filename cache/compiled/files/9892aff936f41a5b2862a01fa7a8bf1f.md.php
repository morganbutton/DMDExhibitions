<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/dmd-exhibitions/cyborgs-project-exhibition/blog.md',
    'modified' => 1628124249,
    'data' => [
        'header' => [
            'title' => 'CYBORGS PROJECT EXHIBITION FALL 2020',
            'content' => [
                'items' => [
                    0 => [
                        '@taxonomy' => [
                            'tag' => [
                                0 => 'fall2020',
                                1 => 'dmd300',
                                2 => 'cyborgs'
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
                    1 => 'cyborgs'
                ]
            ]
        ],
        'frontmatter' => 'title: "CYBORGS PROJECT EXHIBITION FALL 2020"
content:
  items:
    - "@taxonomy":
        tag:
          - fall2020
          - dmd300
          - cyborgs
  limit: 5000
  order:
    by: date
    dir: desc
  pagination: true
  url_taxonomy_filters: true
taxonomy:
  tag:
    - dmd300
    - cyborgs',
        'markdown' => '![dmd300-fa20-exhibition](../../exhibitionimages/cyborgs.jpg?cropResize=300,300 "dmd300-fa20-exhibition")

===

###Cyborgs : Fall2020
'
    ]
];
