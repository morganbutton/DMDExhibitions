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

/* error.html.twig */
class __TwigTemplate_2071bc45077ed90cea8a03bcca3a3524153b971f113c05f9b75e979ba82b2159 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'titlebar' => [$this, 'block_titlebar'],
            'content' => [$this, 'block_content'],
            'footer_section' => [$this, 'block_footer_section'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titlebar($context, array $blocks = [])
    {
        // line 4
        echo "    <h1><i class=\"fa fa-fw fa-exclamation-triangle\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ERROR"), "html", null, true);
        echo "</h1>
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        // line 8
        echo "<div class=\"error-block\">
    <h1>Error ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "http_response_code", []), "html", null, true);
        echo "</h1>
    <div class=\"padding\">
    <p>
        ";
        // line 12
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    </p>
    </div>
</div>
";
    }

    // line 18
    public function block_footer_section($context, array $blocks = [])
    {
        // line 19
        echo "<br /><br /><br />
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  72 => 18,  63 => 12,  57 => 9,  54 => 8,  51 => 7,  44 => 4,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block titlebar %}
    <h1><i class=\"fa fa-fw fa-exclamation-triangle\"></i> {{ \"PLUGIN_ADMIN.ERROR\"|tu }}</h1>
{% endblock %}

{% block content %}
<div class=\"error-block\">
    <h1>Error {{ page.header.http_response_code }}</h1>
    <div class=\"padding\">
    <p>
        {{ page.content|raw }}
    </p>
    </div>
</div>
{% endblock %}

{% block footer_section %}
<br /><br /><br />
{% endblock %}
", "error.html.twig", "/var/www/html/user/plugins/admin/themes/grav/templates/error.html.twig");
    }
}
