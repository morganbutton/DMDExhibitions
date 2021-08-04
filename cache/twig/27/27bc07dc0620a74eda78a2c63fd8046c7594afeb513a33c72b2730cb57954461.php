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

/* forms/fields/filepicker/filepicker.html.twig */
class __TwigTemplate_87444b911b51081311c904618133d9c2c7011a27fac6c55a24d9020dde929e52 extends \Twig\Template
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
        $this->loadTemplate("forms/fields/filepicker/filepicker.html.twig", "forms/fields/filepicker/filepicker.html.twig", 1, "1569558697")->display($context);
    }

    public function getTemplateName()
    {
        return "forms/fields/filepicker/filepicker.html.twig";
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
        return new Source("{% embed \"forms/fields/select/select.html.twig\" %}

    {% block input %}
        {% if not field.options and value %}
            {% set field = field|merge({options: {(value): value}}) %}
        {% endif %}
        {{ parent() }}
    {% endblock %}

    {% block global_attributes %}
        data-grav-filepicker
        data-name=\"{{field.name}}\"
        {% if field.preview_images %}data-preview-images{% endif %}
        data-value=\"{{value}}\"
        {{ parent() }}
    {% endblock %}
{% endembed %}
", "forms/fields/filepicker/filepicker.html.twig", "/var/www/html/user/plugins/flex-objects/templates/forms/fields/filepicker/filepicker.html.twig");
    }
}


/* forms/fields/filepicker/filepicker.html.twig */
class __TwigTemplate_87444b911b51081311c904618133d9c2c7011a27fac6c55a24d9020dde929e52___1569558697 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
            'global_attributes' => [$this, 'block_global_attributes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/select/select.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/fields/select/select.html.twig", "forms/fields/filepicker/filepicker.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        // line 4
        echo "        ";
        if (( !$this->getAttribute(($context["field"] ?? null), "options", []) && ($context["value"] ?? null))) {
            // line 5
            echo "            ";
            $context["field"] = twig_array_merge(($context["field"] ?? null), ["options" => [($context["value"] ?? null) => ($context["value"] ?? null)]]);
            // line 6
            echo "        ";
        }
        // line 7
        echo "        ";
        $this->displayParentBlock("input", $context, $blocks);
        echo "
    ";
    }

    // line 10
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 11
        echo "        data-grav-filepicker
        data-name=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
        echo "\"
        ";
        // line 13
        if ($this->getAttribute(($context["field"] ?? null), "preview_images", [])) {
            echo "data-preview-images";
        }
        // line 14
        echo "        data-value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\"
        ";
        // line 15
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "forms/fields/filepicker/filepicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 15,  133 => 14,  129 => 13,  125 => 12,  122 => 11,  119 => 10,  112 => 7,  109 => 6,  106 => 5,  103 => 4,  100 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed \"forms/fields/select/select.html.twig\" %}

    {% block input %}
        {% if not field.options and value %}
            {% set field = field|merge({options: {(value): value}}) %}
        {% endif %}
        {{ parent() }}
    {% endblock %}

    {% block global_attributes %}
        data-grav-filepicker
        data-name=\"{{field.name}}\"
        {% if field.preview_images %}data-preview-images{% endif %}
        data-value=\"{{value}}\"
        {{ parent() }}
    {% endblock %}
{% endembed %}
", "forms/fields/filepicker/filepicker.html.twig", "/var/www/html/user/plugins/flex-objects/templates/forms/fields/filepicker/filepicker.html.twig");
    }
}
