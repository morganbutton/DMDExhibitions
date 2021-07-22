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

/* @Page:C:/wamp64/www/dmdExhibitions/user/pages/08.capstone/02.dmd400/dmd400-fall2019 */
class __TwigTemplate_849cc27ba8f50a18370e5851de66dc220deed8bb3e832fc129d4a1606ef1fe4f extends \Twig\Template
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
        echo "<p><img src=\"/dmdExhibitions/imagefolder/capstoneFall2019.png?lightbox=1&amp;resize=400\" alt=\"DMD400:Fall2019\" /></p>
<p>===</p>
<h3>DMD400 : Fall2019</h3>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/dmdExhibitions/user/pages/08.capstone/02.dmd400/dmd400-fall2019";
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
        return new Source("<p><img src=\"/dmdExhibitions/imagefolder/capstoneFall2019.png?lightbox=1&amp;resize=400\" alt=\"DMD400:Fall2019\" /></p>
<p>===</p>
<h3>DMD400 : Fall2019</h3>", "@Page:C:/wamp64/www/dmdExhibitions/user/pages/08.capstone/02.dmd400/dmd400-fall2019", "");
    }
}
