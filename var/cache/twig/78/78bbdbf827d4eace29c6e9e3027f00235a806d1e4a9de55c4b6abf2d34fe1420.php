<?php

/* login.html.twig */
class __TwigTemplate_bdf617437ff360f8ebad15cef57290966e72e4cb300603cd6d0f9b84cf194a63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Identifiez-vous";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2 class=\"text-center\">";
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "<div class=\"alert alert-danger\">
    <strong>Login failed!</strong> ";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
</div>
";
        }
        // line 12
        echo "<div class=\"well\">
    <form class=\"form-signin form-horizontal\" role=\"form\" action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <div class=\"form-group\">
            <div class=\"col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4\">
            <input type=\"text\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Saisissez votre pseudo\" required autofocus>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4\">
                <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Saisissez votre mot de passe\" required>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4\">
                <button type=\"submit\" class=\"btn btn-default btn-primary\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</button>
            </div>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  57 => 13,  54 => 12,  48 => 9,  45 => 8,  43 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block title %}Identifiez-vous{% endblock %}

{% block content %}
<h2 class=\"text-center\">{{ block('title') }}</h2>
{% if error %}
<div class=\"alert alert-danger\">
    <strong>Login failed!</strong> {{ error }}
</div>
{% endif %}
<div class=\"well\">
    <form class=\"form-signin form-horizontal\" role=\"form\" action=\"{{ path('login_check') }}\" method=\"post\">
        <div class=\"form-group\">
            <div class=\"col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4\">
            <input type=\"text\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\" placeholder=\"Saisissez votre pseudo\" required autofocus>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4\">
                <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Saisissez votre mot de passe\" required>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4\">
                <button type=\"submit\" class=\"btn btn-default btn-primary\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</button>
            </div>
        </div>
    </form>
</div>
{% endblock %}", "login.html.twig", "F:\\WEB_FACTORY_C\\MicroCMS\\views\\login.html.twig");
    }
}
