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

/* @Page:/var/www/html/user/pages/10.projects/autoplaytest */
class __TwigTemplate_176cd851a038de7158dc6ff734e5ecf9769d2f8b6b3bf758115914184df40624 extends \Twig\Template
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
        echo "<div class=\"grav-youtube-wrapper \">
  <div class=\"grav-youtube\">
      <iframe src=\"https://www.youtube.com/embed/BK8guP9ov2U?autoplay=1\" frameborder=\"0\" allowfullscreen></iframe>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/10.projects/autoplaytest";
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
        return new Source("<div class=\"grav-youtube-wrapper \">
  <div class=\"grav-youtube\">
      <iframe src=\"https://www.youtube.com/embed/BK8guP9ov2U?autoplay=1\" frameborder=\"0\" allowfullscreen></iframe>
  </div>
</div>", "@Page:/var/www/html/user/pages/10.projects/autoplaytest", "");
    }
}
