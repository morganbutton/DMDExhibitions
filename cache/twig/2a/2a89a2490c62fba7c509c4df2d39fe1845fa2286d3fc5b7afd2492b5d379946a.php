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

/* @Page:/var/www/html/user/pages/08.capstone */
class __TwigTemplate_4f9ef8f7204e0921d09fe76d96b835731232bd2ece57bf45c269c40777259c64 extends \Twig\Template
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
        echo "<p><img src=\"/imagefolder/capstoneFall2020.jpg?lightbox=1&amp;resize=400\" alt=\"CAPSTONE PROJECT EXHIBITIONS\" /></p>
<p>===</p>
<h3>CAPSTONE PROJECT EXHIBITIONS</h3>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/08.capstone";
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
        return new Source("<p><img src=\"/imagefolder/capstoneFall2020.jpg?lightbox=1&amp;resize=400\" alt=\"CAPSTONE PROJECT EXHIBITIONS\" /></p>
<p>===</p>
<h3>CAPSTONE PROJECT EXHIBITIONS</h3>", "@Page:/var/www/html/user/pages/08.capstone", "");
    }
}
