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

/* @Page:C:/wamp64/www/dmdExhibitions/user/pages/10.forms/motest */
class __TwigTemplate_9e07867b051a034a1bad0e227dcdf29560d5b7f2a8102e894fab1611dc2bf757 extends \Twig\Template
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
        echo "<p><a rel=\"lightbox\" href=\"/dmdExhibitions/user/pages/10.forms/motest/bubbles01.jpg\"><img alt=\"CYBORGS PROJECT EXHIBITIONS\" src=\"/dmdExhibitions/images/a/7/2/f/1/a72f1adbbce6edd234ee364f73c145adcfddbba4-bubbles01.jpg\" /></a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/dmdExhibitions/user/pages/10.forms/motest";
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
        return new Source("<p><a rel=\"lightbox\" href=\"/dmdExhibitions/user/pages/10.forms/motest/bubbles01.jpg\"><img alt=\"CYBORGS PROJECT EXHIBITIONS\" src=\"/dmdExhibitions/images/a/7/2/f/1/a72f1adbbce6edd234ee364f73c145adcfddbba4-bubbles01.jpg\" /></a></p>", "@Page:C:/wamp64/www/dmdExhibitions/user/pages/10.forms/motest", "");
    }
}
