---
title: "Student Portal"
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
      label: "Youtube Embed Format: <br><b> [plugin:youtube](https://www.youtube.com/watch?v=BK8guP9ov2U)</b><br> (When uploading more than one Youtube Video copy and paste each embed on its own line)"
      type: textarea
      size: long
      classes: text
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
      label: "Audio Embed Format:<br><b> ![Student audio file](hal9000.mp3)</B> <br>
      (When uploading more than one audio file copy and paste each embed on its own line)"
      type: textarea
      size: long
      classes: text
  buttons:
    - type: submit
      value: Submit
  process:
    - add_page: true
    - redirect: /projects
twig_first: true
---

## Student work upload form
