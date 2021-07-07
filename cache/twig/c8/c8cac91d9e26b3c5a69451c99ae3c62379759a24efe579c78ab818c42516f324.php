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

/* forms/fields/honeypot/honeypot.html.twig */
class __TwigTemplate_a56bac91f04320fc0e845163094edaf9fa3e1f33b8060d4de28181cd55711092 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/honeypot/honeypot.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        // line 4
        $context["input_value"] = ((twig_test_iterable(($context["value"] ?? null))) ? (twig_join_filter(($context["value"] ?? null), ",")) : ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter(($context["value"] ?? null))));
        // line 5
        echo "<input aria-hidden=\"true\"
       type=\"text\"
       ";
        // line 7
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "inline_css", []) == true)) {
            // line 8
            echo "       style=\"visibility:hidden;position:absolute!important;height:1px;width:1px;overflow:hidden;clip:rect(1px,1px,1px,1px);\"
       ";
        }
        // line 10
        echo "       class=\"form-honeybear\"
       name=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
       value=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["input_value"] ?? null));
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "forms/fields/honeypot/honeypot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  57 => 11,  54 => 10,  50 => 8,  48 => 7,  44 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block field %}
{% set input_value = value is iterable ? value|join(',') : value|string %}
<input aria-hidden=\"true\"
       type=\"text\"
       {% if config.plugins.form.inline_css == true %}
       style=\"visibility:hidden;position:absolute!important;height:1px;width:1px;overflow:hidden;clip:rect(1px,1px,1px,1px);\"
       {% endif %}
       class=\"form-honeybear\"
       name=\"{{ (scope ~ field.name)|fieldName }}\"
       value=\"{{ input_value|e }}\" />
{% endblock %}
", "forms/fields/honeypot/honeypot.html.twig", "C:\\wamp64\\www\\dmdExhibitions\\user\\plugins\\form\\templates\\forms\\fields\\honeypot\\honeypot.html.twig");
    }
}
