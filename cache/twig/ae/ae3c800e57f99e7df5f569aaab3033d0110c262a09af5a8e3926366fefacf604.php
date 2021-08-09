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

/* @Page:/var/www/html/user/pages/dmd-exhibitions/cyborgs-project-exhibition */
class __TwigTemplate_7b5c9e1a1595879f3e9e5a92787b7a559748da420222eb51c44b5b77eaa9b28d extends \Twig\Template
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
        echo "<p><img title=\"dmd300-fa20-exhibition\" alt=\"dmd300-fa20-exhibition\" src=\"/images/3/9/8/e/2/398e269599fdbfe4fe22f0248745cb1d31bf82ce-cyborgs.jpg\" /></p>
<p>===</p>
<h3>Cyborgs : Fall2020</h3>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/dmd-exhibitions/cyborgs-project-exhibition";
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
        return new Source("<p><img title=\"dmd300-fa20-exhibition\" alt=\"dmd300-fa20-exhibition\" src=\"/images/3/9/8/e/2/398e269599fdbfe4fe22f0248745cb1d31bf82ce-cyborgs.jpg\" /></p>
<p>===</p>
<h3>Cyborgs : Fall2020</h3>", "@Page:/var/www/html/user/pages/dmd-exhibitions/cyborgs-project-exhibition", "");
    }
}
