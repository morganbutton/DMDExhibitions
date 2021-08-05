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

/* @Page:/var/www/html/user/pages/student-portal */
class __TwigTemplate_c59ac156cb402375afaacdf4fc341928f9d312f84ca118be8e4e7377dae199ad extends \Twig\Template
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
<p>Path: <code>/var/www/html/user/pages/student-portal/form.md</code></p>
<p>**Failed to read /var/www/html/user/pages/student-portal/form.md: Unexpected characters near \"\"\" at line 40 (near \"label: \"Youtube Embed Format: <br><b> <div class=\"grav-youtube-wrapper \"></p>
<div class=\"grav-youtube\">
      <iframe src=\"https://www.youtube.com/embed/fJC92FyMifI\" frameborder=\"0\" allowfullscreen></iframe>
  </div>
<p></div></b><br> (When uploading more than one Youtube video copy and paste each embed on its own line)  <br> <b> (Only fill this out if you have an youtube link to share) </b>\"\"\").**</p>
<pre><code>---
title: \"Student Portal\"
template: form
pageconfig:
  parent: /item
  include_username: true
  overwrite_mode: true
pagefrontmatter:
  template: testForm
  title: \"My new Blog post\"
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
      label: \"Content Tags (comma separated)\"
      type: text
    - name: textcontent
      label: Text
      type: textarea
      size: long
      classes: text
    - name: content
      label: \"Youtube Embed Format: &lt;br&gt;&lt;b&gt; &lt;div class=\"grav-youtube-wrapper \"&gt;
  &lt;div class=\"grav-youtube\"&gt;
      &lt;iframe src=\"https://www.youtube.com/embed/fJC92FyMifI\" frameborder=\"0\" allowfullscreen&gt;&lt;/iframe&gt;
  &lt;/div&gt;
&lt;/div&gt;&lt;/b&gt;&lt;br&gt; (When uploading more than one Youtube video copy and paste each embed on its own line)  &lt;br&gt; &lt;b&gt; (Only fill this out if you have an youtube link to share) &lt;/b&gt;\"\"
      type: textarea
      size: long
      classes: text
    - name: attachments
      label: \"Attachment (PDF only) (no numbers special characters underscore or dashes)\"
      type: file
      multiple: true
      accept:
        - application/pdf
    - name: attachmentembed
      label: \"PDF Embed Format:&lt;br&gt;&lt;b&gt; [pdf attachment](pasteyourfilenamehere.pdf)&lt;/b&gt; &lt;br&gt; (When uploading more than one pdf file, copy and paste each embed on its own line.) &lt;br&gt; &lt;b&gt; (Only fill this out if you have a PDF file) &lt;/b&gt;\"
      type: textarea
      size: long
      classes: text
    - name: images
      label: \"Image Files\"
      type: file
      multiple: true
      accept:
        - \"image/*\"
    - name: audio
      label: \"Audio File\"
      type: file
      multiple: true
      accept:
        - \"audio/*\"
    - name: audioembed
      label: \"Audio Embed Format:&lt;br&gt;&lt;b&gt; ![Student audio file](pasteyourfilenamehere.mp3)&lt;/b&gt; &lt;br&gt; (When uploading more than one audio file, copy and paste each embed on its own line. dont forget to edit the audio file type if necessary) &lt;br&gt; &lt;b&gt; (Only fill this out if you have an audio file) &lt;/b&gt;\"
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
</code></pre>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/student-portal";
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
<p>Path: <code>/var/www/html/user/pages/student-portal/form.md</code></p>
<p>**Failed to read /var/www/html/user/pages/student-portal/form.md: Unexpected characters near \"\"\" at line 40 (near \"label: \"Youtube Embed Format: <br><b> <div class=\"grav-youtube-wrapper \"></p>
<div class=\"grav-youtube\">
      <iframe src=\"https://www.youtube.com/embed/fJC92FyMifI\" frameborder=\"0\" allowfullscreen></iframe>
  </div>
<p></div></b><br> (When uploading more than one Youtube video copy and paste each embed on its own line)  <br> <b> (Only fill this out if you have an youtube link to share) </b>\"\"\").**</p>
<pre><code>---
title: \"Student Portal\"
template: form
pageconfig:
  parent: /item
  include_username: true
  overwrite_mode: true
pagefrontmatter:
  template: testForm
  title: \"My new Blog post\"
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
      label: \"Content Tags (comma separated)\"
      type: text
    - name: textcontent
      label: Text
      type: textarea
      size: long
      classes: text
    - name: content
      label: \"Youtube Embed Format: &lt;br&gt;&lt;b&gt; &lt;div class=\"grav-youtube-wrapper \"&gt;
  &lt;div class=\"grav-youtube\"&gt;
      &lt;iframe src=\"https://www.youtube.com/embed/fJC92FyMifI\" frameborder=\"0\" allowfullscreen&gt;&lt;/iframe&gt;
  &lt;/div&gt;
&lt;/div&gt;&lt;/b&gt;&lt;br&gt; (When uploading more than one Youtube video copy and paste each embed on its own line)  &lt;br&gt; &lt;b&gt; (Only fill this out if you have an youtube link to share) &lt;/b&gt;\"\"
      type: textarea
      size: long
      classes: text
    - name: attachments
      label: \"Attachment (PDF only) (no numbers special characters underscore or dashes)\"
      type: file
      multiple: true
      accept:
        - application/pdf
    - name: attachmentembed
      label: \"PDF Embed Format:&lt;br&gt;&lt;b&gt; [pdf attachment](pasteyourfilenamehere.pdf)&lt;/b&gt; &lt;br&gt; (When uploading more than one pdf file, copy and paste each embed on its own line.) &lt;br&gt; &lt;b&gt; (Only fill this out if you have a PDF file) &lt;/b&gt;\"
      type: textarea
      size: long
      classes: text
    - name: images
      label: \"Image Files\"
      type: file
      multiple: true
      accept:
        - \"image/*\"
    - name: audio
      label: \"Audio File\"
      type: file
      multiple: true
      accept:
        - \"audio/*\"
    - name: audioembed
      label: \"Audio Embed Format:&lt;br&gt;&lt;b&gt; ![Student audio file](pasteyourfilenamehere.mp3)&lt;/b&gt; &lt;br&gt; (When uploading more than one audio file, copy and paste each embed on its own line. dont forget to edit the audio file type if necessary) &lt;br&gt; &lt;b&gt; (Only fill this out if you have an audio file) &lt;/b&gt;\"
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
</code></pre>", "@Page:/var/www/html/user/pages/student-portal", "");
    }
}
