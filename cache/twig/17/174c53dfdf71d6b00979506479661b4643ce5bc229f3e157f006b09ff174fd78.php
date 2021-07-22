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

/* @Page:C:/wamp64/www/dmdExhibitions/user/pages/08.capstone/01.dmd300/dmd300-spring2020 */
class __TwigTemplate_abdbc5f6b1c08a8ffceb06717ceebd8d111d065c0256a6d1d925fe6318cc3a41 extends \Twig\Template
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
        echo "<p><img src=\"/dmdExhibitions/imagefolder/capstoneSpring2020.png?lightbox=1&amp;resize=400\" alt=\"DMD300:Spring2020\" /></p>
<p>===</p>
<h3>DMD400 : Fall2019</h3>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/dmdExhibitions/user/pages/08.capstone/01.dmd300/dmd300-spring2020";
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
        return new Source("<p><img src=\"/dmdExhibitions/imagefolder/capstoneSpring2020.png?lightbox=1&amp;resize=400\" alt=\"DMD300:Spring2020\" /></p>
<p>===</p>
<h3>DMD400 : Fall2019</h3>", "@Page:C:/wamp64/www/dmdExhibitions/user/pages/08.capstone/01.dmd300/dmd300-spring2020", "");
    }
}
