<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/dmdExhibitions/user/pages/10.forms/blog.md',
    'modified' => 1625634592,
    'data' => [
        'header' => [
            'title' => 'Add Blog Post',
            'template' => 'form',
            'pageconfig' => [
                'parent' => '/blog',
                'include_username' => true,
                'overwrite_mode' => true
            ],
            'pagefrontmatter' => [
                'template' => 'item',
                'title' => 'My new Blog post',
                'taxonomy' => [
                    'category' => 'blog',
                    'tag' => [
                        0 => 'journal',
                        1 => 'guest'
                    ]
                ]
            ],
            'form' => [
                'name' => 'add_page.blogpost',
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
                        'name' => 'content',
                        'label' => 'Post Content',
                        'type' => 'textarea',
                        'size' => 'long',
                        'classes' => 'editor'
                    ],
                    4 => [
                        'name' => 'images',
                        'label' => 'Images to upload',
                        'type' => 'file',
                        'multiple' => true,
                        'accept' => [
                            0 => 'image/*'
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
                        'redirect' => '/blog'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: "Add Blog Post"
template: form
pageconfig:
  parent: "/blog"
  include_username: true
  overwrite_mode: true
pagefrontmatter:
  template: item
  title: My new Blog post
  taxonomy:
    category: blog
    tag: [journal, guest]
form:
  name: add_page.blogpost
  fields:
    - name: author
      label: "Author"
      type: text
    - name: title
      label: "Post Title"
      type: text
    - name: taxonomy.tag
      label: "Tags (comma separated)"
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

  buttons:
    - type: submit
      value: Submit
  process:
    - add_page: true
    - redirect: "/blog"',
        'markdown' => '## New Blog Post

Write your blog post:
'
    ]
];
