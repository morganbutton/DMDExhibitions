<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/dmdExhibitions/user/pages/10.forms/form.md',
    'modified' => 1625632053,
    'data' => [
        'header' => [
            'title' => 'Forms'
        ],
        'frontmatter' => 'title: Forms',
        'markdown' => '---
title: A Page with an Example Form
form:
    name: contact-form
    fields:
        - name: name
          label: Name
          placeholder: Enter your name
          autofocus: on
          autocomplete: on
          type: text
          validate:
            required: true

        - name: email
          label: Email
          placeholder: Enter your email address
          type: email
          validate:
            required: true

    buttons:
        - type: submit
          value: Submit
        - type: reset
          value: Reset

    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
              - "{{ config.plugins.email.to }}"
              - "{{ form.value.email }}"
            subject: "[Feedback] {{ form.value.name|e }}"
            body: "{% include \'forms/data.html.twig\' %}"
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include \'forms/data.txt.twig\' %}"
        - message: Thank you for your feedback!
        - display: thankyou

---

# My Form

Regular **markdown** content goes here...'
    ]
];
