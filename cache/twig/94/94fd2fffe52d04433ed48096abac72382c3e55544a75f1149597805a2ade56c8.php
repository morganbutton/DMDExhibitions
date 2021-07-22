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

/* partials/blog/date.html.twig */
class __TwigTemplate_9e727f1402dc494dc7056c1c712e5104e1899549f3393b1a865c979b41a3179c extends \Twig\Template
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
        echo "<span class=\"blog-date\">
    <time class=\"dt-published\" datetime=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "c"), "html", null, true);
        echo "\">
        <i class=\"fa fa-calendar\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "dateformat", []), "short", [])), "html", null, true);
        echo "
    </time>
</span>
";
    }

    public function getTemplateName()
    {
        return "partials/blog/date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<span class=\"blog-date\">
    <time class=\"dt-published\" datetime=\"{{ page.date|date(\"c\") }}\">
        <i class=\"fa fa-calendar\"></i> {{ page.date|date(system.pages.dateformat.short) }}
    </time>
</span>
", "partials/blog/date.html.twig", "C:\\wamp64\\www\\dmdExhibitions\\user\\themes\\quark\\templates\\partials\\blog\\date.html.twig");
    }
}
