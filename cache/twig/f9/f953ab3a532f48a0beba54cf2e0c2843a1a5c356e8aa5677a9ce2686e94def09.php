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

/* @Page:/var/www/html/user/pages/student-portal/test03 */
class __TwigTemplate_a96a5b19f9abd9d5e1ff7a99a63a4cf070e07b2fb70bfeca4e25d86818572340 extends \Twig\Template
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
        echo "<div class=\"grav-youtube-wrapper \">
  <div class=\"grav-youtube\">
      <iframe src=\"https://www.youtube.com/embed/fJC92FyMifI\" frameborder=\"0\" allowfullscreen></iframe>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/student-portal/test03";
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
        return new Source("<div class=\"grav-youtube-wrapper \">
  <div class=\"grav-youtube\">
      <iframe src=\"https://www.youtube.com/embed/fJC92FyMifI\" frameborder=\"0\" allowfullscreen></iframe>
  </div>
</div>", "@Page:/var/www/html/user/pages/student-portal/test03", "");
    }
}
