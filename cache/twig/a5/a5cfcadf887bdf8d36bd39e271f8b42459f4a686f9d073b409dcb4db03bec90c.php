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
class __TwigTemplate_87dc7a8278f8d31cf71c51e38915b860791474b3b334f0c3f9bbd163b8f09110 extends \Twig\Template
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
        $this->loadTemplate("forms/fields/filepicker/filepicker.html.twig", "forms/fields/filepicker/filepicker.html.twig", 1, "801898082")->display($context);
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
        {% set input_value = value is iterable ? value|join(',') : value|string %}
        {% if not field.options and value %}
            {% if value is iterable %}
                {% set options = {} %}
                {% for val in value %}
                    {% set options = options|merge({(val): val}) %}
                {% endfor %}
            {% else %}
                {% set options = {(value): value} %}
            {% endif %}
            {% set field = field|merge({options: options}) %}
        {% endif %}
        {{ parent() }}
    {% endblock %}

    {% block global_attributes %}
        data-grav-filepicker
        data-name=\"{{ field.name }}\"
        {% if field.preview_images %}data-preview-images{% endif %}
        {% if field.on_demand %}data-ondemand{% endif %}
        data-value=\"{{ input_value }}\"
        {{ parent() }}
    {% endblock %}
{% endembed %}
", "forms/fields/filepicker/filepicker.html.twig", "/var/www/html/user/plugins/admin/themes/grav/templates/forms/fields/filepicker/filepicker.html.twig");
    }
}


/* forms/fields/filepicker/filepicker.html.twig */
class __TwigTemplate_87dc7a8278f8d31cf71c51e38915b860791474b3b334f0c3f9bbd163b8f09110___801898082 extends \Twig\Template
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
        $context["input_value"] = ((twig_test_iterable(($context["value"] ?? null))) ? (twig_join_filter(($context["value"] ?? null), ",")) : ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter(($context["value"] ?? null))));
        // line 5
        echo "        ";
        if (( !$this->getAttribute(($context["field"] ?? null), "options", []) && ($context["value"] ?? null))) {
            // line 6
            echo "            ";
            if (twig_test_iterable(($context["value"] ?? null))) {
                // line 7
                echo "                ";
                $context["options"] = [];
                // line 8
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 9
                    echo "                    ";
                    $context["options"] = twig_array_merge(($context["options"] ?? null), [$context["val"] => $context["val"]]);
                    // line 10
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "            ";
            } else {
                // line 12
                echo "                ";
                $context["options"] = [($context["value"] ?? null) => ($context["value"] ?? null)];
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            $context["field"] = twig_array_merge(($context["field"] ?? null), ["options" => ($context["options"] ?? null)]);
            // line 15
            echo "        ";
        }
        // line 16
        echo "        ";
        $this->displayParentBlock("input", $context, $blocks);
        echo "
    ";
    }

    // line 19
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 20
        echo "        data-grav-filepicker
        data-name=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
        echo "\"
        ";
        // line 22
        if ($this->getAttribute(($context["field"] ?? null), "preview_images", [])) {
            echo "data-preview-images";
        }
        // line 23
        echo "        ";
        if ($this->getAttribute(($context["field"] ?? null), "on_demand", [])) {
            echo "data-ondemand";
        }
        // line 24
        echo "        data-value=\"";
        echo twig_escape_filter($this->env, ($context["input_value"] ?? null), "html", null, true);
        echo "\"
        ";
        // line 25
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
        return array (  185 => 25,  180 => 24,  175 => 23,  171 => 22,  167 => 21,  164 => 20,  161 => 19,  154 => 16,  151 => 15,  148 => 14,  145 => 13,  142 => 12,  139 => 11,  133 => 10,  130 => 9,  125 => 8,  122 => 7,  119 => 6,  116 => 5,  113 => 4,  110 => 3,  30 => 1,);
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
        {% set input_value = value is iterable ? value|join(',') : value|string %}
        {% if not field.options and value %}
            {% if value is iterable %}
                {% set options = {} %}
                {% for val in value %}
                    {% set options = options|merge({(val): val}) %}
                {% endfor %}
            {% else %}
                {% set options = {(value): value} %}
            {% endif %}
            {% set field = field|merge({options: options}) %}
        {% endif %}
        {{ parent() }}
    {% endblock %}

    {% block global_attributes %}
        data-grav-filepicker
        data-name=\"{{ field.name }}\"
        {% if field.preview_images %}data-preview-images{% endif %}
        {% if field.on_demand %}data-ondemand{% endif %}
        data-value=\"{{ input_value }}\"
        {{ parent() }}
    {% endblock %}
{% endembed %}
", "forms/fields/filepicker/filepicker.html.twig", "/var/www/html/user/plugins/admin/themes/grav/templates/forms/fields/filepicker/filepicker.html.twig");
    }
}
