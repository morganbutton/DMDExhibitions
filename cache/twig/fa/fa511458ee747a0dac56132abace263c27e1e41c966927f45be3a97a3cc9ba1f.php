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

/* partials/hero.html.twig */
class __TwigTemplate_618f075dfbab4948ea3fe7b106c052eb2a7739c557e4658ef6d0766bbbb204ff extends \Twig\Template
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
        echo "<section id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"section modular-hero hero ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_classes", []), "html", null, true);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "background", []), "parallax", [])) ? ("parallax") : (""));
        echo "\" ";
        if (($context["hero_image"] ?? null)) {
            echo "style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["hero_image"] ?? null), "url", []), "html", null, true);
            echo "');\"";
        }
        echo ">
    <div class=\"image-overlay\"></div>
    <section class=\"container ";
        // line 3
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\" style=\"text-align: ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "hero_align", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "hero_align", []), "center")) : ("center")), "html", null, true);
        echo "\">
        ";
        // line 4
        echo ($context["content"] ?? null);
        echo "
    </section>
    <i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 4,  46 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"{{ id }}\" class=\"section modular-hero hero {{ page.header.hero_classes }} {{ page.header.background.parallax ? 'parallax' : '' }}\" {% if hero_image %}style=\"background-image: url('{{ hero_image.url }}');\"{% endif %}>
    <div class=\"image-overlay\"></div>
    <section class=\"container {{ grid_size }}\" style=\"text-align: {{ page.header.hero_align|default('center') }}\">
        {{ content|raw }}
    </section>
    <i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>
", "partials/hero.html.twig", "C:\\wamp64\\www\\dmdExhibitions\\user\\themes\\quark\\templates\\partials\\hero.html.twig");
    }
}
