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
  

  ";
        // line 17
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "attachments", [])) {
            echo " ";
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "attachmentembed", []));
            $content = ob_get_clean();
            preg_match("/^\s*/", $content, $matches);
            $lines = explode("\n", $content);
            $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
            $content = join("\n", $content);
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
            echo " ";
        }
        // line 18
        echo " ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "audioembed", [])) {
            echo " ";
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "audioembed", []));
            echo " ";
            $content = ob_get_clean();
            preg_match("/^\s*/", $content, $matches);
            $lines = explode("\n", $content);
            $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
            $content = join("\n", $content);
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
            echo " ";
        }
        // line 19
        echo "   
    <div class=\"e-content\">
        ";
        // line 21
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    </div>

    ";
        // line 24
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "comments", []), "enabled", []))) {
            // line 25
            echo "        ";
            $this->loadTemplate("partials/comments.html.twig", "partials/blog-item1.html.twig", 25)->display($context);
            // line 26
            echo "    ";
        }
        // line 27
        echo "</div>
     
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 30
            echo "        ";
            echo $this->getAttribute($this->getAttribute($context["image"], "cropZoom", [0 => 800, 1 => 400], "method"), "html", []);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "   
   
    
     

<p class=\"prev-next text-center\">
    ";
        // line 38
        if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
            // line 39
            echo "            <a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []), "html", null, true);
            echo "\"><i class=\"fa fa-angle-left\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.BLOG.ITEM.PREV_POST"), "html", null, true);
            echo "</a>
    ";
        }
        // line 41
        echo "
    ";
        // line 42
        if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
            // line 43
            echo "        <a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.BLOG.ITEM.NEXT_POST"), "html", null, true);
            echo " <i class=\"fa fa-angle-right\"></i></a>
    ";
        }
        // line 45
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
        return array (  163 => 45,  155 => 43,  153 => 42,  150 => 41,  142 => 39,  140 => 38,  132 => 32,  123 => 30,  119 => 29,  115 => 27,  112 => 26,  109 => 25,  107 => 24,  101 => 21,  97 => 19,  82 => 18,  69 => 17,  63 => 14,  60 => 13,  56 => 11,  53 => 10,  50 => 9,  44 => 7,  41 => 6,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
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
  

  {% if page.header.attachments %} {% markdown %}{{ page.header.attachmentembed|e }}{% endmarkdown %} {% endif %}
 {% if page.header.audioembed %} {% markdown %}{{ page.header.audioembed|e }} {% endmarkdown %} {% endif %}
   
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
