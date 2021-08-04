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

/* partials/blog-item1.html.twig */
class __TwigTemplate_69a23103cb8dd7e235dff2a77529f70d8a0d169c126502494dec6fedaa0eb6a8 extends \Twig\Template
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
        echo "<div class=\"content-item h-entry\">

";
        // line 3
        if ( !($context["hero_image_name"] ?? null)) {
            // line 4
            echo "    <div class=\"content-title text-center\">
        ";
            // line 5
            $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-item1.html.twig", 5)->display(twig_array_merge($context, ["title_level" => "h2"]));
            // line 6
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", [])) {
                // line 7
                echo "        <h3 >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []), "html", null, true);
                echo "</h3>
        ";
            }
            // line 9
            echo "        ";
            $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-item1.html.twig", 9)->display($context);
            // line 10
            echo "        ";
            $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-item1.html.twig", 10)->display($context);
            // line 11
            echo "    </div>
";
        }
        // line 13
        echo "
 <p> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "textcontent", []), "html", null, true);
        echo " </p>
    <div class=\"e-content\">
        ";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    </div>

    ";
        // line 19
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "comments", []), "enabled", []))) {
            // line 20
            echo "        ";
            $this->loadTemplate("partials/comments.html.twig", "partials/blog-item1.html.twig", 20)->display($context);
            // line 21
            echo "    ";
        }
        // line 22
        echo "</div>
     
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 25
            echo "        ";
            echo $this->getAttribute($this->getAttribute($context["image"], "cropZoom", [0 => 800, 1 => 400], "method"), "html", []);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    
     

<p class=\"prev-next text-center\">
    ";
        // line 31
        if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
            // line 32
            echo "            <a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []), "html", null, true);
            echo "\"><i class=\"fa fa-angle-left\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.BLOG.ITEM.PREV_POST"), "html", null, true);
            echo "</a>
    ";
        }
        // line 34
        echo "
    ";
        // line 35
        if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
            // line 36
            echo "        <a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.BLOG.ITEM.NEXT_POST"), "html", null, true);
            echo " <i class=\"fa fa-angle-right\"></i></a>
    ";
        }
        // line 38
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "partials/blog-item1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 38,  120 => 36,  118 => 35,  115 => 34,  107 => 32,  105 => 31,  99 => 27,  90 => 25,  86 => 24,  82 => 22,  79 => 21,  76 => 20,  74 => 19,  68 => 16,  63 => 14,  60 => 13,  56 => 11,  53 => 10,  50 => 9,  44 => 7,  41 => 6,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content-item h-entry\">

{% if not hero_image_name %}
    <div class=\"content-title text-center\">
        {% include 'partials/blog/title.html.twig' with {title_level: 'h2'} %}
        {% if page.header.subtitle %}
        <h3 >{{ page.header.subtitle }}</h3>
        {% endif %}
        {% include 'partials/blog/date.html.twig' %}
        {% include 'partials/blog/taxonomy.html.twig' %}
    </div>
{% endif %}

 <p> {{ page.header.textcontent }} </p>
    <div class=\"e-content\">
        {{ page.content|raw }}
    </div>

    {% if page.header.continue_link is same as(true) and config.plugins.comments.enabled %}
        {% include 'partials/comments.html.twig' %}
    {% endif %}
</div>
     
    {% for image in page.media.images %}
        {{ image.cropZoom(800,400).html|raw }}
    {% endfor %}
    
     

<p class=\"prev-next text-center\">
    {% if not page.isLast %}
            <a class=\"btn\" href=\"{{ page.prevSibling.url }}\"><i class=\"fa fa-angle-left\"></i> {{ 'THEME_QUARK.BLOG.ITEM.PREV_POST'|t }}</a>
    {% endif %}

    {% if not page.isFirst %}
        <a class=\"btn\" href=\"{{ page.nextSibling.url }}\">{{ 'THEME_QUARK.BLOG.ITEM.NEXT_POST'|t }} <i class=\"fa fa-angle-right\"></i></a>
    {% endif %}
</p>
", "partials/blog-item1.html.twig", "/var/www/html/user/themes/quark/templates/partials/blog-item1.html.twig");
    }
}