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

/* partials/layout.html.twig */
class __TwigTemplate_631f600481c268ee1a42dd7a8153ffed878df45f5661b32fe4566841fd854007 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'item' => [$this, 'block_item'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["item_col"] = ((($context["show_sidebar"] ?? null)) ? ("col-9 col-md-12") : ("col-12"));
        // line 2
        $context["sidebar_col"] = ((($context["show_sidebar"] ?? null)) ? ("col-3 col-md-12") : ("col-12"));
        // line 3
        echo "
<div class=\"columns\">
    <div id=\"item\" class=\"column ";
        // line 5
        echo twig_escape_filter($this->env, ($context["item_col"] ?? null), "html", null, true);
        echo " extra-spacing\">
        ";
        // line 6
        $this->displayBlock('item', $context, $blocks);
        // line 7
        echo "    </div>
    ";
        // line 8
        if (($context["show_sidebar"] ?? null)) {
            // line 9
            echo "    <div id=\"sidebar\" class=\"column ";
            echo twig_escape_filter($this->env, ($context["sidebar_col"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 10
            $this->displayBlock('sidebar', $context, $blocks);
            // line 11
            echo "    </div>
    ";
        }
        // line 13
        echo "</div>

";
    }

    // line 6
    public function block_item($context, array $blocks = [])
    {
    }

    // line 10
    public function block_sidebar($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 10,  68 => 6,  62 => 13,  58 => 11,  56 => 10,  51 => 9,  49 => 8,  46 => 7,  44 => 6,  40 => 5,  36 => 3,  34 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set item_col = show_sidebar ? 'col-9 col-md-12' : 'col-12' %}
{% set sidebar_col = show_sidebar ? 'col-3 col-md-12' : 'col-12' %}

<div class=\"columns\">
    <div id=\"item\" class=\"column {{ item_col }} extra-spacing\">
        {% block item %}{% endblock %}
    </div>
    {% if show_sidebar %}
    <div id=\"sidebar\" class=\"column {{ sidebar_col }}\">
        {% block sidebar %}{% endblock %}
    </div>
    {% endif %}
</div>

", "partials/layout.html.twig", "C:\\wamp64\\www\\dmdExhibitions\\user\\themes\\quark\\templates\\partials\\layout.html.twig");
    }
}
