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
class __TwigTemplate_177fc7f0e789a412d5134933e2b239da76b513b93682956419b1fa6004e097b2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'hero' => [$this, 'block_hero'],
            'hero1' => [$this, 'block_hero1'],
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
        $context["blog_image"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []))));
        // line 4
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 5
        $context["blog"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "blog_url"), $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "blog-page"))], "method");
        // line 6
        $context["show_breadcrumbs"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_breadcrumbs", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 7
        $context["show_sidebar"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_sidebar", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 8
        $context["show_pagination"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->pageHeaderVarFunc($context, "show_pagination", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "testForm.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 11
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bricklayer.css"], "method");
        // line 12
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 17
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/bricklayer.min.js"], "method");
        // line 18
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/scopedQuerySelectorShim.min.js"], "method");
    }

    // line 22
    public function block_hero($context, array $blocks = [])
    {
        // line 23
        echo "    ";
        $this->loadTemplate("partials/hero.html.twig", "testForm.html.twig", 23)->display(twig_array_merge($context, ["id" => "blog-hero", "content" => $this->getAttribute(($context["page"] ?? null), "content", [])]));
    }

    // line 25
    public function block_hero1($context, array $blocks = [])
    {
        // line 26
        echo "    ";
        $this->loadTemplate("partials/hero.html.twig", "testForm.html.twig", 26)->display(twig_array_merge($context, ["id" => "blog-hero1", "imageEmbed" => $this->getAttribute(($context["page"] ?? null), "imageEmbed", [])]));
    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        // line 30
        echo "    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container ";
        // line 31
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">

        ";
        // line 33
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 34
            echo "            ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "testForm.html.twig", 34)->display($context);
            // line 35
            echo "        ";
        }
        // line 36
        echo "
        ";
        // line 37
        $this->loadTemplate("testForm.html.twig", "testForm.html.twig", 37, "1953719843")->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null)]));
        // line 59
        echo "        </section>
    </section>
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
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
        return array (  124 => 59,  122 => 37,  119 => 36,  116 => 35,  113 => 34,  111 => 33,  106 => 31,  103 => 30,  100 => 29,  95 => 26,  92 => 25,  87 => 23,  84 => 22,  79 => 18,  77 => 17,  72 => 16,  69 => 15,  62 => 12,  59 => 11,  56 => 10,  51 => 1,  49 => 8,  47 => 7,  45 => 6,  43 => 5,  41 => 4,  39 => 2,  33 => 1,);
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
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}

{% set collection = page.collection() %}
{% set blog = page.find(header_var('blog_url')|defined(theme_var('blog-page'))) %}
{% set show_breadcrumbs = header_var('show_breadcrumbs', [page, blog])|defined(true) %}
{% set show_sidebar = header_var('show_sidebar', [page, blog])|defined(true)  %}
{% set show_pagination = header_var('show_pagination', [page, blog])|defined(true) %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
    {% do assets.add('theme://js/scopedQuerySelectorShim.min.js') %}
{% endblock %}


{% block hero %}
    {% include 'partials/hero.html.twig' with {id: 'blog-hero', content: page.content} %}
{% endblock %}
{% block hero1 %}
    {% include 'partials/hero.html.twig' with {id: 'blog-hero1', imageEmbed: page.imageEmbed} %}
{% endblock %}

{% block body %}
    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container {{ grid_size }}\">

        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

                <div class=\"bricklayer\">
                {% for child in collection %}
                    {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                {% endfor %}
                </div>

                {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                    <div id=\"listing-footer\">
                        {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                    </div>
                {% endif %}
               

            {% endblock %}

            {% block sidebar %}
                {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
        {% endembed %}
        </section>
    </section>
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
{% endblock %}



", "testForm.html.twig", "C:\\wamp64\\www\\dmdExhibitions\\user\\themes\\quark\\templates\\testForm.html.twig");
    }
}


/* testForm.html.twig */
class __TwigTemplate_177fc7f0e789a412d5134933e2b239da76b513b93682956419b1fa6004e097b2___1953719843 extends \Twig\Template
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
        // line 37
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "testForm.html.twig", 37);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_item($context, array $blocks = [])
    {
        // line 39
        echo "
                <div class=\"bricklayer\">
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 42
            echo "                    ";
            $this->loadTemplate("partials/blog-list-item.html.twig", "testForm.html.twig", 42)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"]]));
            // line 43
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </div>

                ";
        // line 46
        if (((($context["show_pagination"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", [])) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 47
            echo "                    <div id=\"listing-footer\">
                        ";
            // line 48
            $this->loadTemplate("partials/pagination.html.twig", "testForm.html.twig", 48)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 49
            echo "                    </div>
                ";
        }
        // line 51
        echo "               

            ";
    }

    // line 55
    public function block_sidebar($context, array $blocks = [])
    {
        // line 56
        echo "                ";
        $this->loadTemplate("partials/sidebar.html.twig", "testForm.html.twig", 56)->display($context);
        // line 57
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
        return array (  325 => 57,  322 => 56,  319 => 55,  313 => 51,  309 => 49,  307 => 48,  304 => 47,  302 => 46,  298 => 44,  284 => 43,  281 => 42,  264 => 41,  260 => 39,  257 => 38,  247 => 37,  124 => 59,  122 => 37,  119 => 36,  116 => 35,  113 => 34,  111 => 33,  106 => 31,  103 => 30,  100 => 29,  95 => 26,  92 => 25,  87 => 23,  84 => 22,  79 => 18,  77 => 17,  72 => 16,  69 => 15,  62 => 12,  59 => 11,  56 => 10,  51 => 1,  49 => 8,  47 => 7,  45 => 6,  43 => 5,  41 => 4,  39 => 2,  33 => 1,);
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
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}

{% set collection = page.collection() %}
{% set blog = page.find(header_var('blog_url')|defined(theme_var('blog-page'))) %}
{% set show_breadcrumbs = header_var('show_breadcrumbs', [page, blog])|defined(true) %}
{% set show_sidebar = header_var('show_sidebar', [page, blog])|defined(true)  %}
{% set show_pagination = header_var('show_pagination', [page, blog])|defined(true) %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
    {% do assets.add('theme://js/scopedQuerySelectorShim.min.js') %}
{% endblock %}


{% block hero %}
    {% include 'partials/hero.html.twig' with {id: 'blog-hero', content: page.content} %}
{% endblock %}
{% block hero1 %}
    {% include 'partials/hero.html.twig' with {id: 'blog-hero1', imageEmbed: page.imageEmbed} %}
{% endblock %}

{% block body %}
    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container {{ grid_size }}\">

        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

                <div class=\"bricklayer\">
                {% for child in collection %}
                    {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                {% endfor %}
                </div>

                {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                    <div id=\"listing-footer\">
                        {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                    </div>
                {% endif %}
               

            {% endblock %}

            {% block sidebar %}
                {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
        {% endembed %}
        </section>
    </section>
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
{% endblock %}



", "testForm.html.twig", "C:\\wamp64\\www\\dmdExhibitions\\user\\themes\\quark\\templates\\testForm.html.twig");
    }
}
