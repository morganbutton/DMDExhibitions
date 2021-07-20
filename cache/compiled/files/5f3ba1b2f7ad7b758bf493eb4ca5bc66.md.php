<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/dmdExhibitions/user/pages/10.projects/form.md',
    'modified' => 1626748723,
    'data' => [
        'header' => [
            'title' => 'Student Portal',
            'template' => 'form',
            'pageconfig' => [
                'parent' => '/blog',
                'include_username' => true,
                'overwrite_mode' => true
            ],
            'pagefrontmatter' => [
                'template' => 'testForm',
                'title' => 'My new Blog post',
                'taxonomy' => [
                    'category' => 'blog'
                ]
            ],
            'form' => [
                'name' => 'testForm.md',
                'template' => NULL,
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
                        'label' => 'Title',
                        'type' => 'text'
                    ],
                    2 => [
                        'name' => 'taxonomy.tag',
                        'label' => 'Content Tags (comma separated)',
                        'type' => 'text'
                    ],
                    3 => [
                        'name' => 'content',
                        'label' => 'Post Text',
                        'type' => 'textarea',
                        'size' => 'long',
                        'classes' => 'text'
                    ],
                    4 => [
                        'name' => 'video embed',
                        'label' => 'Youtube Embed Format  (When uploading more than one Youtube Video copy and paste each embed on its own line): <br> <b>[plugin:youtube](https://www.youtube.com/watch?v=BK8guP9ov2U)</b>',
                        'type' => 'textarea',
                        'size' => 'long',
                        'classes' => 'editor'
                    ],
                    5 => [
                        'name' => 'images',
                        'label' => 'Image Files',
                        'type' => 'file',
                        'multiple' => true,
                        'accept' => [
                            0 => 'image/*'
                        ]
                    ],
                    6 => [
                        'name' => 'content',
                        'label' => 'Image Embed Format (When uploading more than one image copy and paste each embed on its own line): <br><b>![imagename](yourImageName.jpg \'short description\')</b>',
                        'type' => 'textarea',
                        'size' => 'long',
                        'classes' => 'editor'
                    ],
                    7 => [
                        'name' => 'audio',
                        'label' => 'Audio File',
                        'type' => 'file',
                        'multiple' => true,
                        'accept' => [
                            0 => 'audio/*'
                        ]
                    ],
                    8 => [
                        'name' => 'content',
                        'label' => 'Audio Embed Format (When uploading more than one audio file copy and paste each embed on its own line): <br><b>[youraudiofilename.mp3](youraudiofilename.mp3)</b>',
                        'type' => 'textarea',
                        'size' => 'long',
                        'classes' => 'editor'
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
                        'redirect' => '/projects'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: "Student Portal"
template: form
pageconfig:
  parent: /blog
  include_username: true
  overwrite_mode: true
pagefrontmatter:
  template: testForm
  title: "My new Blog post"
  taxonomy:
    category: blog
form:
  name: testForm.md
  template: null
  refresh_prevention: true
  ajax: true
  fields:
    - name: author
      label: Author
      type: text
    - name: title
      label: Title
      type: text
    - name: taxonomy.tag
      label: "Content Tags (comma separated)"
      type: text
    - name: content
      label: "Post Text"
      type: textarea
      size: long
      classes: text
    - name: video embed
      label: "Youtube Embed Format  (When uploading more than one Youtube Video copy and paste each embed on its own line): <br> <b>[plugin:youtube](https://www.youtube.com/watch?v=BK8guP9ov2U)</b>"
      type: textarea
      size: long
      classes: editor

    - name: images
      label: "Image Files"
      type: file
      multiple: true
      accept:
        - "image/*"
    - name: content
      label: "Image Embed Format (When uploading more than one image copy and paste each embed on its own line): <br><b>![imagename](yourImageName.jpg \'short description\')</b>"
      type: textarea
      size: long
      classes: editor
    - name: audio
      label: "Audio File"
      type: file
      multiple: true
      accept:
        - "audio/*"
    - name: content
      label: "Audio Embed Format (When uploading more than one audio file copy and paste each embed on its own line): <br><b>[youraudiofilename.mp3](youraudiofilename.mp3)</b>"
      type: textarea
      size: long
      classes: editor
  buttons:
    - type: submit
      value: Submit
  process:
    - add_page: true
    - redirect: /projects',
        'markdown' => '## Student work upload form

To use this form ask your teacher for the cheetsheet and content tags.
'
    ]
];
