---
title: ajax-test-form
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
  template:
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
    - name: taxonomy.theme
      label: "theme type (comma separated)"
      type: text
    - name: taxonomy.type
      label: " type (comma separated)"
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
    - name: content
      label: "videos to upload"
      type: textarea
      size: long
      classes: editor
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
---

## New Blog Post

Write your blog post:
