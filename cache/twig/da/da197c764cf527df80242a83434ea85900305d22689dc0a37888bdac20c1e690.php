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

/* @Page:C:/wamp64/www/dmdExhibitions/user/pages/10.projects/fun */
class __TwigTemplate_8f5aeb015bdceb02bd817d608f42a9cf1844c327e2c2a03c5abd4bb90c33742c extends \Twig\Template
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
        echo "<p><img title=\"short description\" alt=\"imagename\" src=\"/dmdExhibitions/user/pages/10.projects/fun/comingsoon.jpg\" /></p>
<div class=\"grav-youtube-wrapper \">
  <div class=\"grav-youtube\">
      <iframe src=\"https://www.youtube.com/embed/BK8guP9ov2U\" frameborder=\"0\" allowfullscreen></iframe>
  </div>
</div>
<p>What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/dmdExhibitions/user/pages/10.projects/fun";
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
        return new Source("<p><img title=\"short description\" alt=\"imagename\" src=\"/dmdExhibitions/user/pages/10.projects/fun/comingsoon.jpg\" /></p>
<div class=\"grav-youtube-wrapper \">
  <div class=\"grav-youtube\">
      <iframe src=\"https://www.youtube.com/embed/BK8guP9ov2U\" frameborder=\"0\" allowfullscreen></iframe>
  </div>
</div>
<p>What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>", "@Page:C:/wamp64/www/dmdExhibitions/user/pages/10.projects/fun", "");
    }
}
