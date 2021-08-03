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

/* testForm.html.twig */
class __TwigTemplate_ae58bb188cd577e782115a3ebcfd2a8e85f4858f20f1d870a684f757dea472ac extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["blog"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "blog_url"), $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "blog-page"))], "method");
        // line 3
        $context["show_breadcrumbs"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_breadcrumbs", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 4
        $context["show_sidebar"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_sidebar", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 5
        $context["show_pagination"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_pagination", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 6
        $context["hero_image_name"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []);
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "testForm.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_hero($context, array $blocks = [])
    {
        // line 9
        echo "    ";
        if (($context["hero_image_name"] ?? null)) {
            // line 10
            echo "        ";
            $context["hero_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), ($context["hero_image_name"] ?? null), [], "array");
            // line 11
            echo "        ";
            ob_start();
            // line 12
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</h1>
            <h2>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []), "html", null, true);
            echo "</h2>
            ";
            // line 14
            $this->loadTemplate("partials/blog/date.html.twig", "testForm.html.twig", 14)->display($context);
            // line 15
            echo "            ";
            $this->loadTemplate("partials/blog/taxonomy.html.twig", "testForm.html.twig", 15)->display($context);
            // line 16
            echo "            
        ";
            $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 18
            echo "        ";
            $this->loadTemplate("partials/hero.html.twig", "testForm.html.twig", 18)->display(twig_array_merge($context, ["id" => "blog-hero"]));
            // line 19
            echo "
    ";
        }
    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        // line 24
        echo "<section id=\"body-wrapper\" class=\"section blog-listing\">
    <section class=\"container ";
        // line 25
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
    

        ";
        // line 28
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 29
            echo "            ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "testForm.html.twig", 29)->display($context);
            // line 30
            echo "        ";
        }
        // line 31
        echo "    
        ";
        // line 32
        $this->loadTemplate("testForm.html.twig", "testForm.html.twig", 32, "1575299481")->display($context);
        // line 43
        echo "   

    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "testForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 43,  113 => 32,  110 => 31,  107 => 30,  104 => 29,  102 => 28,  96 => 25,  93 => 24,  90 => 23,  84 => 19,  81 => 18,  77 => 16,  74 => 15,  72 => 14,  68 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
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
{% set blog = page.find(header_var('blog_url')|defined(theme_var('blog-page'))) %}
{% set show_breadcrumbs = header_var('show_breadcrumbs', [page, blog])|defined(true) %}
{% set show_sidebar = header_var('show_sidebar', [page, blog])|defined(true)  %}
{% set show_pagination = header_var('show_pagination', [page, blog])|defined(true) %}
{% set hero_image_name = page.header.hero_image %}

{% block hero %}
    {% if hero_image_name %}
        {% set hero_image = page.media[hero_image_name] %}
        {% set content %}
            <h1>{{ page.title }}</h1>
            <h2>{{ page.header.subtitle }}</h2>
            {% include 'partials/blog/date.html.twig' %}
            {% include 'partials/blog/taxonomy.html.twig' %}
            
        {% endset %}
        {% include 'partials/hero.html.twig' with {id: 'blog-hero'} %}

    {% endif %}
{% endblock %}

{% block body %}
<section id=\"body-wrapper\" class=\"section blog-listing\">
    <section class=\"container {{ grid_size }}\">
    

        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}
    
        {% embed 'partials/layout.html.twig' %}
            {% block item %}
                {% include 'partials/blog-item1.html.twig' %}
            {% endblock %}
            
            
            
            {% block sidebar %}
                {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
        {% endembed %}
   

    </section>
</section>
{% endblock %}
", "testForm.html.twig", "/var/www/html/user/themes/quark/templates/testForm.html.twig");
    }
}


/* testForm.html.twig */
class __TwigTemplate_ae58bb188cd577e782115a3ebcfd2a8e85f4858f20f1d870a684f757dea472ac___1575299481 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'item' => [$this, 'block_item'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 32
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "testForm.html.twig", 32);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_item($context, array $blocks = [])
    {
        // line 34
        echo "                ";
        $this->loadTemplate("partials/blog-item1.html.twig", "testForm.html.twig", 34)->display($context);
        // line 35
        echo "            ";
    }

    // line 39
    public function block_sidebar($context, array $blocks = [])
    {
        // line 40
        echo "                ";
        $this->loadTemplate("partials/sidebar.html.twig", "testForm.html.twig", 40)->display($context);
        // line 41
        echo "            ";
    }

    public function getTemplateName()
    {
        return "testForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 41,  238 => 40,  235 => 39,  231 => 35,  228 => 34,  225 => 33,  215 => 32,  115 => 43,  113 => 32,  110 => 31,  107 => 30,  104 => 29,  102 => 28,  96 => 25,  93 => 24,  90 => 23,  84 => 19,  81 => 18,  77 => 16,  74 => 15,  72 => 14,  68 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
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
{% set blog = page.find(header_var('blog_url')|defined(theme_var('blog-page'))) %}
{% set show_breadcrumbs = header_var('show_breadcrumbs', [page, blog])|defined(true) %}
{% set show_sidebar = header_var('show_sidebar', [page, blog])|defined(true)  %}
{% set show_pagination = header_var('show_pagination', [page, blog])|defined(true) %}
{% set hero_image_name = page.header.hero_image %}

{% block hero %}
    {% if hero_image_name %}
        {% set hero_image = page.media[hero_image_name] %}
        {% set content %}
            <h1>{{ page.title }}</h1>
            <h2>{{ page.header.subtitle }}</h2>
            {% include 'partials/blog/date.html.twig' %}
            {% include 'partials/blog/taxonomy.html.twig' %}
            
        {% endset %}
        {% include 'partials/hero.html.twig' with {id: 'blog-hero'} %}

    {% endif %}
{% endblock %}

{% block body %}
<section id=\"body-wrapper\" class=\"section blog-listing\">
    <section class=\"container {{ grid_size }}\">
    

        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}
    
        {% embed 'partials/layout.html.twig' %}
            {% block item %}
                {% include 'partials/blog-item1.html.twig' %}
            {% endblock %}
            
            
            
            {% block sidebar %}
                {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
        {% endembed %}
   

    </section>
</section>
{% endblock %}
", "testForm.html.twig", "/var/www/html/user/themes/quark/templates/testForm.html.twig");
    }
}
