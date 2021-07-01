<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/dmdExhibitions/user/pages/09.themes/01.cyborgs/blog.md',
    'modified' => 1624426361,
    'data' => [
        'header' => [
            'title' => 'Cyborgs',
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
                'type' => [
                    0 => 'theme'
                ]
            ]
        ],
        'frontmatter' => 'title: Cyborgs
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
    type:
        - theme',
        'markdown' => '![CYBORGS PROJECT EXHIBITIONS](../../imagefolder/cyborgsFall2020.jpg?lightbox&resize=400)

===

###CYBORG PROJECT EXHIBITIONS
'
    ]
];
