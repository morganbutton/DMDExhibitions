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

/* @Page:/var/www/html/user/pages/10.projects */
class __TwigTemplate_a050efbadb8b4beb4f7ca3c1b0e4f20d47cd4b867b25392bd0b64af80787b991 extends \Twig\Template
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
        echo "<p>===</p>
<h3>PROJECT EXHIBITIONS</h3>
<p><a href=\"/projects/./student-portal\">Student Portal</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/10.projects";
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
        return new Source("<p>===</p>
<h3>PROJECT EXHIBITIONS</h3>
<p><a href=\"/projects/./student-portal\">Student Portal</a></p>", "@Page:/var/www/html/user/pages/10.projects", "");
    }
}
