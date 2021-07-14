<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/dmdExhibitions/user/pages/10.forms/blog.md',
    'modified' => 1626228890,
    'data' => [
        'header' => [
            'title' => 'ajax-test-form',
            'template' => 'form',
            'pageconfig' => [
                'parent' => '/blog',
                'include_username' => true,
                'overwrite_mode' => true
            ],
            'pagefrontmatter' => [
                'template' => 'blog',
                'title' => 'My new Blog post',
                'taxonomy' => [
                    'category' => 'blog',
                    'tag' => [
                        0 => 'student',
                        1 => 'formSubmit'
                    ]
                ]
            ],
            'form' => [
                'name' => 'blog.md',
                'refresh_prevention' => true,
                'ajax' => true,
                'fields' => [
                    0 => [
                        'name' => 'author',
                        'label' => 'Author',
                        'type' => 'text'
                    ],
                    1 => [
                        'name' => 'title',
                        'label' => 'Post Title',
                        'type' => 'text'
                    ],
                    2 => [
                        'name' => 'taxonomy.tag',
                        'label' => 'Tags (comma separated)',
                        'type' => 'text'
                    ],
                    3 => [
                        'name' => 'taxonomy.exhibitionType',
                        'label' => 'exhibition type (comma separated)',
                        'type' => 'text'
                    ],
                    4 => [
                        'name' => 'content',
                        'label' => 'Post Content',
                        'type' => 'textarea',
                        'size' => 'long',
                        'classes' => 'editor'
                    ],
                    5 => [
                        'name' => 'images',
                        'label' => 'Images to upload',
                        'type' => 'file',
                        'multiple' => true,
                        'accept' => [
                            0 => 'image/*'
                        ]
                    ],
                    6 => [
                        'name' => 'video',
                        'label' => 'videos to upload',
                        'type' => 'file',
                        'multiple' => true,
                        'accept' => [
                            0 => 'video/*'
                        ]
                    ],
                    7 => [
                        'name' => 'audio',
                        'label' => 'audio to upload',
                        'type' => 'file',
                        'multiple' => true,
                        'accept' => [
                            0 => 'audio/*'
                        ]
                    ]
                ],
                'buttons' => [
                    0 => [
                        'type' => 'submit',
                        'value' => 'Submit'
                    ]
                ],
                'process' => [
                    0 => [
                        'add_page' => true
                    ],
                    1 => [
                        'redirect' => '/forms'
                    ]
                ]
            ],
            'process' => [
                'markdown' => true,
                'twig' => true
            ]
        ],
        'frontmatter' => 'title: ajax-test-form
template: form
pageconfig:
  parent: /blog
  include_username: true
  overwrite_mode: true
pagefrontmatter:
  template: blog
  title: "My new Blog post"
  taxonomy:
    category: blog
    tag:
      - student
      - formSubmit
form:
  name: blog.md
  refresh_prevention: true
  ajax: true
  fields:
    - name: author
      label: Author
      type: text
    - name: title
      label: "Post Title"
      type: text
    - name: taxonomy.tag
      label: "Tags (comma separated)"
      type: text
    - name: taxonomy.exhibitionType
      label: "exhibition type (comma separated)"
      type: text
    - name: content
      label: "Post Content"
      type: textarea
      size: long
      classes: editor
    - name: images
      label: "Images to upload"
      type: file
      multiple: true
      accept:
        - "image/*"
    - name: video
      label: "videos to upload"
      type: file
      multiple: true
      accept:
        - "video/*"
    - name: audio
      label: "audio to upload"
      type: file
      multiple: true
      accept:
        - "audio/*"
  buttons:
    - type: submit
      value: Submit
  process:
    - add_page: true
    - redirect: /forms
process:
  markdown: true
  twig: true',
        'markdown' => '## New Blog Post

Write your blog post:
'
    ]
];
