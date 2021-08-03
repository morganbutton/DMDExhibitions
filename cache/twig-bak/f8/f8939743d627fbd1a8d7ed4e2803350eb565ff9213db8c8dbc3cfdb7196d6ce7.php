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

/* @Page:/var/www/html/user/pages/10.projects/twig */
class __TwigTemplate_18c59149c2990d0397669d21b2f385dd5c0b0c5341d8796c894ea1165633f0df extends \Twig\Template
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
        echo "<p><img title=\"short description\" alt=\"imagename\" src=\"/images/1/7/6/a/0/176a0c7d1383acc37e652ca25a09c2db9fb79c98-comingsoon.jpg\" /></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/10.projects/twig";
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
        return new Source("<p><img title=\"short description\" alt=\"imagename\" src=\"/images/1/7/6/a/0/176a0c7d1383acc37e652ca25a09c2db9fb79c98-comingsoon.jpg\" /></p>", "@Page:/var/www/html/user/pages/10.projects/twig", "");
    }
}
