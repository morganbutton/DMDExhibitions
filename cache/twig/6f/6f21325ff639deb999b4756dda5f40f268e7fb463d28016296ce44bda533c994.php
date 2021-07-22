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

/* partials/dashboard-notifications.html.twig */
class __TwigTemplate_652d8f95dc524398d5423cbb6ff8ee47ced2df3861656f8a2b48886b47b29bf6 extends \Twig\Template
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
        echo "<div id=\"notifications\" class=\"dashboard-item admin-block default-box-shadow\">
    <h1>
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NOTIFICATIONS"), "html", null, true);
        echo "
        <span class=\"right\">
            <a href=\"#\" class=\"button button-small\" data-refresh=\"notifications\"><i class=\"fa fa-refresh\"></i></a>
        </span>
    </h1>

    <div class=\"widget-content\">
        <div class=\"widget-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
        <ul></ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/dashboard-notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"notifications\" class=\"dashboard-item admin-block default-box-shadow\">
    <h1>
        {{ \"PLUGIN_ADMIN.NOTIFICATIONS\"|tu }}
        <span class=\"right\">
            <a href=\"#\" class=\"button button-small\" data-refresh=\"notifications\"><i class=\"fa fa-refresh\"></i></a>
        </span>
    </h1>

    <div class=\"widget-content\">
        <div class=\"widget-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
        <ul></ul>
    </div>
</div>
", "partials/dashboard-notifications.html.twig", "C:\\wamp64\\www\\dmdExhibitions\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\dashboard-notifications.html.twig");
    }
}
