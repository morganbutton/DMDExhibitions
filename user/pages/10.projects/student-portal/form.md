---
title: "Student Portal"
template: form
pageconfig:
  parent: /projects
  include_username: true
  overwrite_mode: true
pagefrontmatter:
  template: studentProject
  title: "My new Blog post"
  taxonomy:
    category: blog
  youtube: ""
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
      label: "The content of the project."
      type: textarea
      size: long
    - name: images
      label: "Image Files"
      type: file
      multiple: true
      accept:
        - "image/*"
    - name: youtube
      lable: "link to youtube video to embed"
      type: text
    - name: audio
      label: "Audio File"
      type: file
      multiple: true
      accept:
        - "audio/*"
  buttons:
    - type: submit
      value: Submit
  process:
    - add_page: true
    - redirect: /projects
---

## Student work upload form

To use this form ask your teacher for the cheetsheet and content tags.
