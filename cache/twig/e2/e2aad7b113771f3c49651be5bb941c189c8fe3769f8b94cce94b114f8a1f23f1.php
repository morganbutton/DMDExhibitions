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

/* @Page:/var/www/html/user/pages/dmd-exhibitions/capstone-project-exhibition-spring-2020 */
class __TwigTemplate_5fffc9ec561577346c14a675c2e63f613753a403536dbef1a03fbdb8d7376081 extends \Twig\Template
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
        echo "<p><img src=\"/exhibitionimages/CAPSTONESPRING2020.jpg?cropResize=300,300\" alt=\"dmd300-fa20-exhibition\" title=\"dmd300-fa20-exhibition\" /></p>
<p>===</p>
<h3>Capstone : Spring2020</h3>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/dmd-exhibitions/capstone-project-exhibition-spring-2020";
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
        return new Source("<p><img src=\"/exhibitionimages/CAPSTONESPRING2020.jpg?cropResize=300,300\" alt=\"dmd300-fa20-exhibition\" title=\"dmd300-fa20-exhibition\" /></p>
<p>===</p>
<h3>Capstone : Spring2020</h3>", "@Page:/var/www/html/user/pages/dmd-exhibitions/capstone-project-exhibition-spring-2020", "");
    }
}
