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

/* @Page:/var/www/html/user/pages/10.projects/comfycouch */
class __TwigTemplate_a133b463ebb8c0c715c5afae4a43fe52b46a3860abfa3d3318e2eea22258b3e3 extends \Twig\Template
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
        echo "<p><img title=\"short description\" alt=\"imagename\" src=\"/images/c/9/3/6/7/c9367f0778e367ea01bd47cb9b136207366f09df-comfycouch2.jpg\" /></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/10.projects/comfycouch";
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
        return new Source("<p><img title=\"short description\" alt=\"imagename\" src=\"/images/c/9/3/6/7/c9367f0778e367ea01bd47cb9b136207366f09df-comfycouch2.jpg\" /></p>", "@Page:/var/www/html/user/pages/10.projects/comfycouch", "");
    }
}