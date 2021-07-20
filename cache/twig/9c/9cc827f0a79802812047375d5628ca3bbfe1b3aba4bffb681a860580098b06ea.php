<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Page:C:/wamp64/www/dmdExhibitions/user/pages/10.forms */
class __TwigTemplate_78fa40bff7f36359f94e5edb1210ab05d6dcc160e267f81d6f777d0193ff7dc2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<h1>Error: Invalid Frontmatter</h1>
<p>Path: <code>C:/wamp64/www/dmdExhibitions/user/pages/10.forms/form.md</code></p>
<p><strong>Failed to read C:/wamp64/www/dmdExhibitions/user/pages/10.forms/form.md: Indentation problem at line 63 (near \" -\").</strong></p>
<pre><code>---
title: 'student portal'
template: form
pageconfig:
    parent: /blog
    include_username: true
    overwrite_mode: true
pagefrontmatter:
    template: testForm
    title: 'My new Blog post'
    taxonomy:
        category: blog
form:
    name: testForm.md
    template: null
    refresh_prevention: true
    ajax: true
    fields:
        -
            name: author
            label: Author
            type: text
        -
            name: title
            label: Title
            type: text
        -
            name: taxonomy.tag
            label: 'Content Tags (comma separated)'
            type: text
        -
            name: content
            label: 'Post Text'
            type: textarea
            size: long
            classes: editor

        -
            name: content
            label: 'Audio Embed Format: [youraudiofilename.mp3](youraudiofilename.mp3)'
            type: textarea
            size: long
            classes: editor
        -
            name: images
            label: 'Image Files'
            type: file
            multiple: true
            accept:
                - 'image/*'
        -
            name: content
            label: 'Image Embed Format (When uploading more than one image copy and place each embed on its own line): &lt;br&gt;![imagename](yourImageName.jpg ''short description'')'
            type: textarea
            size: long
            classes: editor
        -
            name: audio
            label: 'Audio File'
            type: file
            multiple: true
            accept:
                - 'audio/*'
         -
            name: content
            label: 'Video Embed Format: &lt;div class=\"grav-youtube-wrapper \"&gt;
  &lt;div class=\"grav-youtube\"&gt;
      &lt;iframe src=\"https://www.youtube.com/embed/BK8guP9ov2U\" frameborder=\"0\" allowfullscreen&gt;&lt;/iframe&gt;
  &lt;/div&gt;
&lt;/div&gt;'
            type: textarea
            size: long
            classes: editor
    buttons:
        -
            type: submit
            value: Submit
    process:
        -
            add_page: true
        -
            redirect: /forms
---

## Student work upload form

To use this form ask your teacher for the cheetsheet and content tags.
</code></pre>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/dmdExhibitions/user/pages/10.forms";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h1>Error: Invalid Frontmatter</h1>
<p>Path: <code>C:/wamp64/www/dmdExhibitions/user/pages/10.forms/form.md</code></p>
<p><strong>Failed to read C:/wamp64/www/dmdExhibitions/user/pages/10.forms/form.md: Indentation problem at line 63 (near \" -\").</strong></p>
<pre><code>---
title: 'student portal'
template: form
pageconfig:
    parent: /blog
    include_username: true
    overwrite_mode: true
pagefrontmatter:
    template: testForm
    title: 'My new Blog post'
    taxonomy:
        category: blog
form:
    name: testForm.md
    template: null
    refresh_prevention: true
    ajax: true
    fields:
        -
            name: author
            label: Author
            type: text
        -
            name: title
            label: Title
            type: text
        -
            name: taxonomy.tag
            label: 'Content Tags (comma separated)'
            type: text
        -
            name: content
            label: 'Post Text'
            type: textarea
            size: long
            classes: editor

        -
            name: content
            label: 'Audio Embed Format: [youraudiofilename.mp3](youraudiofilename.mp3)'
            type: textarea
            size: long
            classes: editor
        -
            name: images
            label: 'Image Files'
            type: file
            multiple: true
            accept:
                - 'image/*'
        -
            name: content
            label: 'Image Embed Format (When uploading more than one image copy and place each embed on its own line): &lt;br&gt;![imagename](yourImageName.jpg ''short description'')'
            type: textarea
            size: long
            classes: editor
        -
            name: audio
            label: 'Audio File'
            type: file
            multiple: true
            accept:
                - 'audio/*'
         -
            name: content
            label: 'Video Embed Format: &lt;div class=\"grav-youtube-wrapper \"&gt;
  &lt;div class=\"grav-youtube\"&gt;
      &lt;iframe src=\"https://www.youtube.com/embed/BK8guP9ov2U\" frameborder=\"0\" allowfullscreen&gt;&lt;/iframe&gt;
  &lt;/div&gt;
&lt;/div&gt;'
            type: textarea
            size: long
            classes: editor
    buttons:
        -
            type: submit
            value: Submit
    process:
        -
            add_page: true
        -
            redirect: /forms
---

## Student work upload form

To use this form ask your teacher for the cheetsheet and content tags.
</code></pre>", "@Page:C:/wamp64/www/dmdExhibitions/user/pages/10.forms", "");
    }
}
