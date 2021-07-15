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

/* @Page:C:/wamp64/www/dmdExhibitions/user/pages/08.capstone */
class __TwigTemplate_d9b0a4fa83f31bea6019ee14988e1e52b90e8c413137647f13b4785e2468ff83 extends \Twig\Template
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
        echo "<p><a rel=\"lightbox\" href=\"/dmdExhibitions/user/pages/imageFolder/capstoneFall2020.jpg\"><img alt=\"CAPSTONE PROJECT EXHIBITIONS\" src=\"/dmdExhibitions/images/f/9/2/b/a/f92bab62ccd6fb7098bb1db044223467884ed04d-capstonefall2020.jpg\" /></a></p>
<p>===</p>
<h3>CAPSTONE PROJECT EXHIBITIONS</h3>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/dmdExhibitions/user/pages/08.capstone";
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
        return new Source("<p><a rel=\"lightbox\" href=\"/dmdExhibitions/user/pages/imageFolder/capstoneFall2020.jpg\"><img alt=\"CAPSTONE PROJECT EXHIBITIONS\" src=\"/dmdExhibitions/images/f/9/2/b/a/f92bab62ccd6fb7098bb1db044223467884ed04d-capstonefall2020.jpg\" /></a></p>
<p>===</p>
<h3>CAPSTONE PROJECT EXHIBITIONS</h3>", "@Page:C:/wamp64/www/dmdExhibitions/user/pages/08.capstone", "");
    }
}
