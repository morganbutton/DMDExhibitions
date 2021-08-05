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
class __TwigTemplate_7f8f420e994b7f3b30027d0fe7bdad17cd605aaf7b28b2b2952f66f22ee9f4f4 extends \Twig\Template
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
        echo "<p><img title=\"dmd400-fa20-exhibition\" alt=\"dmd400-fa20-exhibition\" src=\"/images/c/8/7/1/e/c871eaa1c0bc9fb93aa6dae4c6fd4025ac3840e2-dmd400-fa20-exhibition.jpg\" /></p>
<p>===</p>";
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
        return new Source("<p><img title=\"dmd400-fa20-exhibition\" alt=\"dmd400-fa20-exhibition\" src=\"/images/c/8/7/1/e/c871eaa1c0bc9fb93aa6dae4c6fd4025ac3840e2-dmd400-fa20-exhibition.jpg\" /></p>
<p>===</p>", "@Page:/var/www/html/user/pages/dmd-exhibitions/capstone-project-exhibition", "");
    }
}
