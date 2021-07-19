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

/* @Page:C:/wamp64/www/dmdExhibitions/user/pages/10.forms/testvideoembed */
class __TwigTemplate_09064476d90927bcd689943ba6e08599e08cc1fe4b85528d2d3e96848be1503c extends \Twig\Template
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
      <iframe src=\"https://www.youtube.com/embed/4kQMDSw3Aqo\" frameborder=\"0\" allowfullscreen></iframe>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/dmdExhibitions/user/pages/10.forms/testvideoembed";
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
      <iframe src=\"https://www.youtube.com/embed/4kQMDSw3Aqo\" frameborder=\"0\" allowfullscreen></iframe>
  </div>
</div>", "@Page:C:/wamp64/www/dmdExhibitions/user/pages/10.forms/testvideoembed", "");
    }
}
