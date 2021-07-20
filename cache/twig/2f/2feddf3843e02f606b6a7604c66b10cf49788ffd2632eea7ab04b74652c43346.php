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

/* @Page:C:/wamp64/www/dmdExhibitions/user/pages/10.projects */
class __TwigTemplate_36237ed171153957b595ccef27cc2d9f579025383fa42c07bcd8903d1a27b1f4 extends \Twig\Template
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
        echo "<h2>Student work upload form</h2>
<p>To use this form ask your teacher for the cheetsheet and content tags.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/dmdExhibitions/user/pages/10.projects";
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
        return new Source("<h2>Student work upload form</h2>
<p>To use this form ask your teacher for the cheetsheet and content tags.</p>", "@Page:C:/wamp64/www/dmdExhibitions/user/pages/10.projects", "");
    }
}
