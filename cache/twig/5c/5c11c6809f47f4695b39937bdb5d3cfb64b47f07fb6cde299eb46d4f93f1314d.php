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

/* @Page:/var/www/html/user/pages/dmd-exhibitions/capstone-project-exhibition */
class __TwigTemplate_cbef7e50320df181d10b576e539b9956e790a3203fef008594afaef179c635e9 extends \Twig\Template
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
        echo "<p><img title=\"dmd400-fa20-exhibition\" alt=\"dmd400-fa20-exhibition\" src=\"/images/1/6/e/0/4/16e04e13b8e5ab6469e968665b23251420eb186d-dmd400-fa20-exhibition.jpg\" /></p>
<p>===</p>
<h3>Capstone : Fall2020</h3>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/dmd-exhibitions/capstone-project-exhibition";
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
        return new Source("<p><img title=\"dmd400-fa20-exhibition\" alt=\"dmd400-fa20-exhibition\" src=\"/images/1/6/e/0/4/16e04e13b8e5ab6469e968665b23251420eb186d-dmd400-fa20-exhibition.jpg\" /></p>
<p>===</p>
<h3>Capstone : Fall2020</h3>", "@Page:/var/www/html/user/pages/dmd-exhibitions/capstone-project-exhibition", "");
    }
}