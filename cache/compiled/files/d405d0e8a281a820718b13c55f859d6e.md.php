<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/dmdExhibitions/user/pages/09.themes/01.cyborgs/dmd300-fall2020/blog.md',
    'modified' => 1626145043,
    'data' => [
        'header' => [
            'title' => 'DMD300:Fall2020',
            'taxonomy' => [
                'tag' => [
                    0 => 'fall2020',
                    1 => 'dmd300'
                ],
                'theme' => [
                    0 => 'cyborgs'
                ],
                'type' => [
                    0 => 'exhibition',
                    1 => 'theme'
                ]
            ],
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
            ]
        ],
        'frontmatter' => 'title: \'DMD300:Fall2020\'
taxonomy:
    tag:
        - fall2020
        - dmd300
    theme:
        - cyborgs
    type:
        - exhibition
        - theme
content:
    items:
        - \'@self.children\'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true',
        'markdown' => '![CYBORGS PROJECT EXHIBITIONS](../../../imagefolder/cyborgsFall2020.jpg?lightbox&resize=400)

===

###DMD300:Fall2020
'
    ]
];
