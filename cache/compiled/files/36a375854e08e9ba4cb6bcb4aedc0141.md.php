<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/student-portal/form.md',
    'modified' => 1628125550,
    'data' => [
        'header' => [
            'title' => 'Student Portal',
            'template' => 'form',
            'pageconfig' => [
                'parent' => '/item',
                'include_username' => true,
                'overwrite_mode' => true
            ],
            'pagefrontmatter' => [
                'template' => 'testForm',
                'title' => 'My new Blog post',
                'taxonomy' => [
                    'category' => 'blog'
                ],
                'youtube' => [
                    'player_parameters' => [
                        'autoplay' => 0
                    ]
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
                        'name' => 'textcontent',
                        'label' => 'Text',
                        'type' => 'textarea',
                        'size' => 'long',
                        'classes' => 'text'
                    ],
                    4 => [
                        'name' => 'content',
                        'label' => 'Youtube Embed Format: <br><b> [plugin:youtube](https://www.youtube.com/watch?v=fJC92FyMifI)</b><br> (When uploading more than one Youtube video copy and paste each embed on its own line)',
                        'type' => 'textarea',
                        'size' => 'long',
                        'classes' => 'text'
                    ],
                    5 => [
                        'name' => 'attachments',
                        'label' => 'Attachment (PDF only)',
                        'type' => 'file',
                        'multiple' => true,
                        'accept' => [
                            0 => 'application/pdf'
                        ]
                    ],
                    6 => [
                        'name' => 'images',
                        'label' => 'Image Files',
                        'type' => 'file',
                        'multiple' => true,
                        'accept' => [
                            0 => 'image/*'
                        ]
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
                        'name' => 'audioembed',
                        'label' => 'Audio Embed Format:<br><b> ![Student audio file](pasteyourfilenamehere.mp3)</B> <br> (When uploading more than one audio file, copy and paste each embed on its own line. dont forget to edit the audio file type if necessary)',
                        'type' => 'textarea',
                        'size' => 'long',
                        'classes' => 'text'
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
                        'redirect' => '/'
                    ]
                ]
            ],
            'twig_first' => true
        ],
        'frontmatter' => 'title: "Student Portal"
template: form
pageconfig:
  parent: /item
  include_username: true
  overwrite_mode: true
pagefrontmatter:
  template: testForm
  title: "My new Blog post"
  taxonomy:
    category: blog
  youtube:
    player_parameters:
      autoplay: 0
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
    - name: textcontent
      label: Text
      type: textarea
      size: long
      classes: text
    - name: content
      label: "Youtube Embed Format: <br><b> [plugin:youtube](https://www.youtube.com/watch?v=fJC92FyMifI)</b><br> (When uploading more than one Youtube video copy and paste each embed on its own line)"
      type: textarea
      size: long
      classes: text
    - name: attachments
      label: "Attachment (PDF only)"
      type: file
      multiple: true
      accept:
        - application/pdf
    - name: images
      label: "Image Files"
      type: file
      multiple: true
      accept:
        - "image/*"
    - name: audio
      label: "Audio File"
      type: file
      multiple: true
      accept:
        - "audio/*"
    - name: audioembed
      label: "Audio Embed Format:<br><b> ![Student audio file](pasteyourfilenamehere.mp3)</B> <br> (When uploading more than one audio file, copy and paste each embed on its own line. dont forget to edit the audio file type if necessary)"
      type: textarea
      size: long
      classes: text
  buttons:
    - type: submit
      value: Submit
  process:
    - add_page: true
    - redirect: /
twig_first: true',
        'markdown' => '## Student work upload form
'
    ]
];
