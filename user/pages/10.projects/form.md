---
title: "Student Portal"
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
      label: "<i>Youtube Embed Format  (When uploading more than one Youtube Video copy and paste each embed on its own line):</i> <br> <b>[plugin:youtube](https://www.youtube.com/watch?v=BK8guP9ov2U)</b><br>
      <i>Image Embed Format (When uploading more than one image copy and paste each embed on its own line):</i> <br><b>![imagename](yourImageName.jpg 'short description')</b><br><i>Audio Embed Format (When uploading more than one audio file copy and paste each embed on its own line):</i> <br><b>[youraudiofilename.mp3](youraudiofilename.mp3)</b>
      "
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
  buttons:
    - type: submit
      value: Submit
  process:
    - add_page: true
    - redirect: /projects
---

## Student work upload form

To use this form ask your teacher for the cheetsheet and content tags.
