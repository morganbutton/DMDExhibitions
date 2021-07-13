---
title: ajax-test-form
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
  twig: true
---

## New Blog Post

Write your blog post:

<div id="form-result"></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('#ajax-test-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const result = document.querySelector('#form-result');
        const action = form.getAttribute('action');
        const method = form.getAttribute('method');

        fetch(action, {
            method: method,
            body: new FormData(form)
        })
        .then(function(response) {
            if (response.ok) {
                return response.text();
            } else {
                return response.json();
            }
        })
        .then(function(output) {
            if (result) {
                result.innerHTML = output;
            }
        })
        .catch(function(error) {
            if (result) {
                result.innerHTML = 'Error: ' + error;
            }

            throw new Error(error);
        });
    });
});
</script>
