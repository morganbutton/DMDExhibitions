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

/* partials/blog/title.html.twig */
class __TwigTemplate_7f0d56667a29336b791f3fc2337176bbec64414c990a7e4f1d2b095035601572 extends \Twig\Template
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
        $context["title_level"] = ((($context["title_level"] ?? null)) ? (($context["title_level"] ?? null)) : ("h2"));
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) {
            // line 3
            echo "    <";
            echo twig_escape_filter($this->env, ($context["title_level"] ?? null), "html", null, true);
            echo " class=\"p-name mt-1\">
        ";
            // line 4
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                // line 5
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                echo "\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
        ";
            }
            // line 7
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []), "html", null, true);
            echo "\" class=\"u-url\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</a>
    </";
            // line 8
            echo twig_escape_filter($this->env, ($context["title_level"] ?? null), "html", null, true);
            echo ">
";
        } else {
            // line 10
            echo "    <";
            echo twig_escape_filter($this->env, ($context["title_level"] ?? null), "html", null, true);
            echo " class=\"p-name mt-1\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
            echo "\" class=\"u-url\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</a></";
            echo twig_escape_filter($this->env, ($context["title_level"] ?? null), "html", null, true);
            echo ">
";
        }
    }

    public function getTemplateName()
    {
        return "partials/blog/title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  54 => 8,  47 => 7,  41 => 5,  39 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set title_level = title_level ?: 'h2' %}
{% if page.header.link %}
    <{{ title_level }} class=\"p-name mt-1\">
        {% if page.header.continue_link is not same as(false) %}
        <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
        {% endif %}
        <a href=\"{{ page.header.link }}\" class=\"u-url\">{{ page.title }}</a>
    </{{ title_level }}>
{% else %}
    <{{ title_level }} class=\"p-name mt-1\"><a href=\"{{ page.url }}\" class=\"u-url\">{{ page.title }}</a></{{ title_level }}>
{% endif %}
", "partials/blog/title.html.twig", "C:\\wamp64\\www\\dmdExhibitions\\user\\themes\\quark\\templates\\partials\\blog\\title.html.twig");
    }
}
