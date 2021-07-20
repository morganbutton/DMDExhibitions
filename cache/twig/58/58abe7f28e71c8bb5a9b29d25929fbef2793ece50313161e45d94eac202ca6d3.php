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

/* partials/sidebar.html.twig */
class __TwigTemplate_16a81a2cee5297fb4d7fbd66ded696c231b7e677129bd88e3d5887bdbb90aeb6 extends \Twig\Template
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
        $context["feed_url"] = (((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/") || ($this->getAttribute(($context["blog"] ?? null), "url", []) == ($context["base_url_relative"] ?? null)))) ? (((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["blog"] ?? null), "slug", []))) : ($this->getAttribute(($context["blog"] ?? null), "url", [])));
        // line 2
        $context["new_base_url"] = ((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/")) ? ("") : ($this->getAttribute(($context["blog"] ?? null), "url", [])));
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 5
            echo "<div class=\"sidebar-content\">
    ";
            // line 6
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 6)->display($context);
            // line 7
            echo "</div>
";
        }
        // line 9
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 10
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.SIDEBAR.RELATED_POSTS.HEADLINE"), "html", null, true);
            echo "</h4>
    ";
            // line 12
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 12)->display($context);
            // line 13
            echo "</div>
";
        }
        // line 15
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "random", []), "enabled", [])) {
            // line 16
            echo "<div class=\"sidebar-content\">
\t<h4>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.SIDEBAR.RANDOM_ARTICLE.HEADLINE"), "html", null, true);
            echo "</h4>
\t<a class=\"button\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/random\"><i class=\"fa fa-retweet\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY"), "html", null, true);
            echo "</a>
</div>
";
        }
        // line 21
        echo "
";
        // line 22
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/modules/sidebar"], "method"), "content", []);
        echo "

";
        // line 24
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "taxonomylist", []), "enabled", [])) {
            // line 25
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.SIDEBAR.POPULAR_TAGS.HEADLINE"), "html", null, true);
            echo "</h4>
    ";
            // line 27
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 27)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag"]));
            // line 28
            echo "</div>
";
        }
        // line 30
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "enabled", [])) {
            // line 31
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.SIDEBAR.ARCHIVES.HEADLINE"), "html", null, true);
            echo "</h4>
\t";
            // line 33
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 33)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null)]));
            // line 34
            echo "</div>
";
        }
        // line 36
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
            // line 37
            echo "<div class=\"sidebar-content syndicate\">
    <h4>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "THEME_QUARK.SIDEBAR.SYNDICATE.HEADLINE"), "html", null, true);
            echo "</h4>
    <a class=\"btn\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["feed_url"] ?? null), "html", null, true);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"btn\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["feed_url"] ?? null), "html", null, true);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
    ";
            // line 41
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enable_json_feed", [])) {
                echo "<a class=\"btn\" href=\"";
                echo twig_escape_filter($this->env, ($context["feed_url"] ?? null), "html", null, true);
                echo ".json\"><i class=\"fa fa-rss-square\"></i> JSON</a>";
            }
            // line 42
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 42,  135 => 41,  131 => 40,  127 => 39,  123 => 38,  120 => 37,  118 => 36,  114 => 34,  112 => 33,  108 => 32,  105 => 31,  103 => 30,  99 => 28,  97 => 27,  93 => 26,  90 => 25,  88 => 24,  83 => 22,  80 => 21,  72 => 18,  68 => 17,  65 => 16,  63 => 15,  59 => 13,  57 => 12,  53 => 11,  50 => 10,  48 => 9,  44 => 7,  42 => 6,  39 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative~'/'~blog.slug) : blog.url %}
{% set new_base_url = blog.url == '/' ? '' : blog.url %}

{% if config.plugins.simplesearch.enabled %}
<div class=\"sidebar-content\">
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</div>
{% endif %}
{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
<div class=\"sidebar-content\">
    <h4>{{ 'THEME_QUARK.SIDEBAR.RELATED_POSTS.HEADLINE'|t }}</h4>
    {% include 'partials/relatedpages.html.twig' %}
</div>
{% endif %}
{% if config.plugins.random.enabled %}
<div class=\"sidebar-content\">
\t<h4>{{ 'THEME_QUARK.SIDEBAR.RANDOM_ARTICLE.HEADLINE'|t }}</h4>
\t<a class=\"button\" href=\"{{ base_url }}/random\"><i class=\"fa fa-retweet\"></i> {{ 'THEME_QUARK.SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY'|t }}</a>
</div>
{% endif %}

{{ page.find('/modules/sidebar').content|raw }}

{% if config.plugins.taxonomylist.enabled %}
<div class=\"sidebar-content\">
    <h4>{{ 'THEME_QUARK.SIDEBAR.POPULAR_TAGS.HEADLINE'|t }}</h4>
    {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
</div>
{% endif %}
{% if config.plugins.archives.enabled %}
<div class=\"sidebar-content\">
    <h4>{{ 'THEME_QUARK.SIDEBAR.ARCHIVES.HEADLINE'|t }}</h4>
\t{% include 'partials/archives.html.twig' with {'base_url':new_base_url} %}
</div>
{% endif %}
{% if config.plugins.feed.enabled %}
<div class=\"sidebar-content syndicate\">
    <h4>{{ 'THEME_QUARK.SIDEBAR.SYNDICATE.HEADLINE'|t }}</h4>
    <a class=\"btn\" href=\"{{ feed_url }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"btn\" href=\"{{ feed_url }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
    {% if config.plugins.feed.enable_json_feed %}<a class=\"btn\" href=\"{{ feed_url }}.json\"><i class=\"fa fa-rss-square\"></i> JSON</a>{% endif %}
</div>
{% endif %}
", "partials/sidebar.html.twig", "C:\\wamp64\\www\\dmdExhibitions\\user\\themes\\quark\\templates\\partials\\sidebar.html.twig");
    }
}
