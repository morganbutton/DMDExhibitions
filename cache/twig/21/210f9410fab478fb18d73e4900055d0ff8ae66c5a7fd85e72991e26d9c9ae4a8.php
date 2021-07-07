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

/* forms/default/form.html.twig */
class __TwigTemplate_ba819c94c3ced68130622a18ca04686c5f8f7968df8f4de48b324e7bb749d87e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'form_classes' => [$this, 'block_form_classes'],
            'inner_markup_fields_start' => [$this, 'block_inner_markup_fields_start'],
            'inner_markup_fields_end' => [$this, 'block_inner_markup_fields_end'],
            'inner_markup_fields' => [$this, 'block_inner_markup_fields'],
            'inner_markup_field_open' => [$this, 'block_inner_markup_field_open'],
            'field' => [$this, 'block_field'],
            'inner_markup_field_close' => [$this, 'block_inner_markup_field_close'],
            'inner_markup_buttons_start' => [$this, 'block_inner_markup_buttons_start'],
            'inner_markup_buttons_end' => [$this, 'block_inner_markup_buttons_end'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ((null === ($context["form"] ?? null))) {
            // line 2
            echo "    ";
            $context["form"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", []), "getFlashObject", [0 => "form"], "method");
        }
        // line 4
        echo "
";
        // line 6
        $this->loadTemplate("partials/form-messages.html.twig", "forms/default/form.html.twig", 6)->display($context);
        // line 7
        echo "
";
        // line 8
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ((($this->getAttribute(($context["form"] ?? null), "scope", [], "any", true, true)) ? ($this->getAttribute(($context["form"] ?? null), "scope", [])) : ("data."))));
        // line 9
        $context["multipart"] = "";
        // line 10
        $context["blueprints"] = (($context["blueprints"]) ?? ($this->getAttribute(($context["form"] ?? null), "blueprint", [], "method")));
        // line 11
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute(($context["form"] ?? null), "method", [])), "POST");
        // line 12
        $context["client_side_validation"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "client_side_validation", []))) ? ($this->getAttribute(($context["form"] ?? null), "client_side_validation", [])) : ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "client_side_validation", []), true)));
        // line 13
        $context["inline_errors"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "inline_errors", []))) ? ($this->getAttribute(($context["form"] ?? null), "inline_errors", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "inline_errors", [0 => false], "method")));
        // line 14
        echo "
";
        // line 15
        $context["data"] = (($context["data"]) ?? ($this->getAttribute(($context["form"] ?? null), "data", [])));
        // line 16
        $context["context"] = (($context["context"]) ?? (($context["data"] ?? null)));
        // line 17
        echo "
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 19
            echo "    ";
            if (((($context["method"] ?? null) == "POST") && ($this->getAttribute($context["field"], "type", []) == "file"))) {
                // line 20
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 21
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
";
        // line 24
        $context["action"] = (($context["action"]) ?? ((($this->getAttribute(($context["form"] ?? null), "action", [])) ? ($this->getAttribute(($context["form"] ?? null), "action", [])) : (($this->getAttribute(($context["page"] ?? null), "route", []) . $this->getAttribute(($context["uri"] ?? null), "params", []))))));
        // line 25
        $context["action"] = ((((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["action"] ?? null)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "http") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144))) || (is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["action"] ?? null)) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "#") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002))))) ? (($context["action"] ?? null)) : ((($context["base_url"] ?? null) . ($context["action"] ?? null))));
        // line 26
        $context["action"] = twig_trim_filter(($context["action"] ?? null), "/", "right");
        // line 27
        echo "
";
        // line 28
        if ((($context["action"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 29
            echo "    ";
            $context["action"] = (($context["base_url_relative"] ?? null) . "/");
        }
        // line 31
        echo "
";
        // line 32
        if ($this->getAttribute(($context["form"] ?? null), "keep_alive", [])) {
            // line 33
            echo "    ";
            if ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "browser", []), "browser", []) == "msie") && ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "browser", []), "version", []) < 12))) {
                // line 34
                echo "        ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/object.assign.polyfill.js"], "method");
                // line 35
                echo "    ";
            }
            // line 36
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/form.vendor.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method");
            // line 37
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/form.min.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method");
        }
        // line 39
        echo "
";
        // line 40
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => (((((((((("
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '" . $this->getAttribute(        // line 43
($context["uri"] ?? null), "route", [0 => true], "method")) . "',
        base_url_relative: '") .         // line 44
($context["base_url_relative"] ?? null)) . "',
        param_sep: '") . $this->getAttribute($this->getAttribute(        // line 45
($context["config"] ?? null), "system", []), "param_sep", [])) . "',
        form_nonce: '") . $this->getAttribute(        // line 46
($context["form"] ?? null), "getNonce", [], "method")) . "',
        session_timeout: ") . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 47
($context["config"] ?? null), "system", []), "session", []), "timeout", [])) . "
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
"), 1 => ["group" => "bottom", "position" => "before", "priority" => 100]], "method");
        // line 51
        echo "
";
        // line 53
        ob_start();
        // line 54
        echo "  ";
        $this->displayBlock('form_classes', $context, $blocks);
        $context["override_form_classes"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        echo "
";
        // line 59
        ob_start();
        // line 60
        echo "  ";
        $this->displayBlock('inner_markup_fields_start', $context, $blocks);
        $context["override_inner_markup_fields_start"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "
";
        // line 63
        ob_start();
        // line 64
        echo "  ";
        $this->displayBlock('inner_markup_fields_end', $context, $blocks);
        $context["override_inner_markup_fields_end"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        echo "
";
        // line 67
        ob_start();
        // line 68
        echo "  ";
        $this->displayBlock('inner_markup_fields', $context, $blocks);
        $context["override_inner_markup_fields"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        echo "
";
        // line 88
        ob_start();
        // line 89
        echo "  ";
        $this->displayBlock('inner_markup_buttons_start', $context, $blocks);
        $context["override_inner_markup_buttons_start"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        echo "
";
        // line 94
        ob_start();
        // line 95
        echo "  ";
        $this->displayBlock('inner_markup_buttons_end', $context, $blocks);
        $context["override_inner_markup_buttons_end"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        echo "
";
        // line 101
        $this->loadTemplate("forms/default/form.html.twig", "forms/default/form.html.twig", 101, "799156816")->display($context);
        // line 198
        echo "

";
        // line 200
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "forms", []), "dropzone", []), "enabled", [])) {
            // line 201
            echo "<div id=\"dropzone-template\" style=\"display:none;\">
    ";
            // line 202
            $this->loadTemplate("forms/dropzone/template.html.twig", "forms/default/form.html.twig", 202)->display($context);
            // line 203
            echo "</div>
";
        }
    }

    // line 54
    public function block_form_classes($context, array $blocks = [])
    {
        // line 55
        echo twig_escape_filter($this->env, ($context["form_outer_classes"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "classes", []), "html", null, true);
    }

    // line 60
    public function block_inner_markup_fields_start($context, array $blocks = [])
    {
    }

    // line 64
    public function block_inner_markup_fields_end($context, array $blocks = [])
    {
    }

    // line 68
    public function block_inner_markup_fields($context, array $blocks = [])
    {
        // line 69
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["field_name"] => $context["field"]) {
            // line 70
            echo "      ";
            $context["field_name"] = ((($this->getAttribute($context["field"], "name", [], "any", true, true) &&  !(null === $this->getAttribute($context["field"], "name", [])))) ? ($this->getAttribute($context["field"], "name", [])) : ($context["field_name"]));
            // line 71
            echo "      ";
            if (($context["field_name"] &&  !$this->getAttribute($this->getAttribute($context["field"], "validate", []), "ignore", []))) {
                // line 72
                if ((is_string($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["field_name"]) && is_string($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ".") && ('' === $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 || 0 === strpos($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4, $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666)))) {
                    // line 73
                    $context["field_name"] = twig_slice($this->env, $context["field_name"], 1, null);
                    // line 74
                    echo "          ";
                    $context["field"] = twig_array_merge($context["field"], ["name" => $context["field_name"]]);
                    // line 75
                    echo "        ";
                }
                // line 76
                echo "
        ";
                // line 77
                $context["value"] = ((($context["form"] ?? null)) ? ($this->getAttribute(($context["form"] ?? null), "value", [0 => $context["field_name"]], "method")) : ($this->getAttribute(($context["data"] ?? null), "value", [0 => $context["field_name"]], "method")));
                // line 78
                echo "        ";
                $this->displayBlock('inner_markup_field_open', $context, $blocks);
                // line 79
                echo "        ";
                $this->displayBlock('field', $context, $blocks);
                // line 82
                echo "        ";
                $this->displayBlock('inner_markup_field_close', $context, $blocks);
                // line 83
                echo "      ";
            }
            // line 84
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "  ";
    }

    // line 78
    public function block_inner_markup_field_open($context, array $blocks = [])
    {
    }

    // line 79
    public function block_field($context, array $blocks = [])
    {
        // line 80
        echo "          ";
        $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = null;
        try {
            $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e =             $this->loadTemplate((((("forms/fields/" . $this->getAttribute(($context["field"] ?? null), "type", [])) . "/") . $this->getAttribute(($context["field"] ?? null), "type", [])) . ".html.twig"), "forms/default/form.html.twig", 80);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) {
            $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e->display($context);
        }
        // line 81
        echo "        ";
    }

    // line 82
    public function block_inner_markup_field_close($context, array $blocks = [])
    {
    }

    // line 89
    public function block_inner_markup_buttons_start($context, array $blocks = [])
    {
        // line 90
        echo "  <div class=\"";
        ((($context["form_button_outer_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_button_outer_classes"] ?? null), "html", null, true))) : (print ("buttons")));
        echo "\">
  ";
    }

    // line 95
    public function block_inner_markup_buttons_end($context, array $blocks = [])
    {
        // line 96
        echo "  </div>
  ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 96,  356 => 95,  349 => 90,  346 => 89,  341 => 82,  337 => 81,  326 => 80,  323 => 79,  318 => 78,  314 => 85,  300 => 84,  297 => 83,  294 => 82,  291 => 79,  288 => 78,  286 => 77,  283 => 76,  280 => 75,  277 => 74,  275 => 73,  273 => 72,  270 => 71,  267 => 70,  249 => 69,  246 => 68,  241 => 64,  236 => 60,  230 => 55,  227 => 54,  221 => 203,  219 => 202,  216 => 201,  214 => 200,  210 => 198,  208 => 101,  205 => 99,  201 => 95,  199 => 94,  196 => 93,  192 => 89,  190 => 88,  187 => 87,  183 => 68,  181 => 67,  178 => 66,  174 => 64,  172 => 63,  169 => 62,  165 => 60,  163 => 59,  160 => 58,  156 => 54,  154 => 53,  151 => 51,  146 => 47,  144 => 46,  142 => 45,  140 => 44,  138 => 43,  134 => 40,  131 => 39,  127 => 37,  124 => 36,  121 => 35,  118 => 34,  115 => 33,  113 => 32,  110 => 31,  106 => 29,  104 => 28,  101 => 27,  99 => 26,  97 => 25,  95 => 24,  92 => 23,  85 => 21,  82 => 20,  79 => 19,  75 => 18,  72 => 17,  70 => 16,  68 => 15,  65 => 14,  63 => 13,  61 => 12,  59 => 11,  57 => 10,  55 => 9,  53 => 8,  50 => 7,  48 => 6,  45 => 4,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{# Keep here for Backwards Compatibility #}
{% include 'partials/form-messages.html.twig' %}

{% set scope = scope ?: form.scope is defined ? form.scope : 'data.' %}
{% set multipart = '' %}
{% set blueprints = blueprints ?? form.blueprint() %}
{% set method = form.method|upper|default('POST') %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|defined(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% set data = data ?? form.data %}
{% set context = context ?? data %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = action ?? (form.action ?: page.route ~ uri.params) %}
{% set action = (action starts with 'http') or (action starts with '#') ? action : base_url ~ action %}
{% set action = action|trim('/', 'right') %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' %}
{% endif %}

{% if form.keep_alive %}
    {% if grav.browser.browser == 'msie' and grav.browser.version < 12 %}
        {% do assets.addJs('plugin://form/assets/object.assign.polyfill.js') %}
    {% endif %}
    {% do assets.addJs('plugin://form/assets/form.vendor.js', { 'group': 'bottom', 'loading': 'defer' }) %}
    {% do assets.addJs('plugin://form/assets/form.min.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% endif %}

{% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '\" ~ uri.route(true) ~\"',
        base_url_relative: '\" ~ base_url_relative ~ \"',
        param_sep: '\"~ config.system.param_sep ~ \"',
        form_nonce: '\" ~ form.getNonce() ~ \"',
        session_timeout: \" ~ config.system.session.timeout ~ \"
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
\", {'group': 'bottom', 'position': 'before', 'priority': 100}) %}

{# Backwards Compatibility for block overrides #}
{% set override_form_classes %}
  {% block form_classes -%}
    {{ form_outer_classes }} {{ form.classes }}
  {%- endblock %}
{% endset %}

{% set override_inner_markup_fields_start %}
  {% block inner_markup_fields_start %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields_end %}
  {% block inner_markup_fields_end %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields %}
  {% block inner_markup_fields %}
    {% for field_name, field in form.fields %}
      {% set field_name = field.name ?? field_name %}
      {% if field_name and not field.validate.ignore %}
        {%- if field_name starts with '.' -%}
          {% set field_name = field_name[1:] %}
          {% set field = field|merge({ name: field_name }) %}
        {% endif %}

        {% set value = form ? form.value(field_name) : data.value(field_name) %}
        {% block inner_markup_field_open %}{% endblock %}
        {% block field %}
          {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
        {% endblock %}
        {% block inner_markup_field_close %}{% endblock %}
      {% endif %}
    {% endfor %}
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_start %}
  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: 'buttons'}}\">
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_end %}
  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}
{% endset %}

{# Embed for HTML layout #}
{% embed 'forms/layouts/form.html.twig' %}

  {% block embed_form_core %}
    name=\"{{ form.name }}\"
    action=\"{{ action }}\"
    method=\"{{ method }}\"{{ multipart|raw }}
    {% if form.id %}id=\"{{ form.id }}\"{% endif %}
    {% if form.novalidate %}novalidate{% endif %}
    {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
    {% if form.attributes is defined %}
      {% for key,attribute in form.attributes %}
        {% if attribute|of_type('array') %}
          {{ attribute.name }}=\"{{ attribute.value|e('html_attr') }}\"
        {% else %}
          {{ key }}=\"{{ attribute|e('html_attr') }}\"
        {% endif %}
      {% endfor %}
    {% endif %}
  {% endblock %}

  {% block embed_form_classes -%}
    class=\"{{ parent() }} {{ override_form_classes|trim }}\"
  {%- endblock %}

  {% block embed_form_custom_attributes %}
    {% for k, v in blueprints.form.attributes %}
      {{ k }}=\"{{ v|e }}\"
    {% endfor %}
  {% endblock %}

  {% block embed_fields %}
    {{ override_inner_markup_fields_start|raw }}
    {{ override_inner_markup_fields|raw }}

    {% include \"forms/fields/formname/formname.html.twig\" %}
    {% include \"forms/fields/formtask/formtask.html.twig\" %}
    {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}
    {{ nonce_field(form.getNonceAction() ?? 'form', form.getNonceName() ?? 'form-nonce')|raw }}

    {{ override_inner_markup_fields_end|raw }}
  {% endblock %}

  {% block embed_buttons %}
    {{ override_inner_markup_buttons_start|raw }}

    {% for button in form.buttons %}
      {% if button.outerclasses is defined %}<div class=\"{{ button.outerclasses }}\">{% endif %}

      {% if button.url %}
      {% set button_url = button.url starts with 'http' ? button.url : base_url ~ button.url %}
      {% endif %}

      {% embed 'forms/layouts/button.html.twig' %}
        {% block embed_button_core %}
          {% if button.id %}id=\"{{ button.id }}\"{% endif %}
          {% if button.disabled %}disabled=\"disabled\"{% endif %}
          {% if button.name %}
            name=\"{{ button.name }}\"
          {% else %}
            {% if button.task %}name=\"task\" value=\"{{ button.task }}\"{% endif %}
          {% endif %}
          type=\"{{ button.type|default('submit') }}\"
          {% if button.attributes is defined %}
            {% for key,attribute in button.attributes %}
              {% if attribute|of_type('array') %}
                {{ attribute.name }}=\"{{ attribute.value|e('html_attr') }}\"
              {% else %}
                {{ key }}=\"{{ attribute|e('html_attr') }}\"
              {% endif %}
            {% endfor %}
          {% endif %}
        {% endblock %}

        {% block embed_button_classes %}
          {% block button_classes %}
            class=\"{{ form_button_classes ?: 'button' }} {{ button.classes }}\"
          {% endblock %}
        {% endblock %}

        {% block embed_button_content -%}
          {%- set button_value = button.value|t|default('Submit') -%}
          {%- if button.html -%}
            {{- button_value|trim|raw -}}
          {%- else -%}
            {{- button_value|trim|e -}}
          {%- endif -%}
        {%- endblock %}

      {% endembed %}

      {% if button.outerclasses is defined %}</div>{% endif %}
    {% endfor %}

    {{ override_inner_markup_buttons_end }}
  {% endblock %}

{% endembed %}


{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include 'forms/dropzone/template.html.twig' %}
</div>
{% endif %}
", "forms/default/form.html.twig", "C:\\wamp64\\www\\dmdExhibitions\\user\\plugins\\form\\templates\\forms\\default\\form.html.twig");
    }
}


/* forms/default/form.html.twig */
class __TwigTemplate_ba819c94c3ced68130622a18ca04686c5f8f7968df8f4de48b324e7bb749d87e___799156816 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'embed_form_core' => [$this, 'block_embed_form_core'],
            'embed_form_classes' => [$this, 'block_embed_form_classes'],
            'embed_form_custom_attributes' => [$this, 'block_embed_form_custom_attributes'],
            'embed_fields' => [$this, 'block_embed_fields'],
            'embed_buttons' => [$this, 'block_embed_buttons'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 101
        return "forms/layouts/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/layouts/form.html.twig", "forms/default/form.html.twig", 101);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 103
    public function block_embed_form_core($context, array $blocks = [])
    {
        // line 104
        echo "    name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "name", []), "html", null, true);
        echo "\"
    action=\"";
        // line 105
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\"
    method=\"";
        // line 106
        echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
        echo "\"";
        echo ($context["multipart"] ?? null);
        echo "
    ";
        // line 107
        if ($this->getAttribute(($context["form"] ?? null), "id", [])) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "id", []), "html", null, true);
            echo "\"";
        }
        // line 108
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "novalidate", [])) {
            echo "novalidate";
        }
        // line 109
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "keep_alive", [])) {
            echo "data-grav-keepalive=\"true\"";
        }
        // line 110
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "attributes", [], "any", true, true)) {
            // line 111
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "attributes", []));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 112
                echo "        ";
                if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->ofTypeFunc($context["attribute"], "array")) {
                    // line 113
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "name", []), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", []), "html_attr");
                    echo "\"
        ";
                } else {
                    // line 115
                    echo "          ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attribute"], "html_attr");
                    echo "\"
        ";
                }
                // line 117
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "    ";
        }
        // line 119
        echo "  ";
    }

    // line 121
    public function block_embed_form_classes($context, array $blocks = [])
    {
        // line 122
        echo "class=\"";
        $this->displayParentBlock("embed_form_classes", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, twig_trim_filter(($context["override_form_classes"] ?? null)), "html", null, true);
        echo "\"";
    }

    // line 125
    public function block_embed_form_custom_attributes($context, array $blocks = [])
    {
        // line 126
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "form", []), "attributes", []));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 127
            echo "      ";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["v"]);
            echo "\"
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "  ";
    }

    // line 131
    public function block_embed_fields($context, array $blocks = [])
    {
        // line 132
        echo "    ";
        echo ($context["override_inner_markup_fields_start"] ?? null);
        echo "
    ";
        // line 133
        echo ($context["override_inner_markup_fields"] ?? null);
        echo "

    ";
        // line 135
        $this->loadTemplate("forms/fields/formname/formname.html.twig", "forms/default/form.html.twig", 135)->display($context);
        // line 136
        echo "    ";
        $this->loadTemplate("forms/fields/formtask/formtask.html.twig", "forms/default/form.html.twig", 136)->display($context);
        // line 137
        echo "    ";
        $this->loadTemplate("forms/fields/uniqueid/uniqueid.html.twig", "forms/default/form.html.twig", 137)->display($context);
        // line 138
        echo "    ";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->nonceFieldFunc(((($this->getAttribute(($context["form"] ?? null), "getNonceAction", [], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "getNonceAction", [], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "getNonceAction", [], "method")) : ("form")), ((($this->getAttribute(($context["form"] ?? null), "getNonceName", [], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "getNonceName", [], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "getNonceName", [], "method")) : ("form-nonce")));
        echo "

    ";
        // line 140
        echo ($context["override_inner_markup_fields_end"] ?? null);
        echo "
  ";
    }

    // line 143
    public function block_embed_buttons($context, array $blocks = [])
    {
        // line 144
        echo "    ";
        echo ($context["override_inner_markup_buttons_start"] ?? null);
        echo "

    ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "buttons", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 147
            echo "      ";
            if ($this->getAttribute($context["button"], "outerclasses", [], "any", true, true)) {
                echo "<div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "outerclasses", []), "html", null, true);
                echo "\">";
            }
            // line 148
            echo "
      ";
            // line 149
            if ($this->getAttribute($context["button"], "url", [])) {
                // line 150
                echo "      ";
                $context["button_url"] = (((is_string($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $this->getAttribute($context["button"], "url", [])) && is_string($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = "http") && ('' === $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 || 0 === strpos($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52, $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136)))) ? ($this->getAttribute($context["button"], "url", [])) : ((($context["base_url"] ?? null) . $this->getAttribute($context["button"], "url", []))));
                // line 151
                echo "      ";
            }
            // line 152
            echo "
      ";
            // line 153
            $this->loadTemplate("forms/default/form.html.twig", "forms/default/form.html.twig", 153, "608468186")->display($context);
            // line 190
            echo "
      ";
            // line 191
            if ($this->getAttribute($context["button"], "outerclasses", [], "any", true, true)) {
                echo "</div>";
            }
            // line 192
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "
    ";
        // line 194
        echo twig_escape_filter($this->env, ($context["override_inner_markup_buttons_end"] ?? null), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  840 => 194,  837 => 193,  823 => 192,  819 => 191,  816 => 190,  814 => 153,  811 => 152,  808 => 151,  805 => 150,  803 => 149,  800 => 148,  793 => 147,  776 => 146,  770 => 144,  767 => 143,  761 => 140,  755 => 138,  752 => 137,  749 => 136,  747 => 135,  742 => 133,  737 => 132,  734 => 131,  730 => 129,  719 => 127,  714 => 126,  711 => 125,  703 => 122,  700 => 121,  696 => 119,  693 => 118,  687 => 117,  679 => 115,  671 => 113,  668 => 112,  663 => 111,  660 => 110,  655 => 109,  650 => 108,  644 => 107,  638 => 106,  634 => 105,  629 => 104,  626 => 103,  616 => 101,  359 => 96,  356 => 95,  349 => 90,  346 => 89,  341 => 82,  337 => 81,  326 => 80,  323 => 79,  318 => 78,  314 => 85,  300 => 84,  297 => 83,  294 => 82,  291 => 79,  288 => 78,  286 => 77,  283 => 76,  280 => 75,  277 => 74,  275 => 73,  273 => 72,  270 => 71,  267 => 70,  249 => 69,  246 => 68,  241 => 64,  236 => 60,  230 => 55,  227 => 54,  221 => 203,  219 => 202,  216 => 201,  214 => 200,  210 => 198,  208 => 101,  205 => 99,  201 => 95,  199 => 94,  196 => 93,  192 => 89,  190 => 88,  187 => 87,  183 => 68,  181 => 67,  178 => 66,  174 => 64,  172 => 63,  169 => 62,  165 => 60,  163 => 59,  160 => 58,  156 => 54,  154 => 53,  151 => 51,  146 => 47,  144 => 46,  142 => 45,  140 => 44,  138 => 43,  134 => 40,  131 => 39,  127 => 37,  124 => 36,  121 => 35,  118 => 34,  115 => 33,  113 => 32,  110 => 31,  106 => 29,  104 => 28,  101 => 27,  99 => 26,  97 => 25,  95 => 24,  92 => 23,  85 => 21,  82 => 20,  79 => 19,  75 => 18,  72 => 17,  70 => 16,  68 => 15,  65 => 14,  63 => 13,  61 => 12,  59 => 11,  57 => 10,  55 => 9,  53 => 8,  50 => 7,  48 => 6,  45 => 4,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{# Keep here for Backwards Compatibility #}
{% include 'partials/form-messages.html.twig' %}

{% set scope = scope ?: form.scope is defined ? form.scope : 'data.' %}
{% set multipart = '' %}
{% set blueprints = blueprints ?? form.blueprint() %}
{% set method = form.method|upper|default('POST') %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|defined(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% set data = data ?? form.data %}
{% set context = context ?? data %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = action ?? (form.action ?: page.route ~ uri.params) %}
{% set action = (action starts with 'http') or (action starts with '#') ? action : base_url ~ action %}
{% set action = action|trim('/', 'right') %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' %}
{% endif %}

{% if form.keep_alive %}
    {% if grav.browser.browser == 'msie' and grav.browser.version < 12 %}
        {% do assets.addJs('plugin://form/assets/object.assign.polyfill.js') %}
    {% endif %}
    {% do assets.addJs('plugin://form/assets/form.vendor.js', { 'group': 'bottom', 'loading': 'defer' }) %}
    {% do assets.addJs('plugin://form/assets/form.min.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% endif %}

{% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '\" ~ uri.route(true) ~\"',
        base_url_relative: '\" ~ base_url_relative ~ \"',
        param_sep: '\"~ config.system.param_sep ~ \"',
        form_nonce: '\" ~ form.getNonce() ~ \"',
        session_timeout: \" ~ config.system.session.timeout ~ \"
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
\", {'group': 'bottom', 'position': 'before', 'priority': 100}) %}

{# Backwards Compatibility for block overrides #}
{% set override_form_classes %}
  {% block form_classes -%}
    {{ form_outer_classes }} {{ form.classes }}
  {%- endblock %}
{% endset %}

{% set override_inner_markup_fields_start %}
  {% block inner_markup_fields_start %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields_end %}
  {% block inner_markup_fields_end %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields %}
  {% block inner_markup_fields %}
    {% for field_name, field in form.fields %}
      {% set field_name = field.name ?? field_name %}
      {% if field_name and not field.validate.ignore %}
        {%- if field_name starts with '.' -%}
          {% set field_name = field_name[1:] %}
          {% set field = field|merge({ name: field_name }) %}
        {% endif %}

        {% set value = form ? form.value(field_name) : data.value(field_name) %}
        {% block inner_markup_field_open %}{% endblock %}
        {% block field %}
          {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
        {% endblock %}
        {% block inner_markup_field_close %}{% endblock %}
      {% endif %}
    {% endfor %}
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_start %}
  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: 'buttons'}}\">
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_end %}
  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}
{% endset %}

{# Embed for HTML layout #}
{% embed 'forms/layouts/form.html.twig' %}

  {% block embed_form_core %}
    name=\"{{ form.name }}\"
    action=\"{{ action }}\"
    method=\"{{ method }}\"{{ multipart|raw }}
    {% if form.id %}id=\"{{ form.id }}\"{% endif %}
    {% if form.novalidate %}novalidate{% endif %}
    {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
    {% if form.attributes is defined %}
      {% for key,attribute in form.attributes %}
        {% if attribute|of_type('array') %}
          {{ attribute.name }}=\"{{ attribute.value|e('html_attr') }}\"
        {% else %}
          {{ key }}=\"{{ attribute|e('html_attr') }}\"
        {% endif %}
      {% endfor %}
    {% endif %}
  {% endblock %}

  {% block embed_form_classes -%}
    class=\"{{ parent() }} {{ override_form_classes|trim }}\"
  {%- endblock %}

  {% block embed_form_custom_attributes %}
    {% for k, v in blueprints.form.attributes %}
      {{ k }}=\"{{ v|e }}\"
    {% endfor %}
  {% endblock %}

  {% block embed_fields %}
    {{ override_inner_markup_fields_start|raw }}
    {{ override_inner_markup_fields|raw }}

    {% include \"forms/fields/formname/formname.html.twig\" %}
    {% include \"forms/fields/formtask/formtask.html.twig\" %}
    {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}
    {{ nonce_field(form.getNonceAction() ?? 'form', form.getNonceName() ?? 'form-nonce')|raw }}

    {{ override_inner_markup_fields_end|raw }}
  {% endblock %}

  {% block embed_buttons %}
    {{ override_inner_markup_buttons_start|raw }}

    {% for button in form.buttons %}
      {% if button.outerclasses is defined %}<div class=\"{{ button.outerclasses }}\">{% endif %}

      {% if button.url %}
      {% set button_url = button.url starts with 'http' ? button.url : base_url ~ button.url %}
      {% endif %}

      {% embed 'forms/layouts/button.html.twig' %}
        {% block embed_button_core %}
          {% if button.id %}id=\"{{ button.id }}\"{% endif %}
          {% if button.disabled %}disabled=\"disabled\"{% endif %}
          {% if button.name %}
            name=\"{{ button.name }}\"
          {% else %}
            {% if button.task %}name=\"task\" value=\"{{ button.task }}\"{% endif %}
          {% endif %}
          type=\"{{ button.type|default('submit') }}\"
          {% if button.attributes is defined %}
            {% for key,attribute in button.attributes %}
              {% if attribute|of_type('array') %}
                {{ attribute.name }}=\"{{ attribute.value|e('html_attr') }}\"
              {% else %}
                {{ key }}=\"{{ attribute|e('html_attr') }}\"
              {% endif %}
            {% endfor %}
          {% endif %}
        {% endblock %}

        {% block embed_button_classes %}
          {% block button_classes %}
            class=\"{{ form_button_classes ?: 'button' }} {{ button.classes }}\"
          {% endblock %}
        {% endblock %}

        {% block embed_button_content -%}
          {%- set button_value = button.value|t|default('Submit') -%}
          {%- if button.html -%}
            {{- button_value|trim|raw -}}
          {%- else -%}
            {{- button_value|trim|e -}}
          {%- endif -%}
        {%- endblock %}

      {% endembed %}

      {% if button.outerclasses is defined %}</div>{% endif %}
    {% endfor %}

    {{ override_inner_markup_buttons_end }}
  {% endblock %}

{% endembed %}


{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include 'forms/dropzone/template.html.twig' %}
</div>
{% endif %}
", "forms/default/form.html.twig", "C:\\wamp64\\www\\dmdExhibitions\\user\\plugins\\form\\templates\\forms\\default\\form.html.twig");
    }
}


/* forms/default/form.html.twig */
class __TwigTemplate_ba819c94c3ced68130622a18ca04686c5f8f7968df8f4de48b324e7bb749d87e___608468186 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'embed_button_core' => [$this, 'block_embed_button_core'],
            'embed_button_classes' => [$this, 'block_embed_button_classes'],
            'button_classes' => [$this, 'block_button_classes'],
            'embed_button_content' => [$this, 'block_embed_button_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 153
        return "forms/layouts/button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/layouts/button.html.twig", "forms/default/form.html.twig", 153);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 154
    public function block_embed_button_core($context, array $blocks = [])
    {
        // line 155
        echo "          ";
        if ($this->getAttribute(($context["button"] ?? null), "id", [])) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? null), "id", []), "html", null, true);
            echo "\"";
        }
        // line 156
        echo "          ";
        if ($this->getAttribute(($context["button"] ?? null), "disabled", [])) {
            echo "disabled=\"disabled\"";
        }
        // line 157
        echo "          ";
        if ($this->getAttribute(($context["button"] ?? null), "name", [])) {
            // line 158
            echo "            name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? null), "name", []), "html", null, true);
            echo "\"
          ";
        } else {
            // line 160
            echo "            ";
            if ($this->getAttribute(($context["button"] ?? null), "task", [])) {
                echo "name=\"task\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? null), "task", []), "html", null, true);
                echo "\"";
            }
            // line 161
            echo "          ";
        }
        // line 162
        echo "          type=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["button"] ?? null), "type", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["button"] ?? null), "type", []), "submit")) : ("submit")), "html", null, true);
        echo "\"
          ";
        // line 163
        if ($this->getAttribute(($context["button"] ?? null), "attributes", [], "any", true, true)) {
            // line 164
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["button"] ?? null), "attributes", []));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 165
                echo "              ";
                if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->ofTypeFunc($context["attribute"], "array")) {
                    // line 166
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "name", []), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", []), "html_attr");
                    echo "\"
              ";
                } else {
                    // line 168
                    echo "                ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attribute"], "html_attr");
                    echo "\"
              ";
                }
                // line 170
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "          ";
        }
        // line 172
        echo "        ";
    }

    // line 174
    public function block_embed_button_classes($context, array $blocks = [])
    {
        // line 175
        echo "          ";
        $this->displayBlock('button_classes', $context, $blocks);
        // line 178
        echo "        ";
    }

    // line 175
    public function block_button_classes($context, array $blocks = [])
    {
        // line 176
        echo "            class=\"";
        ((($context["form_button_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_button_classes"] ?? null), "html", null, true))) : (print ("button")));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? null), "classes", []), "html", null, true);
        echo "\"
          ";
    }

    // line 180
    public function block_embed_button_content($context, array $blocks = [])
    {
        // line 181
        $context["button_value"] = _twig_default_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["button"] ?? null), "value", [])), "Submit");
        // line 182
        if ($this->getAttribute(($context["button"] ?? null), "html", [])) {
            // line 183
            echo twig_trim_filter(($context["button_value"] ?? null));
        } else {
            // line 185
            echo twig_escape_filter($this->env, twig_trim_filter(($context["button_value"] ?? null)));
        }
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1217 => 185,  1214 => 183,  1212 => 182,  1210 => 181,  1207 => 180,  1198 => 176,  1195 => 175,  1191 => 178,  1188 => 175,  1185 => 174,  1181 => 172,  1178 => 171,  1172 => 170,  1164 => 168,  1156 => 166,  1153 => 165,  1148 => 164,  1146 => 163,  1141 => 162,  1138 => 161,  1131 => 160,  1125 => 158,  1122 => 157,  1117 => 156,  1110 => 155,  1107 => 154,  1097 => 153,  840 => 194,  837 => 193,  823 => 192,  819 => 191,  816 => 190,  814 => 153,  811 => 152,  808 => 151,  805 => 150,  803 => 149,  800 => 148,  793 => 147,  776 => 146,  770 => 144,  767 => 143,  761 => 140,  755 => 138,  752 => 137,  749 => 136,  747 => 135,  742 => 133,  737 => 132,  734 => 131,  730 => 129,  719 => 127,  714 => 126,  711 => 125,  703 => 122,  700 => 121,  696 => 119,  693 => 118,  687 => 117,  679 => 115,  671 => 113,  668 => 112,  663 => 111,  660 => 110,  655 => 109,  650 => 108,  644 => 107,  638 => 106,  634 => 105,  629 => 104,  626 => 103,  616 => 101,  359 => 96,  356 => 95,  349 => 90,  346 => 89,  341 => 82,  337 => 81,  326 => 80,  323 => 79,  318 => 78,  314 => 85,  300 => 84,  297 => 83,  294 => 82,  291 => 79,  288 => 78,  286 => 77,  283 => 76,  280 => 75,  277 => 74,  275 => 73,  273 => 72,  270 => 71,  267 => 70,  249 => 69,  246 => 68,  241 => 64,  236 => 60,  230 => 55,  227 => 54,  221 => 203,  219 => 202,  216 => 201,  214 => 200,  210 => 198,  208 => 101,  205 => 99,  201 => 95,  199 => 94,  196 => 93,  192 => 89,  190 => 88,  187 => 87,  183 => 68,  181 => 67,  178 => 66,  174 => 64,  172 => 63,  169 => 62,  165 => 60,  163 => 59,  160 => 58,  156 => 54,  154 => 53,  151 => 51,  146 => 47,  144 => 46,  142 => 45,  140 => 44,  138 => 43,  134 => 40,  131 => 39,  127 => 37,  124 => 36,  121 => 35,  118 => 34,  115 => 33,  113 => 32,  110 => 31,  106 => 29,  104 => 28,  101 => 27,  99 => 26,  97 => 25,  95 => 24,  92 => 23,  85 => 21,  82 => 20,  79 => 19,  75 => 18,  72 => 17,  70 => 16,  68 => 15,  65 => 14,  63 => 13,  61 => 12,  59 => 11,  57 => 10,  55 => 9,  53 => 8,  50 => 7,  48 => 6,  45 => 4,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{# Keep here for Backwards Compatibility #}
{% include 'partials/form-messages.html.twig' %}

{% set scope = scope ?: form.scope is defined ? form.scope : 'data.' %}
{% set multipart = '' %}
{% set blueprints = blueprints ?? form.blueprint() %}
{% set method = form.method|upper|default('POST') %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|defined(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% set data = data ?? form.data %}
{% set context = context ?? data %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = action ?? (form.action ?: page.route ~ uri.params) %}
{% set action = (action starts with 'http') or (action starts with '#') ? action : base_url ~ action %}
{% set action = action|trim('/', 'right') %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' %}
{% endif %}

{% if form.keep_alive %}
    {% if grav.browser.browser == 'msie' and grav.browser.version < 12 %}
        {% do assets.addJs('plugin://form/assets/object.assign.polyfill.js') %}
    {% endif %}
    {% do assets.addJs('plugin://form/assets/form.vendor.js', { 'group': 'bottom', 'loading': 'defer' }) %}
    {% do assets.addJs('plugin://form/assets/form.min.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% endif %}

{% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '\" ~ uri.route(true) ~\"',
        base_url_relative: '\" ~ base_url_relative ~ \"',
        param_sep: '\"~ config.system.param_sep ~ \"',
        form_nonce: '\" ~ form.getNonce() ~ \"',
        session_timeout: \" ~ config.system.session.timeout ~ \"
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
\", {'group': 'bottom', 'position': 'before', 'priority': 100}) %}

{# Backwards Compatibility for block overrides #}
{% set override_form_classes %}
  {% block form_classes -%}
    {{ form_outer_classes }} {{ form.classes }}
  {%- endblock %}
{% endset %}

{% set override_inner_markup_fields_start %}
  {% block inner_markup_fields_start %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields_end %}
  {% block inner_markup_fields_end %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields %}
  {% block inner_markup_fields %}
    {% for field_name, field in form.fields %}
      {% set field_name = field.name ?? field_name %}
      {% if field_name and not field.validate.ignore %}
        {%- if field_name starts with '.' -%}
          {% set field_name = field_name[1:] %}
          {% set field = field|merge({ name: field_name }) %}
        {% endif %}

        {% set value = form ? form.value(field_name) : data.value(field_name) %}
        {% block inner_markup_field_open %}{% endblock %}
        {% block field %}
          {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
        {% endblock %}
        {% block inner_markup_field_close %}{% endblock %}
      {% endif %}
    {% endfor %}
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_start %}
  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: 'buttons'}}\">
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_end %}
  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}
{% endset %}

{# Embed for HTML layout #}
{% embed 'forms/layouts/form.html.twig' %}

  {% block embed_form_core %}
    name=\"{{ form.name }}\"
    action=\"{{ action }}\"
    method=\"{{ method }}\"{{ multipart|raw }}
    {% if form.id %}id=\"{{ form.id }}\"{% endif %}
    {% if form.novalidate %}novalidate{% endif %}
    {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
    {% if form.attributes is defined %}
      {% for key,attribute in form.attributes %}
        {% if attribute|of_type('array') %}
          {{ attribute.name }}=\"{{ attribute.value|e('html_attr') }}\"
        {% else %}
          {{ key }}=\"{{ attribute|e('html_attr') }}\"
        {% endif %}
      {% endfor %}
    {% endif %}
  {% endblock %}

  {% block embed_form_classes -%}
    class=\"{{ parent() }} {{ override_form_classes|trim }}\"
  {%- endblock %}

  {% block embed_form_custom_attributes %}
    {% for k, v in blueprints.form.attributes %}
      {{ k }}=\"{{ v|e }}\"
    {% endfor %}
  {% endblock %}

  {% block embed_fields %}
    {{ override_inner_markup_fields_start|raw }}
    {{ override_inner_markup_fields|raw }}

    {% include \"forms/fields/formname/formname.html.twig\" %}
    {% include \"forms/fields/formtask/formtask.html.twig\" %}
    {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}
    {{ nonce_field(form.getNonceAction() ?? 'form', form.getNonceName() ?? 'form-nonce')|raw }}

    {{ override_inner_markup_fields_end|raw }}
  {% endblock %}

  {% block embed_buttons %}
    {{ override_inner_markup_buttons_start|raw }}

    {% for button in form.buttons %}
      {% if button.outerclasses is defined %}<div class=\"{{ button.outerclasses }}\">{% endif %}

      {% if button.url %}
      {% set button_url = button.url starts with 'http' ? button.url : base_url ~ button.url %}
      {% endif %}

      {% embed 'forms/layouts/button.html.twig' %}
        {% block embed_button_core %}
          {% if button.id %}id=\"{{ button.id }}\"{% endif %}
          {% if button.disabled %}disabled=\"disabled\"{% endif %}
          {% if button.name %}
            name=\"{{ button.name }}\"
          {% else %}
            {% if button.task %}name=\"task\" value=\"{{ button.task }}\"{% endif %}
          {% endif %}
          type=\"{{ button.type|default('submit') }}\"
          {% if button.attributes is defined %}
            {% for key,attribute in button.attributes %}
              {% if attribute|of_type('array') %}
                {{ attribute.name }}=\"{{ attribute.value|e('html_attr') }}\"
              {% else %}
                {{ key }}=\"{{ attribute|e('html_attr') }}\"
              {% endif %}
            {% endfor %}
          {% endif %}
        {% endblock %}

        {% block embed_button_classes %}
          {% block button_classes %}
            class=\"{{ form_button_classes ?: 'button' }} {{ button.classes }}\"
          {% endblock %}
        {% endblock %}

        {% block embed_button_content -%}
          {%- set button_value = button.value|t|default('Submit') -%}
          {%- if button.html -%}
            {{- button_value|trim|raw -}}
          {%- else -%}
            {{- button_value|trim|e -}}
          {%- endif -%}
        {%- endblock %}

      {% endembed %}

      {% if button.outerclasses is defined %}</div>{% endif %}
    {% endfor %}

    {{ override_inner_markup_buttons_end }}
  {% endblock %}

{% endembed %}


{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include 'forms/dropzone/template.html.twig' %}
</div>
{% endif %}
", "forms/default/form.html.twig", "C:\\wamp64\\www\\dmdExhibitions\\user\\plugins\\form\\templates\\forms\\default\\form.html.twig");
    }
}
