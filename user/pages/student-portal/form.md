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
      label: "Youtube Embed Format: <br><b> [plugin:youtube](https://www.youtube.com/watch?v=fJC92FyMifI)</b><br> (When uploading more than one Youtube video copy and paste each embed on its own line)  <br> <b> (Only fill this out if you have a youtube link) </b>"
      type: textarea
      size: long
      classes: text
    - name: attachments
      label: "Attachment (PDF only) (no numbers special characters underscore or dashes)"
      type: file
      multiple: true
      accept:
        - application/pdf
    - name: attachmentembed
      label: "PDF Embed Format:<br><b> [pdf attachment](pasteyourfilenamehere.pdf)</b> <br> (When uploading more than one pdf file, copy and paste each embed on its own line.) <br> <b> (Only fill this out if you have a PDF file) </b>"
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
      label: "Audio Embed Format:<br><b> ![Student audio file](pasteyourfilenamehere.mp3)</b> <br> (When uploading more than one audio file, copy and paste each embed on its own line. dont forget to edit the audio file type if necessary) <br> <b> (Only fill this out if you have an audio file) </b>"
      type: textarea
      size: long
      classes: text
  buttons:
    - type: submit
      value: Submit
  process:
    - add_page: true
    - redirect: /
twig_first: true
---

## Student work upload form
