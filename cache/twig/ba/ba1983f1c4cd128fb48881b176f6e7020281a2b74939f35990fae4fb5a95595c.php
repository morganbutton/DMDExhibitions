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
class __TwigTemplate_948418fa59f50b322107531d260982bb510de5a35bb7d8c4c1cdce186e3e2e13 extends \Twig\Template
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
        echo "<p><img src=\"/dmdExhibitions/forms/motest/user/pages/10.forms/motest/bubbles01.jpg?lightbox=1&amp;resize=400\" alt=\"CYBORGS PROJECT EXHIBITIONS\" /></p>";
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
        return new Source("<p><img src=\"/dmdExhibitions/forms/motest/user/pages/10.forms/motest/bubbles01.jpg?lightbox=1&amp;resize=400\" alt=\"CYBORGS PROJECT EXHIBITIONS\" /></p>", "@Page:C:/wamp64/www/dmdExhibitions/user/pages/10.forms/motest", "");
    }
}
