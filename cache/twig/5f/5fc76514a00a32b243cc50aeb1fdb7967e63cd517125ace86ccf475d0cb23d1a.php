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

/* @Page:C:/wamp64/www/dmdExhibitions/user/pages/09.themes/01.cyborgs/dmd300-fall2020 */
class __TwigTemplate_05ab67dd1b71123692d552c1bb06e952f27475c64775fb413c9775d0f0e390fe extends \Twig\Template
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
        echo "<p><a rel=\"lightbox\" href=\"/dmdExhibitions/user/pages/imageFolder/cyborgsFall2020.jpg\"><img alt=\"CYBORGS PROJECT EXHIBITIONS\" src=\"/dmdExhibitions/images/5/8/a/3/6/58a36e6d4dc6d13082996551d6447d61f2326582-cyborgsfall2020.jpg\" /></a></p>
<p>===</p>
<h3>DMD300:Fall2020</h3>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/dmdExhibitions/user/pages/09.themes/01.cyborgs/dmd300-fall2020";
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
        return new Source("<p><a rel=\"lightbox\" href=\"/dmdExhibitions/user/pages/imageFolder/cyborgsFall2020.jpg\"><img alt=\"CYBORGS PROJECT EXHIBITIONS\" src=\"/dmdExhibitions/images/5/8/a/3/6/58a36e6d4dc6d13082996551d6447d61f2326582-cyborgsfall2020.jpg\" /></a></p>
<p>===</p>
<h3>DMD300:Fall2020</h3>", "@Page:C:/wamp64/www/dmdExhibitions/user/pages/09.themes/01.cyborgs/dmd300-fall2020", "");
    }
}
