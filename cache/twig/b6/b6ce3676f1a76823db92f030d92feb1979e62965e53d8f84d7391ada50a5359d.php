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

/* @Page:C:/wamp64/www/dmdExhibitions/user/pages/08.capstone/02.dmd400/dmd400-fall2020 */
class __TwigTemplate_8ed4733d38e712d7e539493fa81ac8ff54760428a5465c0d5612241e6caf27ec extends \Twig\Template
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
        echo "<p><a rel=\"lightbox\" href=\"/dmdExhibitions/user/pages/imageFolder/capstoneFall2020.jpg\"><img alt=\"DMD400:FALL2020\" src=\"/dmdExhibitions/images/f/9/2/b/a/f92bab62ccd6fb7098bb1db044223467884ed04d-capstonefall2020.jpg\" /></a></p>
<p>===</p>
<h3>DMD400 : Fall2020</h3>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/dmdExhibitions/user/pages/08.capstone/02.dmd400/dmd400-fall2020";
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
        return new Source("<p><a rel=\"lightbox\" href=\"/dmdExhibitions/user/pages/imageFolder/capstoneFall2020.jpg\"><img alt=\"DMD400:FALL2020\" src=\"/dmdExhibitions/images/f/9/2/b/a/f92bab62ccd6fb7098bb1db044223467884ed04d-capstonefall2020.jpg\" /></a></p>
<p>===</p>
<h3>DMD400 : Fall2020</h3>", "@Page:C:/wamp64/www/dmdExhibitions/user/pages/08.capstone/02.dmd400/dmd400-fall2020", "");
    }
}
