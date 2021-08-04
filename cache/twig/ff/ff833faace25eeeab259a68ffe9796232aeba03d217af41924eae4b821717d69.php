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

/* @Page:/var/www/html/user/pages/08.capstone/01.dmd300 */
class __TwigTemplate_2ac189460145e33b876cb5e60bd158b8cd47496d11eb2eeb63f5031af61a2c64 extends \Twig\Template
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
        echo "<p><img src=\"/imagefolder/dmd300.jpg?lightbox=1&amp;resize=400\" alt=\"DMD300\" /></p>
<p>===</p>
<h3>DMD 300 Project Exhibitions</h3>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/08.capstone/01.dmd300";
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
        return new Source("<p><img src=\"/imagefolder/dmd300.jpg?lightbox=1&amp;resize=400\" alt=\"DMD300\" /></p>
<p>===</p>
<h3>DMD 300 Project Exhibitions</h3>", "@Page:/var/www/html/user/pages/08.capstone/01.dmd300", "");
    }
}
