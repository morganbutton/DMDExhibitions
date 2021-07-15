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

/* @Page:C:/wamp64/www/dmdExhibitions/user/pages/08.capstone/02.dmd400 */
class __TwigTemplate_046c9a2aca1d5789abcbf188801a84b6c4d241afa73fc8fc15c1fa09bfbc705a extends \Twig\Template
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
        echo "<p><a rel=\"lightbox\" href=\"/dmdExhibitions/user/pages/imageFolder/dmd400.jpg\"><img alt=\"DMD400\" src=\"/dmdExhibitions/images/d/3/0/8/b/d308b289e628e500cb6ae2ca0503ea859efa1f8f-dmd400.jpg\" /></a></p>
<p>===</p>
<h3>DMD 400 Project Exhibitions</h3>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/dmdExhibitions/user/pages/08.capstone/02.dmd400";
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
        return new Source("<p><a rel=\"lightbox\" href=\"/dmdExhibitions/user/pages/imageFolder/dmd400.jpg\"><img alt=\"DMD400\" src=\"/dmdExhibitions/images/d/3/0/8/b/d308b289e628e500cb6ae2ca0503ea859efa1f8f-dmd400.jpg\" /></a></p>
<p>===</p>
<h3>DMD 400 Project Exhibitions</h3>", "@Page:C:/wamp64/www/dmdExhibitions/user/pages/08.capstone/02.dmd400", "");
    }
}
