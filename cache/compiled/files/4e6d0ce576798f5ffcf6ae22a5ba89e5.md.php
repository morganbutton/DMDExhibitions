<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/09.themes/01.cyborgs/dmd300-spring2020/blog.md',
    'modified' => 1627066083,
    'data' => [
        'header' => [
            'title' => 'DMD300:Spring2020',
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 5,
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
                'theme' => [
                    0 => 'cyborgs'
                ],
                'type' => [
                    0 => 'exhibition',
                    1 => 'theme'
                ]
            ]
        ],
        'frontmatter' => 'title: \'DMD300:Spring2020\'
content:
    items:
        - \'@self.children\'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
taxonomy:
    tag:
        - dmd300
        - spring2020
    theme:
        - cyborgs
    type:
        - exhibition
        - theme',
        'markdown' => '![CYBORGS PROJECT EXHIBITIONS](../../../imagefolder/cyborgsSpring2020.png?lightbox&resize=400)

===

###DMD300:Fall2020
'
    ]
];
