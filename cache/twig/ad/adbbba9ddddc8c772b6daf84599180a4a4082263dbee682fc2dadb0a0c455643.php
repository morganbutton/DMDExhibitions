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

/* @Page:C:/wamp64/www/dmdExhibitions/user/pages/08.capstone/01.dmd300 */
class __TwigTemplate_a699f1222ee139af097ba02581c587876c481e4bfeb2a1384e3a0373a1594242 extends \Twig\Template
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
        echo "<p><a rel=\"lightbox\" href=\"/dmdExhibitions/user/pages/imageFolder/dmd300.jpg\"><img alt=\"DMD300\" src=\"/dmdExhibitions/images/2/8/9/2/d/2892d865fe499779863467bec1edb047771372c3-dmd300.jpg\" /></a></p>
<p>===</p>
<h3>DMD 300 Project Exhibitions</h3>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/dmdExhibitions/user/pages/08.capstone/01.dmd300";
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
        return new Source("<p><a rel=\"lightbox\" href=\"/dmdExhibitions/user/pages/imageFolder/dmd300.jpg\"><img alt=\"DMD300\" src=\"/dmdExhibitions/images/2/8/9/2/d/2892d865fe499779863467bec1edb047771372c3-dmd300.jpg\" /></a></p>
<p>===</p>
<h3>DMD 300 Project Exhibitions</h3>", "@Page:C:/wamp64/www/dmdExhibitions/user/pages/08.capstone/01.dmd300", "");
    }
}
